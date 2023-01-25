@extends('layouts.user')
@section('header', 'header-transparent')
@section('hero')
<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">SELAMAT DATANG DI WEBSITE PERPUSTAKAAN <br> YAYASAN PERGURUAN KSATRYA LIMA SATU</h2>
        <p class="animate__animated animate__fadeInUp">Perpustakaan ini diharapkan menjadi sumber belajar warga sekolah yang dalam pelayanannya tidak hanya menyediakan bahan pustaka pendukung kurikulum pendidikan, namun bahan bacaan pengembangan karakter, kompetensi, literasi hingga hiburan.</p>
        <!-- <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a> -->
      </div>
    </div>

    <!-- Slide 2 -->
    <!-- <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
      </div>
    </div> -->

    <!-- Slide 3 -->
    <!-- <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
      </div>
    </div> -->

    <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a> -->

  </div>
</section><!-- End Hero -->
@endsection


@section('content')
<!-- ======= Services Section ======= -->
<section class="services">
  <div class="container">

    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
        <div class="icon-box icon-box-pink">
          <div class="icon"><i class="bx bxl-dribbble"></i></div>
          <h4 class="title"><a href="">Pengetahuan Alam</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-cyan">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="">Pengetahuan Umum</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-green">
          <div class="icon"><i class="bx bx-tachometer"></i></div>
          <h4 class="title"><a href="">Pengetahuan Sosial</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-blue">
          <div class="icon"><i class="bx bx-world"></i></div>
          <h4 class="title"><a href="">Bahasa & Sastra</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Why Us Section ======= -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
  <div class="container">

    <div class="row">
      <!-- <div class="col-lg-6 video-box">
        <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      </div> -->

      <div class="col-lg-12 d-flex flex-column justify-content-center p-5">

        <div class="icon-box">
          <div class=""></div>
          <div class="title mb-2"><img src="/images/H. Soewardi Sulaiman.png" alt="Ketua Yayasan"></div>
          <h4 class="title">
            <a href="">SAMBUTAN KETUA PEMBINA PENGURUS YAYASAN PERGURUAN KSATRYA LIMA SATU</a></h4>
          <p class="description">Assalamualaikum Wr.Wb.
            <br><br>
            Puji dan syukur kita panjatkan ke Khadirat Allah SWT atas segala limpahan rahmat dan ridhonya pada kita semua, sehingga Web site Yayasan Perguruan Ksatrya Lima Satu (YPKLS) ini dapat dipublikasikan. Shalawat dan salam semoga selamanya tercurah kepada Baginda Rosulullah Muhammad SAW.
            <br><br>
            Kemajuan Teknologi Informasi dan Komunikasi di Era Globalisasi dan menyambut Teknologi 4.0 Yayasan Perguruan Ksatrya Lima Satu sudah mulai menyesuaikan diri.
            <br><br>
            Saat ini dengan kejadian Covid 19 yang sudah dirasakan dalam Era Disrupsi (dunia nyata ke dunia maya) kita telah dipaksa dengan penggunaan teknologi informasi, sekolah melakukan program belajar jarak jauh melalui video converence, e learning, dan distance learning.
            <br><br>
            Pemanfaatan web site ini diharapkan dapat meningkatkan eksistensi sekolah dilingkungan YPKLS dalam rangka optimalisasi peran dan fungsinya sebagai Institusi Pendidikan Dasar dan Menengah sehingga dapat terus berkarya dan berkontribusi dalam memajukan bangsa melalui penyelenggaraan pendidikan bermutu selaras dengan harapan para orang tua siswa, masyarakat serta relevans dengan dinamika kemajuan teknologi saat ini dan di masa mendatang.
            <br><br>
            Pengembangan web site ini disamping memenuhi kebutuhan internal sekolah, juga guna ,memenuhi harapan masyarakat yang membutuhkan informasi tentang SMP, SMK, dan SMA Ksatrya, sarana konsolidasi alumni pelajar, alumni guru YPKLS, sehingga dapat berkontribusi yang positif kepada alamamaternya.
            <br><br>
            Disadari bahwa masih banyak kekurangan yang terdapat pada web site ini, oleh karena itu kami akan terus meng-up date diri, sehingga tampilan, isi dan mutu kami akan terus berkembang.
            <br><br>
            Akhirnya saya sampaikan selamat dan aspirasi atas penampilan terbaru web site resmi YPKLS yang dirancang oleh tim web site, semoga dengan penampilan web site ini informasi tentang sekolah, serta aktivitas di dalamnya dapat diketahui oleh masyarakat luas dan terlebih lagi menjadi komunikasi interaktif antara peserta didik, orang tua murid, masyarakat, alumni dan sekolah, serta yayasan.
            <br><br>
            Wassalamu’alaikum Wr.Wb.
            <br><br>
            Ttd.
            H. Soewardi Sulaiman
            Ketua Pembina Yayasan
          </p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Features Section ======= -->
<section class="features">
  <div class="container">

    <div class="section-title">
      <h2>Features</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-md-5">
        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-4">
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
        </ul>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-md-5 order-1 order-md-2">
        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1">
        <h3>Corporis temporibus maiores provident</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-md-5">
        <img src="assets/img/features-3.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5">
        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
        <ul>
          <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
        </ul>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-md-5 order-1 order-md-2">
        <img src="assets/img/features-4.svg" class="img-fluid" alt="">
      </div>
      <div class="col-md-7 pt-5 order-2 order-md-1">
        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->
@endsection