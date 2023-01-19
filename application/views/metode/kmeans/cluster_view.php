<select name="links" id="" size="1" onchange="window.location.href=this.value;">
  <option value>- Silahkan Pilih -</option>
  <option value="<?= base_url('data/add_data'); ?>">Tambah Data</option>
  <option value="<?= base_url('data/import_data'); ?>">Import File</option>
</select>