<?= $this->include('layouts/header') ?>

<!-- Hero ala Khastara (biarkan tetap, kita pakai) -->
<section class="hero-khastara">
    <div class="row align-items-center g-4">
        <div class="col-md-7">
            <h1 class="mb-2">Koleksi Digital</h1>
            <p class="mb-3">
                Jelajahi koleksi buku digital yang telah dialihmediakan. Gunakan kotak pencarian
                untuk menemukan judul yang Anda perlukan.
            </p>
            <form class="search-hero" method="get" action="<?= base_url('/') ?>">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control"
                           placeholder="Cari judul buku..."
                           name="q" value="<?= esc($keyword ?? '') ?>">
                    <button class="btn btn-warning px-4" type="submit">
                        Cari
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-5 text-md-end">
            <div class="d-inline-flex flex-column align-items-md-end align-items-start gap-2">
                <span class="badge bg-white text-muted border">
                    Total buku: <strong><?= count($books) ?></strong>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Books ala Booksaw -->
<section class="featured-books-section py-5">
    <div class="container">

        <!-- Header section -->
        <div class="row align-items-end mb-4">
            <div class="col-md-8">
                <div class="section-label mb-1">Some quality items</div>
                <h2 class="section-title h3 mb-0">Featured Books</h2>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="<?= base_url('/') ?>" class="btn btn-outline-primary btn-sm btn-view-all">
                    Lihat semua koleksi
                </a>
            </div>
        </div>

        <?php if (empty($books)): ?>
            <div class="alert alert-info text-center">
                Belum ada buku yang terdaftar.
            </div>
        <?php else: ?>

            <!-- Grid buku -->
            <div class="row g-4">
                <?php foreach ($books as $b): ?>
    <?php
        $cover = !empty($b['cover_path'])
            ? base_url('thumbnails/' . $b['cover_path'])
            : 'https://via.placeholder.com/300x400?text=No+Cover';
    ?>

    <div class="col-6 col-md-3 col-lg-2">
        <a href="<?= base_url('book/' . $b['id']) ?>" class="text-decoration-none text-dark">
            <div class="featured-book-card">

                <div class="featured-book-thumb">
                    <img src="<?= esc($cover) ?>" alt="<?= esc($b['title']) ?>">
                    <div class="featured-book-overlay">
                        DETAIL
                    </div>
                </div>

                <div class="featured-book-title mb-1">
                    <?= esc($b['title']) ?>
                </div>

                <div class="featured-book-meta">
                    <?= esc($b['author']) ?>
                    <?= $b['year'] ? ' · ' . esc($b['year']) : '' ?>
                </div>
            </div>
        </a>
    </div>
<?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>
</section>


<section class="newsletter-section text-center py-5">
    <img src="<?= base_url('assets/kolaborasi.png') ?>"
         alt="Kolaborasi Perpustakaan"
         class="img-fluid"
         style="max-width: 750px;">
</section>




<?= $this->include('layouts/footer') ?>
