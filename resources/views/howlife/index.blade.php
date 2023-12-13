<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <title>Halaman Laravel</title>
  </head>
  @include('komponen/menu')
  @include('komponen/pesan')
    <body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Jangan pendam sendiri! Saatnya #KiniKuBerani💙</h1>
            <h2>Let's talk about life & spread positivity together!</h2>
          </div>
        </div>
        <div class="text-center">
          <a href="#about" class="btn-get-started scrollto">Mari Mulai</a>
        </div>

        <div class="row icon-boxes">
          <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title"><a href="">Peer Counseling</a></h4>
              <p class="description">Program konseling sebaya secara individu, dimana hanya ada satu konselor dan satu klien dalam setiap sesi konseling.</p><br/><br/><br/><br/><br/>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title"><a href="">Ruang Sambat</a></h4>
              <p class="description">Program konseling sebaya kelompok, dimana klien tidak hanya mendapatkan kesempatan berkeluh kesah kepada konselor melainkan juga dapat saling ”sambat” dan seling memberi dukungan kepada klien lain yang sedang mengalami permasalahan serupa.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="ri-stack-line"></i></div>
              <h4 class="title"><a href="">Life Talk</a></h4>
              <p class="description">Program kelas, webinar, dan talkshow dimana peserta dapat belajar dan berdiskusi secara eksklusif dengan pemateri yang sudah ahli pada topik-topik tertentu terkait kesehatan mental dan pengembangan diri.</p><br/>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Hero -->
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
  </body>
</html>
