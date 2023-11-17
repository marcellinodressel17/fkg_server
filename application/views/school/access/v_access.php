<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-cog' ></i> Hak Akses</span>
    </div>

    <main>
        <div class="container-fluid">
        <br>
        <div class="tampil-modal"></div>
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($role as $v_access){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $v_access->name_role; ?></td>
                        <td><?= '<div class="btn btn-primary btn-sm btn-role" data-id="'.$v_access->idrole.'"><i class="bx bx-edit" ></i> Ubah</div>'; ?></td>
                    </tr>
                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </main>
</section>