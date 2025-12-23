<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Koleksi Digital') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >

    <style>
        body {
            background-color: #f3f4f6;
        }

        .navbar-khastara {
            background-color: #ffffff;
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-khastara .navbar-brand {
            font-weight: 700;
            color: #1f2937;
            letter-spacing: 0.03em;
        }

        .navbar-khastara .nav-link {
            color: #4b5563;
            font-weight: 500;
        }

        .navbar-khastara .nav-link.active {
            color: #f59e0b;
        }

        .hero-khastara {
            background: linear-gradient(135deg, #fef3c7, #eef2ff);
            border-radius: 1.5rem;
            padding: 2.5rem 2rem;
            box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08);
            margin-bottom: 2rem;
        }

        .hero-khastara h1 {
            font-weight: 700;
            color: #111827;
        }

        .hero-khastara p {
            color: #4b5563;
        }

        .search-hero input {
            border-radius: 999px 0 0 999px;
        }

        .search-hero button {
            border-radius: 0 999px 999px 0;
        }

        .section-title {
            font-weight: 600;
            color: #111827;
        }

        .card-collection {
            border-radius: 1rem;
            border: none;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
        }

        footer {
            border-top: 1px solid #e5e7eb;
        }
                /* Hover detail di sampul buku */
        .book-thumb-wrapper {
            position: relative;
            display: inline-block;
        }

        .book-thumb-wrapper img {
            display: block;
        }

        .book-thumb-overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            color: #ffffff;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.25rem 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .book-thumb-wrapper:hover .book-thumb-overlay {
            opacity: 1;
        }
                /* Kartu per buku (frame sendiri) */
        .book-card {
            background: #f8f6f1;
            border-radius: 0.75rem;
            padding: 1.25rem 1.25rem 0.75rem;
            box-shadow: 0 6px 15px rgba(15, 23, 42, 0.07);
        }

        .book-thumb-wrapper {
            position: relative;
            display: inline-block;
        }

        .book-thumb-wrapper img {
            display: block;
        }

        .book-thumb-overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            color: #ffffff;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.25rem 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .book-thumb-wrapper:hover .book-thumb-overlay {
            opacity: 1;
        }
              
        /* --- Featured Books ala Booksaw --- */
        /* .featured-books-section {
            background: #f5f3ef; /* krem lembut */
        /*} */

        .featured-books-section .section-label {
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.18em;
            color: #a3a3a3;
        }

        .featured-books-section .section-title {
            font-weight: 700;
        }

        .featured-book-card {
            background: #ffffff;
            border-radius: 1rem;
            padding: 1.25rem;
            height: 100%;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .featured-book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 35px rgba(15, 23, 42, 0.12);
        }

        .featured-book-thumb {
            aspect-ratio: 3 / 4;
            overflow: hidden;
            border-radius: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .featured-book-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.2s ease;
        }

        .featured-book-card:hover .featured-book-thumb img {
            transform: scale(1.03);
        }

        .featured-book-title {
            font-size: 0.95rem;
            font-weight: 600;
            min-height: 2.7em; /* dua baris */
        }

        .featured-book-meta {
            font-size: 0.8rem;
            color: #6b7280;
        }

        /* tombol kecil ala “View all products” */
        .btn-view-all {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            border-radius: 999px;
            padding: 0.4rem 1.4rem;
        }

        /* Kartu newsletter (nanti diisi gambar kolaborasi) */
        /* .newsletter-section {
            background: #fdfbf7;
        } */

        .newsletter-card {
            background: #fdfbf7;
            border-radius: 1.25rem;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
            width: 100%;
        }

                /* Featured Books ala Booksaw */
        /* .featured-books-section {
            background: #f5f3ef; /* kalau mau sama dengan background utama bisa diganti */
        /* }  */

        .featured-book-card {
            background: #ffffff;
            border-radius: 1rem;
            padding: 1.25rem;
            height: 100%;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .featured-book-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 35px rgba(15, 23, 42, 0.12);
        }

        .featured-book-thumb {
            position: relative;         /* supaya overlay bisa nempel */
            aspect-ratio: 3 / 4;
            overflow: hidden;
            border-radius: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .featured-book-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.2s ease;
        }

        .featured-book-card:hover .featured-book-thumb img {
            transform: scale(1.03);
        }

        /* Overlay DETAIL */
        .featured-book-overlay {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            color: #ffffff;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.3rem 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.18s ease-in-out;
        }

        .featured-book-thumb:hover .featured-book-overlay {
            opacity: 1;
        }

        .featured-book-title {
            font-size: 0.95rem;
            font-weight: 600;
            min-height: 2.7em;
        }

        .featured-book-meta {
            font-size: 0.8rem;
            color: #6b7280;
        }

        /* Band kolaborasi, tanpa kartu putih lagi */
      
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-khastara sticky-top">
    <div class="container">
<div class="col-6 d-flex align-items-center">
    <a href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/logo-setneg.png') ?>"
             alt="Logo Left"
             style="height: 45px;">
    </a>
</div>

<div class="col-6 text-end d-flex justify-content-end align-items-center">
    <img src="<?= base_url('assets/logo-perpusnas.png') ?>"
         alt="Logo Right"
         style="height: 45px;">
</div>

    </div>
</nav>


<main class="flex-grow-1 py-4">
    <div class="container">
