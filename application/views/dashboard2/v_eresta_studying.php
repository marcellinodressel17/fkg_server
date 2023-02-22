<br><br>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
<?php endif; ?>

<header>
    <a href="<?= base_url('/'); ?>"><img class="logo" src="<?= base_url('assets/logo/eresta_dev.png'); ?>"></a>

</header>

<section class="about" id="about">
  <div class="column">
    <div class="image">
        <h1>1. Anda Memilih Paket Studying</h1>
        <h4>Berikut Detail Paket Studying.</h4><br><br>
        <h2>*Fitur Yang Didapatkan</h2>
        <h4>&nbsp;&nbsp;&nbsp;- Full Developer(Pembuatan Dari Awal)</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Pembuatan Metode Max 2</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Free Revisi Program 3x</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Pengerjaan Paling Lama 2 Bulan</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Tampilan Lebih Responsif</h4><br><br>
        <h1>2. Catatan Penting</h1>
        <h4>&nbsp;&nbsp;&nbsp;- Jangan Lupa, Lakukan Penawaran Terlebih Dahulu Sebelum Menyewa Jasa Kami(<a href="https://wa.me/+62895337261274">Klik Disini Untuk Menghubungi Kami</a>)</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Apabila Sudah Melakukan Deal Dan Ada Tambahan Fitur, Maka Akan Dikenai Biaya Tambahan</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Jika Membutuhkan Waktu Yang Lebih Cepat Dalam Pembuatan, Maka Akan Ada Penambahan Biaya</h4>
        <h4>&nbsp;&nbsp;&nbsp;- Diusahakan Saat Mengisi Form Sudah Sesuai Dengan Yang Diinginkan, Agar Tidak Menambah Biaya Pembuatan.</h4><br><br>
        <form action=<?= base_url('/customer/tambah_studying') ?> method="post">
        <h1>*Form Pemesanan</h1>
        <h4>*Nama Client</h4><input type="text" name="customer_name" id="customer_name">
        <h4>*Kontak Client</h4><input type="text" name="phone" id="phone">
        <h4>*Nama Projek</h4><input type="text" name="project_name" id="project_name">
        <!-- <h4>*Tipe Projek</h4><input type="text" name="project_type" id="project_type"> -->
        <h4>*Menggunakan Metode?</h4>
          <input type="radio" name="metode" value="1">Iya
          <input type="radio" name="metode" value="0">Tidak
        <!-- <h4>*Nama Metode 1</h4><input type="text" name="metode1" id="metode1"><br>
        <h4>*Nama Metode 2</h4><input type="text" name="metode2" id="metode2"><br> -->
        <h4>*Pilih Deadline?</h4>
          <input type="radio" name="editList" value="1">1 Bulan
          <input type="radio" name="editList" value="2">2 Bulan
    </div>
    <div class="content">
        <h1>BERIKUT DETAIL PEMBAYARAN</h1><br>
        <div class="card" style="width: 30rem; height: 30rem">
          <div class="card-body"><br>
            <div class="container">
              <h4 class="card-title">Berikut Rincian Pembayaran</h4><br>
              <h4 class="card-subtitle mb-2 text-muted">PENGERJAAN SELAMA 1 BULAN</h4>
              <h6 class="card-subtitle mb-2 text-muted"></h6>
              <p class="card-text"><strong>JASA PEMBUATAN</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="hidden" name="jasa_cash" value="1000000">Rp. 1.000.000
              <strong>Menggunakan Metode</strong>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="hidden" name="metode_cash" value="100000">Rp. 100.000
              <strong>Diskon</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="hidden" name="diskon_cash" value="1000000">Rp. 1.000.000</p><hr>
              <p class="card-text"><strong>Biaya Tambahan</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="hidden" name="tambahan_cash" value="100000">Rp. 100.000</p><hr>
              <p class="card-text"><strong>TOTAL PEMBAYARAN</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="hidden" name="subtotal" value="100000">Rp. 100.000</p><br><br>
              <p class="card-text"><red>*</red>Diharapkan cek kembali Pesanan Anda</p>
            </div>
          </div>
        </div><br>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
</section>