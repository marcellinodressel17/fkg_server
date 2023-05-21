<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Contoh Data</span>
    </div>

    <main>
      <div class="container-fluid">
      <a href="<?= base_url("metode/kmeans/data/tambah_data"); ?>"><button class="btn btn-primary" type="button"><i class="fas fa-plus"></i> Tambah Data</button></a>
      <!-- <a href="<?= base_url("metode/kmeans/data/import_data"); ?>"><button class="btn btn-default" type="button"><i class="fas fa-plus"></i> Import Data</button></a> -->
        <br><br>
        <form action="<?= base_url('metode/kmeans/data/deleteall_kmeans') ?>" method="POST">
            <table class="table table-bordered table_hover table-striped">
                <thead>
                    <tr>
                        <th>
                            <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm">Delete</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
                        </th>
                        <th>
                            <center>No.</center>
                        </th>
                        <th>
                            <center>Nama Daerah</center>
                        </th>
                        <th>
                            <center>Data 1</center>
                        </th>
                        <th>
                            <center>Data 2</center>
                        </th>
                        <th>
                            <center>Data 3</center>
                        </th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data->result() as $value) : ?>
                        <tr>
                            <td class="text-center">
                                <input type="checkbox" name="checkbox_value[]" value="<?= $value->iddata ?>">
                            </td>
                            <td align="center"><?= $no++ ?></td>
                            <td align="center"><?= $value->nama_daerah ?></td>
                            <td align="center"><?= $value->data1 ?></td>
                            <td align="center"><?= $value->data2 ?></td>
                            <td align="center"><?= $value->data3 ?></td>
                            <td align="center">
                            <?= anchor('metode/kmeans/data/edit_data/' . $value->iddata, '<div class="btn btn-primary btn-sm"><i class="bx bx-edit" ></i> Edit</div>') ?>
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
