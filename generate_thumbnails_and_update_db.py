import os
from pdf2image import convert_from_path
from PIL import Image
import mysql.connector

# ====== KONFIGURASI ======

# Lokasi folder PDF di CI4
PDF_FOLDER = r"D:\Apps\xampp\htdocs\perpus-istana\public\pdf"

# Lokasi folder output thumbnail
THUMB_FOLDER = r"D:\Apps\xampp\htdocs\perpus-istana\public\thumbnails"

# Lokasi Poppler
POPPLER_PATH = r"D:\Apps\xampp\htdocs\perpus-istana\poppler-25.11.0\Library\bin"

# Konfigurasi database MySQL
DB_CONFIG = {
    "host": "localhost",
    "user": "root",
    "password": "",
    "database": "perpusistana",
}

# Ukuran thumbnail (px)
THUMB_SIZE = (300, 400)

# =========================


def get_db_connection():
    return mysql.connector.connect(**DB_CONFIG)


def main():
    # Pastikan folder thumbnail ada
    if not os.path.exists(THUMB_FOLDER):
        os.makedirs(THUMB_FOLDER)

    # Konek ke DB
    conn = get_db_connection()
    cursor = conn.cursor()

    # Ambil semua buku yang punya file_path tapi belum punya cover_path
    cursor.execute("SELECT id, file_path FROM books WHERE file_path IS NOT NULL")
    rows = cursor.fetchall()

    print(f"Total buku: {len(rows)}")

    for book_id, file_path in rows:
        pdf_path = os.path.join(PDF_FOLDER, file_path)

        if not os.path.exists(pdf_path):
            print(f"[SKIP] PDF tidak ditemukan untuk ID {book_id}: {pdf_path}")
            continue

        base_name = os.path.splitext(os.path.basename(file_path))[0]
        output_jpg = base_name + ".jpg"
        output_path = os.path.join(THUMB_FOLDER, output_jpg)

        # Kalau thumbnail sudah ada, bisa skip atau overwrite
        if os.path.exists(output_path):
            print(f"[SKIP] Thumbnail sudah ada: {output_path}")
        else:
            print(f"[GEN] ID {book_id} - {file_path}")

            try:
                images = convert_from_path(
                    pdf_path,
                    dpi=120,
                    first_page=1,
                    last_page=1,
                    poppler_path=POPPLER_PATH
                )

                thumb = images[0]
                thumb.thumbnail(THUMB_SIZE, Image.LANCZOS)
                thumb.save(output_path, "JPEG")
                print(f"      -> Saved {output_path}")
            except Exception as e:
                print(f"[ERR] Gagal generate untuk {pdf_path}: {e}")
                continue

        # Update DB: set cover_path
        cursor.execute(
            "UPDATE books SET cover_path = %s WHERE id = %s",
            (output_jpg, book_id)
        )
        conn.commit()

    cursor.close()
    conn.close()
    print("DONE. Semua selesai diproses.")


if __name__ == "__main__":
    main()
