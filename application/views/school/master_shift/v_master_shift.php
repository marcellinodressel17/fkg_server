<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-user'></i> Master Shift</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <a href="<?= base_url("/project/school/administrator/master_shift/add_shift"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br><table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Shift</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <?php
                        $no = 1;
                        foreach($shift->result() as $v_shift){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $v_shift->name_shift; ?></td>
                        <td><?= $v_shift->day; ?></td>
                        <td><?= $v_shift->start_shift; ?></td>
                        <td><?= $v_shift->end_shift; ?></td>
                        <td><?= anchor('/project/school/administrator/master_shift/edit_shift/' . $v_shift->idshift, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                        <?= anchor('/project/school/administrator/master_shift/delete_shift/' . $v_shift->idshift, '<div class="btn btn-danger btn-sm"><i class="bx bxs-comment-x" ></i> Hapus</div>') ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                <tbody>

                </tbody>
            </table>
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