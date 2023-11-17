<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-school'></i> Tambah Master Kelas</span>
    </div>

    <main>
        <div class="container-fluid">
            <br>

            <a href="<?= base_url("/project/school/administrator/employee"); ?>"><button class="btn btn-primary" type="button"><i class='bx bx-arrow-back'></i> Kembali</button></a><br><br>

            <form action=<?= base_url('/project/school/administrator/employee/proccess_add_employee') ?> method="post" enctype="multipart/form-data">
                <div class="form_group">
                    <label>Nama Karyawan : </label>
                    <input type="text" class="form-control selectric" name="name" required>
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Alamat : </label>
                    <input type="text" class="form-control selectric" name="address" required>
                    <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Email : </label>
                    <input type="text" class="form-control selectric" name="email" required>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>No. Telp : </label>
                    <input type="text" class="form-control selectric" name="phone" required>
                    <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Mata Pelajaran : </label>
                    <select name="idlesson" class="form-control selectric">
                        <option value="">-- Silahkan Pilih Mata Pelajaran --</option>
                        <?php foreach($lesson as $v_lesson){ ?>
                            <option value="<?= $v_lesson->idlesson; ?>"><?= $v_lesson->name_lesson; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form_group">
                    <label>Username : </label>
                    <input type="text" class="form-control selectric" name="username" required>
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form_group">
                    <label>Password : </label>
                    <input type="password" class="form-control selectric" name="password" required>
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>

                <br>
                <div class="form_group">
                    <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
                </div>
            </form>

        </div>
    </main>

</section>

<section class="section-p1">
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
            <p><strong>Harap Tunggu</strong></p>
        </div>
    </div>
</section>