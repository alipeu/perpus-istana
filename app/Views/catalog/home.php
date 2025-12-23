<?= $this->include('layouts/header') ?>

<!--    <section id="billboard" class="align-center pb-5 mb-5 banner" style="background-image: url('<?= base_url("assets/_MDS3765_Z5.jpg") ?>'); background-repeat: no-repeat;   background-attachment: fixed; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-slider">
						<div class="inner-content" style="background: rgba(0, 0, 0, 0.5); border-radius: 25px;">
                            <h2 class="section-title" style="color: white; text-transform: none;">Selamat Datang di Koleksi Digital<br> Perpustakaan Kepresidenan Bogor</h2>
                            <blockquote data-aos="fade-up" style="color: white;">
                                <p>Jelajahi koleksi digital yang telah dialihmediakan. Gunakan kotak pencarian untuk menemukan judul yang Anda inginkan.</p>
                            </blockquote>
                            <form id="search-form" method="get" action="<?= base_url('/') ?>">
                                <div class="align-center" style="max-width: 700px">
                                    <input type="text" class="form-control" style="height: 50px;"
                                        placeholder="Cari judul koleksi..."
                                        name="q" value="<?= esc($keyword ?? '') ?>">
                                    <div class="btn-wrap">
                                        <a href="#" onclick="submitSearch()" class="btn btn-outline-accent btn-accent-arrow">Cari<i
                                                class="icon icon-ns-arrow-right"></i></a>
								    </div>
                                </div>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<section id="billboard" class="pb-5 mb-5 banner" style="position:relative;">
		<div id="bgCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" style="height:100vh; min-height:450px;">
			<div class="carousel-inner" id="carousel-container">
			</div>
		</div>

		<div class="carousel-overlay-content">
			<div class="inner-content" style="background: rgba(0,0,0,0.5); border-radius:25px; width:1000px; text-align:center;">
			<h2 class="section-title" style="color:white; text-transform:none;">
				Selamat Datang di Koleksi Digital<br>Perpustakaan Kepresidenan Bogor
			</h2>
			<p style="color:white; margin-top:10px;">
				Jelajahi koleksi digital yang telah dialihmediakan. Gunakan kotak pencarian untuk menemukan judul yang Anda inginkan.
			</p>

			<form id="search-form" method="get" action="<?= base_url('/') ?>" style="margin-top:15px;">
				<input type="text" class="form-control" style="height:50px; max-width:700px; margin:auto;"
				placeholder="Cari judul koleksi..." name="q" value="<?= esc($keyword ?? '') ?>">
				<div class="btn-wrap" style="margin-top:10px;">
				<a href="#" onclick="submitSearch()" class="btn btn-outline-accent btn-accent-arrow">
					Cari <i class="icon icon-ns-arrow-right"></i>
				</a>
				</div>
			</form>
			</div>
		</div>
	</section>

	<section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<h2 class="section-title">Koleksi Digital</h2>
					</div>

                    <?php if (empty($books)): ?>
                        <div class="alert alert-info text-center">
                            Belum ada buku yang terdaftar.
                        </div>
                    <?php else: ?>

                        <!-- Grid buku -->
                        <!-- <div class="row g-4">
                            <?php foreach ($books as $b): ?>
                                <?php
                                    $cover = !empty($b['cover_path'])
                                        ? base_url('thumbnails/' . $b['cover_path'])
                                        : 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg';
                                ?>
                                            <div class="col-md-3">
                                                <div class="product-item">
                                                    <a href="<?= base_url('book/' . $b['id']) ?>">
                                                        <figure class="product-style">
                                                            <img src="<?= esc($cover) ?>" alt="<?= esc($b['title']) ?>" class="product-item">
                                                            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Baca</button>
                                                        </figure>
                                                        <figcaption>
                                                            <h3><?= esc($b['title']) ?></h3>
                                                        </figcaption>
                                                    </a>
                                                </div>
                                            </div> 
                            <?php endforeach; ?>

                        </div> -->
						<div class="row g-4">
							<?php foreach ($books as $b): ?>
								<?php
									$cover = !empty($b['cover_path'])
										? base_url('thumbnails/' . $b['cover_path'])
										: 'https://upload.wikimedia.org/wikipedia/commons/6/65/No-Image-Placeholder.svg';

									// URL viewer PDF – kalau kamu sudah punya route /book/{id}
									// yang menampilkan PDF.js, pakai itu.
									$viewerUrl = base_url('pdf/' . $b['file_path']);

								?>

								<div class="col-md-2">
									<div class="product-item">

										<!-- HAPUS <a> besar yang membungkus semuanya,
											supaya tombol bisa dipakai untuk modal -->
										<figure class="product-style">
											<img src="<?= esc($cover) ?>"
												alt="<?= esc($b['title']) ?>"
												class="product-item">

											<!-- Tombol Baca = trigger modal -->
											<button onclick="window.location.href='<?= base_url('viewer/'.$b['id']) ?>'"
													type="button"
													class="add-to-cart">
												Baca
											</button>
										</figure>

										<figcaption class="mt-2 text-center">
											<h3 class="h6 mb-0"><?= esc($b['title']) ?></h3>
											<!-- kalau mau, bisa tampilkan pengarang/tahun di sini -->
											<!-- <span><?= esc($b['author']) ?></span> -->
										</figcaption>

									</div>
								</div>
							<?php endforeach; ?>
						</div>
                        <?php if (isset($pager)): ?>
                            <div class="mt-4">
                                <?= $pager->links('books', 'bootstrap_full') ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

				</div>

			</div>
		</div>
	</section>

	<section id="subscribe">
		<div class="container">
			<div class="row justify-content-center">
                    <img src="<?= base_url('assets/logo-bawah-002.png') ?>"
                            alt="Kolaborasi Perpustakaan"
                            class="img-fluid"
                            style="max-width: 1500px;">
			</div>
		</div>
	</section>
	
	<!-- Modal PDF -->
	<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-md-down">
		<div class="modal-content bg-dark border-0">
		<div class="modal-header border-0">
			<h5 class="modal-title text-white" id="pdfModalLabel">Baca Buku</h5>
			<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body p-0">
			<div class="ratio ratio-16x9">
			<iframe id="pdfModalIframe"
					src=""
					title="PDF Viewer"
					frameborder="0"
					allowfullscreen
					style="border:0;"></iframe>
			</div>
		</div>
		</div>
	</div>
	</div>

	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const pdfModal   = document.getElementById('pdfModal');
		const pdfIframe  = document.getElementById('pdfModalIframe');
		const pdfTitleEl = document.getElementById('pdfModalLabel');

		pdfModal.addEventListener('show.bs.modal', function (event) {
			const button = event.relatedTarget;
			const url    = button.getAttribute('data-url');
			const title  = button.getAttribute('data-title');

			pdfIframe.src = url;
			pdfTitleEl.textContent = title || 'Baca Buku';
		});

		pdfModal.addEventListener('hidden.bs.modal', function () {
			pdfIframe.src = '';
		});
	});

	</script>
	

<?= $this->include('layouts/footer') ?>