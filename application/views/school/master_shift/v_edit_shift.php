<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-school'></i> Edit Master Shift</span>
    </div>

    <main>
        <div class="container-fluid">
            <br>

            <a href="<?= base_url("/project/school/administrator/master_shift"); ?>"><button class="btn btn-primary" type="button"><i class='bx bx-arrow-back'></i> Kembali</button></a><br><br>

            <?php
                foreach($edit_shift as $v_edit_shift){
            ?>
            <form action=<?= base_url('/project/school/administrator/master_shift/proccess_update_shift') ?> method="post">

                <input type="hidden" name="idshift" class="form-control" value="<?= $v_edit_shift->idshift; ?>">

                <div class="form_group">
                    <label>Nama Shift : </label>
                    <input type="text" class="form-control selectric" name="name_shift" value="<?= $v_edit_shift->name_shift; ?>" required>
                    <?= form_error('name_shift', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form_group">
                    <label>Hari : </label>
                    <select name="day" class="form-control selectric">
                        <option value="<?= $v_edit_shift->day; ?>"> <?= $v_edit_shift->day; ?> </option>
                        <option value="Senin"> Senin </option>
                        <option value="Selasa"> Selasa </option>
                        <option value="Rabu"> Rabu </option>
                        <option value="Kamis"> Kamis </option>
                        <option value="Jumat"> Jumat </option>
                        <option value="Sabtu"> Sabtu </option>
                        <option value="Minggu"> Minggu </option>
                    </select>
                </div>
                <div class="form_group">
                    <label>Mulai : </label>
                    <input type="text" class="form-control selectric" name="start_shift" value="<?= $v_edit_shift->start_shift; ?>" required>
                    <?= form_error('start_shift', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form_group">
                    <label>Selesai : </label>
                    <input type="text" class="form-control selectric" name="end_shift" value="<?= $v_edit_shift->end_shift; ?>" required>
                    <?= form_error('end_shift', '<small class="text-danger">', '</small>'); ?>
                </div>
                
                <br>

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