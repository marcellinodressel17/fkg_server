<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>

<section class="home" id="home">

    <div class="content">
        <h3>Wujudkan Project Kalian <span>Kami Siap Membantu</span></h3>
        <p>Jasa pembuatan, pengembangan website, dan custome sesuai kebutuhan anda.</p>
        <a href="#pricing" class="btn">Order Sekarang</a>
    </div>

    <div class="image">
        <img src="<?= base_url('assets/logo/phone1.png'); ?>" alt="">
    </div>

</section>

<section class="features" id="features">
    <h1 class="heading"> Keuntungan Menggunakan Jasa Kami. </h1>

    <div class="box-container">

        <div class="box">
            <img src="<?= base_url('assets/logo/phone2.png'); ?>" alt="">
            <h3>Mempermudah Anda <span>Untuk Menghubungi Kami</span></h3>
            <p>Semua info kontak kami ada di website ini.</p>
            <a href="#contact" class="btn">Baca Selengkapnya</a>
        </div>

        <div class="box">
            <img src="https://www.kindpng.com/picc/m/290-2909956_responsive-webdesign-responsive-web-design-animated-hd-png.png" alt="">
            <h3>Tampilan Website <span>Lebih Responsive</span></h3>
            <p>Dapatkan free untuk revisi tampilan website</p>
            <a href="#about" class="btn">Baca Selengkapnya</a>
        </div>

        <div class="box">
            <img src="<?= base_url('assets/logo/phone3.png'); ?>" alt="">
            <h3>Pengerjaan <span>100% Kami Bantu Sampai Selesai</span></h3>
            <p>Anda Senang, Kami Ikut Senang</p>
            <a href="#about" class="btn">Baca Selengkapnya</a>
        </div>

    </div>
</section>

<section class="about" id="about">

    <h1 class="heading"> Tentang ErestaDev </h1>

    <div class="column">

        <div class="image">
            <img src="<?= base_url('assets/logo/phone4.png'); ?>" alt="">
        </div>

        <div class="content">
            <h3>Jasa Pembuatan, Pengembangan, Dan Custome Website Sesuai Kebutuhan Anda</h3>
            <p>Kami programmer dari Eresta Developer, memberikan jasa pembuatan, pengembangan, dan custome website sesuai kebutuhan anda. Kami akan membantu semaksimal mungkin agar website keinginan kalian sesuai dengan apa yang diharapkan</p>
            <p>Kami juga akan mengajak kalian untuk meeting seminggu sekali agar website tetap dipantau untuk progress atau untuk revisi mengenai update yang akan dibuat didalam sistem yang akan dibangun.</p>
            <!-- <div class="buttons">
                <a href="#" class="btn"> <i class="fab fa-apple"></i> app store </a>
                <a href="#" class="btn"> <i class="fab fa-google-play"></i> google-play </a>
            </div> -->
        </div>

    </div>

</section>

<div class="newsletter">

    <h3>Follow And Subscribe</h3>
    <p>Jangan lupa untuk follow dan subscribe social media kami. Untuk mendapatkan informasi lainnya, anda dapat melihat melalui sosial media di bawah ini.</p>
    <a href="https://www.youtube.com/channel/UCk5BoAaX5rXpm3FgDY3yWfQ"><img src="<?= base_url('assets/logo/youtube.png'); ?>" alt="" width="190px"></a>&nbsp;&nbsp;
    <a href="https://www.instagram.com/eresta.dev/"><img src="<?= base_url('assets/logo/instagram.png'); ?>" alt="" width="100px"></a>&nbsp;&nbsp;
    <a href="https://www.tiktok.com/@erestadev"><img src="<?= base_url('assets/logo/tiktok.png'); ?>" alt="" width="100px"></a>
  </div>

</div>

<section class="review" id="review">

    <h1 class="heading"> Hasil Testimoni Dari Customer Kami </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="<?= base_url('assets/customer/img/bonny.jpg'); ?>" alt="">
            </div>
        </div>
        <div class="box">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="<?= base_url('assets/customer/img/hidayah.jpg'); ?>" alt="">
            </div>
        </div>
    </div>

</section>

<section class="pricing" id="pricing">

    <h1 class="heading"> Pilih Paket Kalian </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">Eresta Studying</h3>
            <div class="price">Rp. 1.000.000 <span></span></div>
            <ul>
            <li><i class="fas fa-check"></i> Full Dev(Pembuatan Dari 0) </li>
                <li><i class="fas fa-check"></i> Max Request 2 Metode </li>
                <li><i class="fas fa-check"></i> Free Revisi Program 3x </li>
                <li><i class="fas fa-check"></i> Pengerjaan 1 Bulan </li>
                <li><i class="fas fa-check"></i> Tampilan Lebih Responsif </li>
                <li><i class="fas fa-times"></i> Perubahan UI </li>
                <li><i class="fas fa-times"></i> Pemasangan Aplikasi Ke Hosting </li>
            </ul>
            <a href="<?= base_url('customer/eresta_studying'); ?>" class="btn" id="BtnCustome">Selengkapnya</a>
        </div>

        <div class="box">
            <h3 class="title">Eresta Store</h3>
            <div class="price">Rp. 2.000.000 <span></span></div>
            <ul>
                <li><i class="fas fa-check"></i> Full Dev(Pembuatan Dari 0) </li>
                <li><i class="fas fa-check"></i> Max Request 2 Metode </li>
                <li><i class="fas fa-check"></i> Max Perubahan UI 2x </li>
                <li><i class="fas fa-check"></i> Pengerjaan 1-2 Bulan </li>
                <li><i class="fas fa-check"></i> Tampilan Lebih Responsif </li>
                <li><i class="fas fa-check"></i> Free Meeting Update Terbaru </li>
                <li><i class="fas fa-times"></i> Pemasangan Aplikasi Ke Hosting </li>
            </ul>
            <a href="#" class="btn">Selengkapnya</a>
        </div>

        <div class="box">
            <h3 class="title">Eresta Business</h3>
            <div class="price">Rp. 5.000.000<span></span></div>
            <ul>
                <li><i class="fas fa-check"></i> Full Dev(Pembuatan Dari 0) </li>
                <li><i class="fas fa-check"></i> Free Hosting & Domain </li>
                <li><i class="fas fa-check"></i> Max Request 3 Metode </li>
                <li><i class="fas fa-check"></i> Pengerjaan 1-2 Bulan </li>
                <li><i class="fas fa-check"></i> Free Meeting Sesuai Request Customer </li>
                <li><i class="fas fa-check"></i> Free Update UI </li>
                <li><i class="fas fa-check"></i> Pemasangan Aplikasi Ke Hosting </li>
            </ul>
            <a href="#" class="btn">Selengkapnya</a>
        </div>

    </div>

</section>

<section class="contact" id="contact">

    <div class="image">
        <img src="<?= base_url('assets/logo/bg-kotak.png'); ?>" alt="">
    </div>

    <form action="">

        <h5 class="heading">ADA PERTANYAAN?</h5>
        
        <a href="https://api.whatsapp.com/send?phone=+62895337261274&text=Hallo%20Eresta,%20saya%20berminat%20untuk%20menggunakan%20jasa%20anda.%20Saya%20menunggu%20resphone%20dari%20anda."><center><img src="<?= base_url('assets/logo/wa.png'); ?>" width="300px"></center></a>

    </form>

</section>

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Kami Penyedia Jasa Untuk Pembuatan, Pengembangan, Dan Custome Website Sesuai Kebutuhan Anda</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">features</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">pricing</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=100085414869298">facebook</a>
            <a href="https://instagram.com/eresta.dev?igshid=YmMyMTA2M2Y=">instagram</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +62 895-3372-61274 <br> +62 852-3694-0533 </p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> molewekaleb@gmail.com <br> kmolewe33@gmail.com </p>
            </div>
            <!-- <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> mumbai, india - 400104 </p>
            </div> -->
        </div>

    </div>

    <h3 class="credit"> &copy; copyright @ 2022 by Eresta Developer </h3>

</div>