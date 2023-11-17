<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-user'></i> Tambah Jadwal Mengajar</span>
    </div>

    <main>
        <div class="container-fluid">
            <br>

            <a href="<?= base_url("/project/school/administrator/schedule_employee"); ?>"><button class="btn btn-primary" type="button"><i class='bx bx-arrow-back'></i> Kembali</button></a><br><br>

            <form action=<?= base_url('/project/school/administrator/schedule_employee/proccess_add_schedule') ?> method="post">
                <div class="form_group">
                    <label>Kelas : </label>
                    <select name="idclass" class="form-control selectric" required>
                        <option value="">-- Silahkan Pilih Kelas --</option>
                        <?php foreach($class->result() as $v_class){?>
                            <option value="<?= $v_class->idclass; ?>"><?= $v_class->name_class; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form_group">
                    <label>Shift : </label>
                    <select name="idshift" class="form-control selectric" required>
                        <option value="">-- Silahkan Pilih Shift Kerja --</option>
                        <?php foreach($shift->result() as $v_shift){?>
                            <option value="<?= $v_shift->idshift; ?>"><?= $v_shift->name_shift; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form_group">
                    <label>Mata Pelajaran : </label>
                    <select name="idlesson" id="idlesson" class="form-control selectric" required>
                        <option value="">-- Silahkan Pilih Mata Pelajaran --</option>
                    </select>
                </div>

                <div class="form_group">
                    <label>Nama karyawan : </label>
                    <select name="iduser" id="iduser" class="form-control selectric" required>
                        <option value="">-- Silahkan Pilih Karyawan --</option>
                    </select>
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