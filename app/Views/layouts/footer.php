
	<footer id="footer" style="padding-bottom: 0px; margin-top: 0px;">
		<!-- <div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="<?= base_url('assets/logo-setneg.png') ?>" alt="logo" class="footer-logo" style="height: 45px;">
							<img src="<?= base_url('assets/logo-perpusnas.png') ?>" alt="logo" class="footer-logo" style="height: 45px;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus
								nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames
								semper erat ac in suspendisse iaculis.</p>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>About Us</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Books</a>
							</li>
							<li class="menu-item">
								<a href="#">Authors</a>
							</li>
							<li class="menu-item">
								<a href="#">Subjects</a>
							</li>
							<li class="menu-item">
								<a href="#">Advanced Search</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</div> -->
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							<div class="col-md-6 align-center" >
								<p style="font-size: 12px;">© 2025 All rights reserved - Pusat Preservasi dan Alih Media Bahan Perpustakaan <span style="display:none;">Free HTML Template by TemplatesJungle</span></p>
							</div>

							<!-- <div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="#"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div> -->

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="<?= base_url('booksaw/js/jquery-1.11.0.min.js') ?>"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script> -->
	<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('booksaw/js/plugins.js') ?>"></script>
	<script src="<?= base_url('booksaw/js/script.js') ?>"></script>
    <script>
        function submitSearch() {
            document.getElementById("search-form").submit();
        }
    </script>
 <script>
		document.addEventListener("DOMContentLoaded", function() {
		const images = [
			"assets/_ISB1823_Z5.jpg",
			"assets/_ISB1833_Z5.jpg",
			"assets/_ISB1843_Z5.jpg",
			"assets/_ISB1886_Z5.jpg",
			"assets/_ISB1906_Z5.jpg",
			"assets/_ISB2633_Z5.jpg",
			"assets/_ISB2639_Z5.jpg",
			"assets/_ISB2651_Z5.jpg",
			"assets/_ISB2727_Z5.jpg",
			"assets/_ISB9543-Z5-.jpg",
			"assets/_ISB9566-Z5-.jpg",
			"assets/_MDS1730_Z5.jpg",
			"assets/_MDS1733_Z5.jpg",
			"assets/_MDS1787_Z5.jpg",
			"assets/_MDS1871_Z5.jpg",
			"assets/_MDS1941_Z5.jpg",
			"assets/_MDS1983_Z5.jpg",
			"assets/_MDS2041_Z5.jpg",
			"assets/_MDS2086_Z5.jpg",
			"assets/_MDS2202_Z5.jpg",
			"assets/_MDS2208_Z5.jpg",
			"assets/_MDS2319_Z5.jpg"
		];

		  // shuffle (acak urutan)
  const shuffled = images.sort(() => Math.random() - 0.5);

  const baseUrl = "<?= base_url('/') ?>";
  const container = document.getElementById("carousel-container");

  // ====== FUNGSI PRELOAD GAMBAR ======
  function preloadImages(imgList, callback) {
    let loaded = 0;
    const total = imgList.length;

    imgList.forEach(src => {
      const img = new Image();
      img.src = baseUrl + src;

      img.onload = img.onerror = function () {
        loaded++;
        if (loaded === total && typeof callback === "function") {
          callback();
        }
      };
    });
  }

  // ====== DIPANGGIL SETELAH SEMUA GAMBAR KE-LOAD ======
  preloadImages(shuffled, function() {
    // bikin isi carousel setelah preload selesai
    container.innerHTML = "";

    shuffled.forEach((img, index) => {
      const activeClass = index === 0 ? "active" : "";
      container.innerHTML += `
        <div class="carousel-item ${activeClass}">
          <div class="carousel-bg" style="background-image:url('${baseUrl + img}')"></div>
        </div>`;
    });

    // optional: kalau kamu mau inisialisasi manual (tanpa data-bs-ride)
    // const carouselEl = document.querySelector('#bgCarousel');
    // const carousel = new bootstrap.Carousel(carouselEl, {
    //   interval: 4000,
    //   ride: 'carousel'
    // });
  });

});
	</script>
</body>

</html>