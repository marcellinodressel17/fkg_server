<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-school'></i> Tambah Master Kelas</span>
    </div>

    <main>
        <div class="container-fluid">
            <br>

            <a href="<?= base_url("/project/school/administrator/master_lesson"); ?>"><button class="btn btn-primary" type="button"><i class='bx bx-arrow-back'></i> Kembali</button></a><br><br>

            <?php
                foreach($edit_lesson as $v_edit_lesson){
            ?>
            <form action=<?= base_url('/project/school/administrator/master_lesson/proccess_update_lesson') ?> method="post">

                <input type="hidden" name="idlesson" class="form-control" value="<?= $v_edit_lesson->idlesson; ?>">

                <div class="form_group">
                    <label>Nama Kelas : </label>
                    <input type="text" class="form-control selectric" name="name_lesson" value="<?= $v_edit_lesson->name_lesson; ?>" required>
                    <?= form_error('name_class', '<small class="text-danger">', '</small>'); ?>
                </div><br>

                <div class="form_group">
                    <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
                </div>
            </form>
            <?php
                }
            ?>

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