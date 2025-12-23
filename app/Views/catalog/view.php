<?= $this->include('layouts/header') ?>

<?php
    $pdfUrl    = base_url('pdf/' . $book['file_path']);
    $fileParam = rawurlencode($pdfUrl);
    $viewerUrl = base_url('pdfjs/web/viewer.html?file=' . $fileParam);

    $cover = !empty($book['cover_path'])
        ? base_url('thumbnail/' . $book['cover_path'])
        : 'https://via.placeholder.com/300x400?text=No+Cover';
?>

<div class="row mb-4">
    <!-- Kolom kiri: cover + info -->
    <div class="col-md-4 mb-3 mb-md-0">
        <div class="card shadow-sm border-0">
            <img src="<?= esc($cover) ?>" class="card-img-top" alt="<?= esc($book['title']) ?>">
            <div class="card-body">
                <h4 class="card-title"><?= esc($book['title']) ?></h4>
                <p class="card-text text-muted mb-2">
                    <?= esc($book['author']) ?>
                    <?= $book['year'] ? '(' . esc($book['year']) . ')' : '' ?>
                </p>
                <div class="d-grid gap-2">
                    <a href="<?= base_url('/') ?>" class="btn btn-secondary btn-sm">
                        &larr; Kembali ke daftar
                    </a>
                    <a href="<?= $pdfUrl ?>" target="_blank" class="btn btn-outline-primary btn-sm">
                        Buka PDF di tab baru
                    </a>
                    <button type="button" class="btn btn-primary btn-sm" onclick="openFullscreenViewer()">
                        Baca layar penuh
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom kanan: viewer -->
    <div class="col-md-8">
        <div class="ratio ratio-16x9 shadow-sm border">
            <iframe
                id="pdfFrame"
                src="<?= $viewerUrl ?>"
                title="<?= esc($book['title']) ?>"
                allowfullscreen
            ></iframe>
        </div>
    </div>
</div>

<script>
    function openFullscreenViewer() {
        const url = "<?= $viewerUrl ?>";
        window.open(url, "_blank");
    }
</script>

<?= $this->include('layouts/footer') ?>
