<select name="links" id="" size="1" onchange="window.location.href=this.value;">
  <option value>- Silahkan Pilih -</option>
  <option value="<?= base_url('data/add_data'); ?>">Tambah Data</option>
  <option value="<?= base_url('data/import_data'); ?>">Import File</option>
</select>

<table class="table table-striped data" >
  <thead>
    <tr>
      <th>
        <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm">Delete All</button>&nbsp;<input type="checkbox" id="option-all" onchange="checkAll(this)">
      </th>
      <th class="text-center">
        #
      </th>
      <th>Nama Kota</th>
      <th>Laki-Laki</th>
      <th>Perempuan</th>
      <th>Anak-anak</th>
      <th style="text-align: center;">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      foreach ($data_cluster->result() as $s) { ?>
      <tr>
        <td class="text-center">
          <input type="checkbox" name="checkbox_value[]" value="<?= $s->iddata_example ?>">
        </td>
        <td><?= $no++ ?></td>
        <td><?= $s->kota ?></td>
        <td><?= $s->laki ?></td>
        <td><?= $s->perempuan ?></td>
        <td><?= $s->anak ?></td>
        <td>
            <div class="modal-footer bg-whitesmoke br">
            <a href="<?= base_url('cluster/edit_umkm/'.$s->iddata_example); ?>" data-toogle="tooltip" title="Detail" class="btn btn-outline-info"><i class="fa fa-eye"></i></a>

        </div>
        </td>
      </tr>

        <?php  } ?>

  </tbody>
</table>
