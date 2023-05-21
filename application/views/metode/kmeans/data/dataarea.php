<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Contoh Data Area</span>
    </div>

    <main>
        <div class="container">

            <!-- <div class="card">
                <h3>Catatan : Ini adalah contoh untuk penambahan data pemetaan yang akan divisualisasikan kedalam sistem</h3>
                <p> - Untuk Visualisasinya sendiri menggunakan file dengan ekstensi .geojson</p>
                <p> - Untuk tambah data, edit dan delete kami hide. bertujuan agar demo untuk visualisasi berjalan dengan lancar.</p>
                <p> - Semua bisa di custome sesuai dengan permintaan kalian.</p>
            </div> -->

            <br>

            <a href="<?= base_url("metode/kmeans/data/tambah_dataarea"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
            <br><br>
            <form action="<?= base_url('metode/kmeans/data/deleteall') ?>" method="POST">
                <table class="table table-bordered table_hover table-striped">
                    <thead>
                        <tr>
                            <th>
                                <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm"><i class='bx bxs-folder-minus'></i> Delete</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
                            </th>
                            <th>
                                <center>No.</center>
                            </th>
                            <th>
                                <center>Nama Area</center>
                            </th>
                            <th>
                                <center>Geojson</center>
                            </th>
                            <th>
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data->result() as $inv) : ?>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="checkbox_value[]" value="<?= $inv->idarea ?>">
                                </td>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $inv->area_name ?></td>
                                <td align="center"><?= $inv->geojson ?></td>
                                <td align="center">
                                <?= anchor('metode/kmeans/data/edit_area/' . $inv->idarea, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </form>
        </div>
    </main>
</section>

<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>