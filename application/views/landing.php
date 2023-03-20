<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url();?>landing/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Aplikasi Pembayaran SPP</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-15 align-self-end">
                        <h1 class="text-white font-weight-bold">SELAMAT DATANG DI APLIKASI PEMBAYARAN SPP SMK IGASAR PINDAD BANDUNG</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Aplikasi Pembayaran SPP merupakan suatu sistem yang dapat digunakan untuk melakukan transaksi pembayaran SPP (sumbangan pembinaan pendidikan). Aplikasi manajemen spp ini menyajikan informasi data yang dapat diakses melalui web browser pada komputer maupun smartphone secara real-time.</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="tentang">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">TENTANG KAMI</h2>
                        <img class="w-25 mb-3" src="<?= base_url('landing/assets/img/igasar.png') ?>">
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">SMKS IGASAR PINDAD BANDUNG adalah salah satu satuan pendidikan dengan jenjang SMK di Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat. Dalam menjalankan kegiatannya, SMKS IGASAR PINDAD BANDUNG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.SMKS IGASAR PINDAD BANDUNG menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SMKS IGASAR PINDAD BANDUNG berasal dari PLN. SMKS IGASAR PINDAD BANDUNG menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SMKS IGASAR PINDAD BANDUNG untuk sambungan internetnya adalah Telkom Astinet..</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="kontak">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">KONTAK</h2>
                <hr class="divider" />
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg col-md6 col-xs-12">
                            <div id="map">
                            <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.317900561306!2d107.67800648570555!3d-6.931304774612839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2ade076ca49%3A0x3386663587285417!2sIgasar%20Pindad%20Vocational%20High%20School!5e0!3m2!1sen!2sid!4v1676944431183!5m2!1sen!2sid" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </center>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - TaufiqSahrulRamdani</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url();?>landing/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
