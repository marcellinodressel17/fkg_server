<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <img src="<?= base_url('assets/logo/eresta_dev.png') ?>" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="<?= base_url('/') ?>" class="nav-item nav-link">Home</a>
                <a href="<?= base_url('home/about') ?>" class="nav-item nav-link">About</a>
                <a href="<?= base_url('home/service') ?>" class="nav-item nav-link active">Service</a>
                <a href="<?= base_url('home/project') ?>" class="nav-item nav-link">Project</a>
            </div>
            <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Service</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="<?= base_url('/') ?>">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <p class="section-title text-secondary justify-content-center"><span></span>Our Services<span></span></p>
            <h1 class="text-center mb-5">Solusi Apa Yang Kami Berikan Kepada Anda</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-laptop-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Web Design</h5>
                    <p class="m-0">Kami akan memberikan tampilan yang menarik dan responsive, bertujuan agar website semakin berkembang dan user friendly.</p>
                    <a class="btn btn-square" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-thumbs-up fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Full Developer</h5>
                    <p class="m-0">Kami siap membantu dan bertanggung jawab atas project anda. Mulai dari 0 sampai selesai, sesuai dengan kebutuhan anda.</p>
                    <a class="btn btn-square" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-android fa-2x"></i>
                    </div>
                    <h5 class="mb-3">App Development</h5>
                    <p class="m-0">Kami siap melayani pembuatan aplikasi untuk bisnis anda. Agar bisnis anda semakin berkembang. Tentunya 100% Kami siap membantu</p>
                    <a class="btn btn-square" href="<?= base_url('home/about'); ?>"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                <h1 class="text-center text-white mb-4">Silahkan Klik Dibawah Ini Untuk Menghubungi Kami.</h1>
                <a class="section-title text-white justify-content-center" href="https://wa.me/62895337261274"><img src="<?= base_url('assets/logo/wa_1.png'); ?>" width="400px"></a>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
        <h1 class="text-center mb-5">What Say Our Clients!</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-light rounded my-4">
                <img src="<?= base_url('assets/customer/img/bonny2.jpg'); ?>">
                <div class="d-flex align-items-center">
                    <div class="ps-4">
                        <h5 class="mb-1">Bonny - Kmeans(Manokwari)</h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <img src="<?= base_url('assets/customer/img/hidayah2.jpg'); ?>">
                <div class="d-flex align-items-center">
                    <div class="ps-4">
                        <h5 class="mb-1">Hidayah - Kmeans(Makasar)</h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-light rounded my-4">
                <img src="<?= base_url('assets/customer/img/lukas2.jpg'); ?>">
                <div class="d-flex align-items-center">
                    <div class="ps-4">
                        <h5 class="mb-1">Lukas - Kmeans(Papua)</h5>
                        <span>Bisnis</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->