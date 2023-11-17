<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-school'></i> Master Kelas</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <a href="<?= base_url("/project/school/administrator/master_class/add_class"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br><table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($class->result() as $v_class){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $v_class->name_class; ?></td>
                        <td><?= anchor('/project/school/administrator/master_class/edit_class/' . $v_class->idclass, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                        <?= anchor('/project/school/administrator/master_class/delete_class/' . $v_class->idclass, '<div class="btn btn-danger btn-sm"><i class="bx bxs-comment-x" ></i> Hapus</div>') ?></td>
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