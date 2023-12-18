<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zifa Plastic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
  <!-- Favicons -->
  <link href="assets/img/logozp.jpg" rel="icon">
  <link href="assets/img/logozp.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center">
      <h1 class="logo me-auto"><a href="index.html"><img src="./assets/img/logo zp.jpg" width="100" height="100"><span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Product</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#komen">Comment</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Selamat Datang di Zifa Plastic</h1>
          <h2>Kami Memiliki Biji Plastic yang premium yang di proses dengan mesin standar SNI</h2>
          <a href="#about" class="btn-get-started scrollto">Mulai</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Tabs Section ======= -->
    <section id="about" class="tabs">
      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <!-- <i class="ri-gps-line"></i> -->
              <h4 class="d-lg-block">About Us</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <!-- <div class="col-lg order-2 order-lg-1 mt-3 mt-lg-0"> -->
                <h3>Tentang Zifa Plastic</h3>
                <span  style="text-align: justify; width: 100%;">
                <p class="fst-italic">
                  Selamat datang di Website ZIFA PLASTIC kami memberikan informasi mengenai macam macam biji plastic yang berkualitas premium yang kami hasilkan
                  Bibit biji plastic kami di proses melalui proses yang berstandar pabrik dan modern, sehingga menghasilkan biji plastic yang sempurna
                  biji plastic yang kami hasilkan tidak berbau dan kotor, sehingga dapat mudah di olah untuk bahan dasar benda plastic
                </p>
                </span>
                <br>
              </div>
              <!-- <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-2">
              <!-- <i class="ri-body-scan-line"></i> -->
              <h4 class="d-lg-block">Visi</h4>
            </a>
          </li>
          <li class="nav-item col">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <!-- <i class="ri-sun-line"></i> -->
              <h4 class=" d-lg-block">Misi</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-2">
            <div class="row">
              <div class="col-lg order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Visi Zifa Plastic</h3>
                <ul>
                  <span style="text-align: justify; width: 100%;">
                  <li><i class="ri-check-double-line"></i>"Menjadi Pemimpin Global dalam Inovasi Plastik Berkelanjutan": Visi ini menunjukkan fokus perusahaan pada inovasi dan kepemimpinan global dalam penyediaan solusi plastik yang ramah lingkungan dan berkelanjutan.
                  </li>
                  <li><i class="ri-check-double-line"></i>"Mewujudkan Dunia Tanpa Limbah Plastik": Perusahaan ini dapat memimpin pergerakan menuju visi berkelanjutan di mana penggunaan plastik diintegrasbrikan dengan cara yang tidak menghasilkan limbah yang merugikan lingkungan.
                  </li>
                  <li><i class="ri-check-double-line"></i>"Menciptakan Lingkungan Hidup yang Bersih dan Sehat Melalui Daur Ulang Plastik": Fokus pada kontribusi positif perusahaan terhadap kebersihan dan kesehatan lingkungan melalui pengolahan dan daur ulang plastik.</li>
                  </span>
                </ul>
              </div>
              <!-- <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div> -->
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Misi Zifa Plastic</h3>
                <ul>
                  <span  style="text-align: justify; width: 100%;">
                  <li><i class="ri-check-double-line"></i>Daur Ulang dan Lingkungan: Mengadopsi misi untuk mendukung lingkungan dengan menghasilkan biji plastik dari limbah plastik daur ulang. Berkomitmen untuk mengurangi dampak lingkungan dari limbah plastik dengan memberikan solusi berkelanjutan.</li>
                  <li><i class="ri-check-double-line"></i>Inovasi dan R&D: Menetapkan misi untuk terus melakukan penelitian dan pengembangan (R&D) untuk menciptakan biji plastik yang lebih ramah lingkungan dan efisien.</li>
                  <li><i class="ri-check-double-line"></i>Kemitraan dan Kolaborasi: Membangun kemitraan dengan pemasok, produsen, dan pemangku kepentingan lainnya untuk menciptakan rantai pasokan yang berkelanjutan. Berkolaborasi dengan pemerintah, organisasi non-pemerintah (NGO), dan sektor swasta untuk meningkatkan tanggung jawab bersama terhadap pengelolaan plastik.</li>
                  <li><i class="ri-check-double-line"></i>Pendidikan dan Kesadaran: Mengambil peran dalam mendidik masyarakat tentang masalah sampah plastik dan cara mengelola limbah plastik dengan biji plastik yang ramah lingkungan.</li>
                  <li><i class="ri-check-double-line"></i>Pengembangan Produk Berkelanjutan: Menghadirkan biji plastik yang dapat digunakan untuk memproduksi produk plastik berkelanjutan, ramah lingkungan, dan dapat didaur ulang.</li>
                  <li><i class="ri-check-double-line"></i>Standar Kualitas Tinggi: Menjadikan standar kualitas tinggi sebagai bagian dari misi perusahaan untuk memastikan bahwa biji plastik yang dihasilkan memenuhi standar kualitas internasional.</li>
                  </span>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->

    <!-- ======= Team Section ======= -->
    <section id="services" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Product</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/Polypropylene (PP).jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4 style="text-align: center;">Polyethylene (PE)</h4>
                <span style="text-align: justify; width: 100%;">Biji plastik PE adalah elemen kunci dalam rantai pasokan industri plastik dan memiliki peran penting dalam berbagai aspek kehidupan sehari-hari. Kesadaran akan pentingnya pengelolaan plastik secara berkelanjutan semakin meningkat untuk mencapai lingkungan yang lebih bersih dan berkelanjutan.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/Polystyrene (PS).jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4 style="text-align: center;">Polystyrene (PS)</h4>
                <span style="text-align: justify; width: 100%;">Polystyrene (PS) adalah polimer serbaguna yang banyak digunakan dan termasuk dalam keluarga hidrokarbon aromatik sintetis yang dikenal sebagai polimer. Ini adalah substansi termoplastik, yang berarti dapat dilelehkan dan dibentuk ulang beberapa kali tanpa mengalami degradasi kimia yang signifikan
                </span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/pvc.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4 style="text-align: center;">Polyvinyl Chloride</h4>
                <span style="text-align: justify; width: 100%;">PVC adalah bahan yang sangat serbaguna, namun, seiring dengan keberagaman aplikasinya, perlu diperhatikan aspek keberlanjutan, lingkungan, dan kesehatan untuk memastikan penggunaannya yang bertanggung jawab dan aman. Industri terus melakukan inovasi untuk mengurangi dampak lingkungan dari siklus hidup PVC dan mengembangkan metode daur ulang yang lebih efektif.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/plastik pp.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4 style="text-align: center;">Polypropylene (PP)</h4>
                <span style="text-align: justify; width: 100%;">Polypropylene memiliki banyak kegunaan karena sifat-sifatnya yang unik, dan biji plastik PP digunakan sebagai bahan baku dalam proses injeksi, ekstrusi, atau cetakan untuk membentuk berbagai produk plastik. Kesadaran akan keberlanjutan dan pengelolaan limbah plastik semakin penting dalam penggunaan biji plastik PP dan produk-produk berbahan dasar PP.</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jl. Gramapuri Tamansari No.6, Wanasari, Kec. Cibitung, Kabupaten Bekasi, Jawa Barat</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>zifaplastic@gmail.com<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>0851-7410-7268<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253804.27726637377!2d106.71474758540617!3d-6.304159845327668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6985ce30f9e0d7%3A0xf0a6d69787debc0b!2sZifa%20Frozen%20Foods!5e0!3m2!1sid!2sid!4v1700553853948!5m2!1sid!2sid" width="696" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div class="container mb-3">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">COMMENT</h2><hr>
	<form method="POST" id="form_komen">
		<div class="form-group">
			<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="masukkan nama" />
		</div>
    <div class="form-group">
			<input type="email" name="email_pengirim" id="email_pengirim" class="form-control" placeholder="masukkan email" />
		</div>
		<div class="form-group">
			<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"></div>
</div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Zifa Plastic</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <!-- <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div> 
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  


  <script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama_pengirim = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				
				if(nama_pengirim==''){
				    alert("Nama Pengirim Harus disii");
				} else if(komen==''){
				    alert("Komentar Harus disii");
				} else {
    				var form_data = $(this).serialize();
    				$.ajax({
    					url:"tambah_komentar.php",
    					method:"POST",
    					data:form_data,
    					success:function(data){
    						$('#form_komen')[0].reset();
    						$('#komentar_id').val('0');
    						load_comment();
    					}, error: function(data) {
    		            	console.log(data.responseText)
    		            }
    				})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		      	console.log(data.responseText)
		      }
				})
			}
 
			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>
  <script>
    var sensor = ["kontol", "memek","anjing","tolol","bangsat","babi"];

    // Fungsi untuk mengganti kata-kata dalam elemen HTML
    function replaceTextInElements(elements) {
      elements.forEach(function(element) {
          // Mengambil teks dari elemen
          var originalText = element.textContent;

          // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
          var newText = originalText.replace(new RegExp(sensor.join("|"), "gi"), function(match) {
            // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
            return '*'.repeat(match.length);
          });

          // Menetapkan teks yang telah diganti kembali ke elemen
          element.textContent = newText;
        });

        console.log("a");
      }

      // Mengambil semua elemen <p> dengan id="message"
      var messageElements = document.querySelectorAll("p#message");

      // Mengganti kata-kata dalam elemen-elemen yang dipilih
      replaceTextInElements(messageElements);
    
    </script>


</body>

</html>