<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />

        
    </head>
    <body id="page-top" onload='initMap()'>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="//assets/img/navbar-logo.svg" alt="" />{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('search') }}">
                                <i class="fas fa-search"></i> Cari Transaksi
                            </a>
                        </li> 
                        <li class="nav-item"><a class="nav-link" href="#rooms">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#foods">Makanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Foto</a></li>
                        <li class="nav-item"><a class="nav-link" href="#maps">Peta</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead"> 
            <div class="container">
                <div class="masthead-subheading">Selamat Datang Di Hotel Pradana !</div>
                <div class="masthead-heading text-uppercase">Senang Bertemu Dengan Anda</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#opening">Lihat Lebih Banyak</a>
            </div>
        </header>
        <!-- Opening-->
        <section class="page-section" id="opening">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-subheading text-muted">
                    Selamat Datang Di Hotel Pradana ! <br>
                    (Isi penjelasan tentang hotel) </h3>
                </div>
            </div>
            
        </section>

        <!-- Rooms-->
        <section class="page-section bg-light" id="rooms">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kamar</h2>
                    <h3 class="section-subheading text-muted">
                    Semua kamar telah dilengkapi dengan berbagai fasilitas untuk menunjang kenyamanan dan kesenangan pelanggan</h3>
                </div>
                <div class="row text-center">
                    <img src="/assets/img/room.jpeg" alt="" />
                </div>
            </div>
        </section>

        <!-- Foods-->
        <section class="page-section" id="foods">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Makanan</h2>
                    <h3 class="section-subheading text-muted">
                    Berbagai menu makanan telah disediakan untuk pelanggan</h3>
                </div>
                <div class="row text-center">
                    <img src="/assets/img/food.jpeg" alt="" />
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section bg-light" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Layanan</h2>
                    <h3 class="section-subheading text-muted">Layanan yang akan diberikan</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kenyamanan</h4>
                        <p class="text-muted">Kami akan memberikan kemudahan bagi pelanggan</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-award fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kesenangan</h4>
                        <p class="text-muted">Kami mengutamakan kesenangan pelanggan kami</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="far fa-laugh-beam fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Kepuasan</h4>
                        <p class="text-muted">Kami akan memberikan pelayanan terbaik untuk kepuasan pelanggan</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Foto</h2>
                    <h3 class="section-subheading text-muted">Berikut beberapa foto</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/img/room/1.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Kamar mandi</div>
                                <div class="portfolio-caption-subheading text-muted">Modern</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/img/room/2.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tempat Kopi dan Teh</div>
                                <div class="portfolio-caption-subheading text-muted">Unik</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="/assets/img/room/4.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Isi Judul</div>
                                <div class="portfolio-caption-subheading text-muted">Isi Sub Judul</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Maps-->
        
        <section class="page-section bg-light" id="maps">
            <div class="container ">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cari Kami</h2>
                    <h3 class="section-subheading text-muted">
                    Di Peta</h3> 
                </div>
                <div id="map" style="width:100%; height:75vh;"></div>
                <div class="text-center">
                <br>
                    HOTEL PRADANA <BR> SMKN 57JAKARTA<br>JL. TAMAN MARGATASWA RAYA 38B <br>JATIPADANG, KEC. PASAR MINGGU <br> KOTA JAKARTA SELATAN<br>Daerah Khusus Ibukota Jakarta<br> 12540
                </div>
                
            </div>
        </section>
        <!-- About-->
        <!-- <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- Team-->
        <!-- <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/one.jpg" alt="..." />
                            <h4>Oneh Maudi</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="/assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
        <!-- Clients-->
        <!-- <div class="py-5">
            <div class="container bg-light">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="/assets/img/logos/microsoft.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="/assets/img/logos/google.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="/assets/img/logos/facebook.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="/assets/img/logos/ibm.svg" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Contact-->
        <!-- <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section> -->
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">
                        Copyright &copy; {{ config('app.name') }}
                        <!-- This script automatically adds the current year to your website footer-->
                        <!-- (credit: https://updateyourfooter.com/)-->
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>
                    <div class="col-lg-1 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2 " href="tel:0217805573" ><i class="fas fa-phone"></i></a> <br><i>Telepon</i>
                    </div>
                    <div class="col-lg-1 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/hotelpradana/?hl=id"><i class="fab fa-instagram"></i></a><br><i>Instagram</i>
                    </div>
                    <div class="col-lg-1 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="mailto:hotelpradana@gmail.com"><i class="far fa-envelope"></i></a><br><i>Email</i>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Kamar Mandi Modern</h2>
                                    <img class="img-fluid d-block mx-auto" src="/assets/img/room/1.jpeg" alt="..." />
                                    <p>Desain kamar mandi modern hanya ditentukan oleh penampilannya. Garis lurus dan bersih, ruang kontra yang rapi dan bentuk geometris mendominasi lanskap.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Wastafel</strong>
                                        </li>
                                        <li>
                                            <strong>Kaca</strong>
                                        </li>
                                        <li>
                                            <strong>Shower</strong>
                                        </li>
                                        <li>
                                            <strong>AC</strong>
                                        </li>
                                        <li>
                                            <strong>Kaca</strong>
                                        </li>
                                        <li>
                                            <strong>Tempat Handuk</strong>
                                        </li>
                                        <li>
                                            <strong>Toilet</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tempat Kopi dan Teh Unik</h2>
                                    <img class="img-fluid d-block mx-auto" src="/assets/img/room/2.jpeg" alt="..." />
                                    <p>Digunakan untuk bersantai</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Dua Kursi</strong>
                                        </li>
                                        <li>
                                            <strong>Teko</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Judul</h2>
                                    <img class="img-fluid d-block mx-auto" src="/assets/img/room/4.jpeg" alt="..." />
                                    <p>Penjelasan</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Item</strong>
                                        </li>
                                        <li>
                                            <strong>Item</strong>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-modal modal fade" id="Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cari Transaksi</h2>
                                    <p>Halaman ini untuk mengetahui status transaksi Anda. Silakan masukkan ID transaksi Anda.</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" placeholder="Masukan ID Transaksi ...">
                                    </div><br>
                                    <div class="row">
                                            <div class="col-2 d-flex align-items-center">
                                                <label for="name">Nama :</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Enter Name" name="name" disabled>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>

        <script>
            function initMap() {
            // The location of Uluru
            const pradana_loc = { lat: -6.291660634955926, lng: 106.82419894602224 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 18,
                center: pradana_loc,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: pradana_loc,
                map: map,
            });
            }
        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3CsuQTnj1i5hnc4os-ZVOGpJO8B53g5c&callback=initMap&libraries=&v=weekly"
            key="AIzaSyB3CsuQTnj1i5hnc4os-ZVOGpJO8B53g5c"
            async
        ></script>
    </body>
</html>
