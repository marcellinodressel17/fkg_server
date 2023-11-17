<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-user'></i> Karyawan</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <a href="<?= base_url("/project/school/administrator/employee/add_employee"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br><table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">No. Telp</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Pelajaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($employee->result() as $v_employee){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $v_employee->name; ?></td>
                        <td><?= $v_employee->address; ?></td>
                        <td><?= $v_employee->email; ?></td>
                        <td><?= $v_employee->phone; ?></td>
                        <td><img src="<?= base_url('assets/school/user/'.$v_employee->photo); ?>" width="70px" style="border-radius:50%;"></td>
                        <td><?= $v_employee->name_lesson; ?></td>
                        <td><?= anchor('/project/school/administrator/employee/edit_employee/' . $v_employee->iduser, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                        <?= anchor('/project/school/administrator/employee/delete_employee/' . $v_employee->iduser, '<div class="btn btn-danger btn-sm"><i class="bx bxs-comment-x" ></i> Hapus</div>') ?></td>
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