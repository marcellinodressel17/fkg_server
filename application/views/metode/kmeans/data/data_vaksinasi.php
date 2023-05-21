<section class="home-section">

  <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text"><i class='bx bxs-home'></i> Data Puskesmas Bitung</span>
  </div>

  <main>
    <div class="container">
    <br>

    <a href="<?= base_url("metode/kmeans/data/tambah_vaksinasi"); ?>"><button class="btn btn-success" type="button"><i class='bx bxs-file-plus'></i> Tambah Data</button></a>
    <br><br>
    <form action="<?= base_url('metode/kmeans/data/deleteall_vaksinasi') ?>" method="POST">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>
                        <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm"><i class='bx bxs-folder-minus'></i> Delete</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
                    </th>
                    <th>
                        <center>No.</center>
                    </th>
                    <th>
                        <center>Nama Kecamatan</center>
                    </th>
                    <th>
                        <center>Total Penduduk</center>
                    </th>
                    <th>
                        <center>Total Vaksin 1</center>
                    </th>
                    <th>
                        <center>Total Vaksin 2</center>
                    </th>
                    <th>
                        <center>Total Vaksin 3</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data_vaccine->result() as $inv) : ?>
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="checkbox_value[]" value="<?= $inv->idata_vaccien ?>">
                        </td>
                        <td align="center"><?= $no++ ?></td>
                        <td align="center"><?= $inv->area_name ?></td>
                        <td align="center"><?= number_format($inv->population) ?></td>
                        <td align="center"><?= number_format($inv->vaccien_1) ?></td>
                        <td align="center"><?= number_format($inv->vaccien_2) ?></td>
                        <td align="center"><?= number_format($inv->vaccien_3) ?></td>
                        <td align="center">
                        <?= anchor('metode/kmeans/data/edit_vaksinasi/' . $inv->idata_vaccien, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Ubah</div>') ?>
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