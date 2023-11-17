<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-school'></i> Master Pelajaran</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <a href="<?= base_url("/project/school/administrator/master_lesson/add_lesson"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br><table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Pelajaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($lesson->result() as $v_lesson){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $v_lesson->name_lesson; ?></td>
                        <td><?= anchor('/project/school/administrator/master_lesson/edit_lesson/' . $v_lesson->idlesson, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                        <?= anchor('/project/school/administrator/master_lesson/delete_lesson/' . $v_lesson->idlesson, '<div class="btn btn-danger btn-sm"><i class="bx bxs-comment-x" ></i> Hapus</div>') ?></td>
                    </tr>
                    <?php
                        }
                    ?>
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