<?php

namespace App\Controllers;

use App\Models\BookModel;

class Catalog extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();

        $perPage = 12; // jumlah buku per halaman
        $keyword = $this->request->getGet('q');

        // mulai dari builder dasar
        $builder = $bookModel;

        // kalau ada keyword, tambahkan filter
        if ($keyword) {
            $builder = $builder->like('title', $keyword);
        }

        // PENTING: pakai paginate, bukan findAll()
        $books = $builder
            ->orderBy('id', 'ASC')
            ->paginate($perPage, 'books');

        // kirim data ke view (termasuk pager)
        return view('catalog/home', [
            'books'   => $books,
            'pager'   => $bookModel->pager,
            'keyword' => $keyword,
        ]);
    }

    // public function view($id)
    // {
    //     $book = (new BookModel())->find($id);

    //     if (!$book) {
    //         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    //     }

    //     return view('catalog/view', ['book' => $book]);
    // }
    public function view($id)
    {
        $bookModel = new \App\Models\BookModel();
        $book = $bookModel->find($id);

        if (! $book) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Lokasi PDF di /public/pdf/{file_path}
        // dan PDF.js di /public/pdfjs/web/viewer.html
        $pdfRelative = '../pdf/' . $book['file_path'];     // relatif terhadap pdfjs/web/
        $fileParam   = rawurlencode($pdfRelative);

        $viewerUrl   = base_url('pdfjs/web/viewer.html?file=' . $fileParam);

        return view('catalog/view_embed', [
            'book'      => $book,
            'viewerUrl' => $viewerUrl,
        ]);
    }
    public function viewer($id)
    {
        $bookModel = new \App\Models\BookModel();
        $book = $bookModel->find($id);

        if (! $book) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // PDF relatif untuk PDF.js
        $pdfRelative = '../../pdf/' . $book['file_path'];
        $viewerUrl   = base_url('pdfjs/web/viewer.html?file=' . rawurlencode($pdfRelative) . '&toolbar=0');

        return view('catalog/view_fullscreen', [
            'book'      => $book,
            'viewerUrl' => $viewerUrl,
        ]);
    }
}
