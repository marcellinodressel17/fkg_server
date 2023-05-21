<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Tambah Data Vaksinasi</span>
    </div>

    <main>

        <div class="container">
            <br>
            <center>
                <h4><strong> Tambah Data Vaksinasi </strong></h4>
            </center><br>

            <form action=<?= base_url('metode/kmeans/data/save_vaksinasi') ?> method="post">
              
            <div class="form_group">
                <label>Nama Area</label>
                <select type="text" class="form-control selectric" name="idarea" required>
                  <option value=""> - Silahkan Pilih - </option>
                  <?php foreach ($data->result() as $value){
                    echo "<option value='" . $value->idarea . "'>" . $value->area_name . "</option>";
                  } ?>
                </select>
                <?= form_error('idarea', '<small class="text-danger">', '</small>'); ?>
              </div><br>

              <div class="form_group">
                  <label>Jumlah Penduduk</label>
                  <input type="text" class="form-control selectric" name="population" id="population" required>
                  <?= form_error('population', '<small class="text-danger">', '</small>'); ?>
              </div><br>

              <p><strong>Vaksinasi Pertama</strong></p>
              <div class="form_group">
                  <label>Dibawah Umur</label>
                  <input type="text" class="form-control selectric" name="minors1" id="minors1" required>
                  <?= form_error('minors1', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Lansia</label>
                  <input type="text" class="form-control selectric" name="elderly1" id="elderly1" required>
                  <?= form_error('elderly1', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Total Vaksin</label>
                  <input type="text" class="form-control selectric" name="vaccien_1" id="vaccien_1" required>
                  <?= form_error('vaccien_1', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Tidak Vaksin</label>
                  <input type="text" class="form-control selectric" name="not_vaccine1" id="not_vaccine1" required>
                  <?= form_error('not_vaccine1', '<small class="text-danger">', '</small>'); ?>
              </div><br>

              <p><strong>Vaksinasi Kedua</strong></p>
              <div class="form_group">
                  <label>Dibawah Umur</label>
                  <input type="text" class="form-control selectric" name="minors2" id="minors2" required>
                  <?= form_error('minors2', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Lansia</label>
                  <input type="text" class="form-control selectric" name="elderly2" id="elderly2" required>
                  <?= form_error('elderly2', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Total Vaksin</label>
                  <input type="text" class="form-control selectric" name="vaccien_2" id="vaccien_2" required>
                  <?= form_error('vaccien_2', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Tidak Vaksin</label>
                  <input type="text" class="form-control selectric" name="not_vaccine2" id="not_vaccine2" required>
                  <?= form_error('not_vaccine2', '<small class="text-danger">', '</small>'); ?>
              </div><br>

              <p><strong>Booster</strong></p>
              <div class="form_group">
                  <label>Dibawah Umur</label>
                  <input type="text" class="form-control selectric" name="minors3" id="minors3" required>
                  <?= form_error('minors3', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Lansia</label>
                  <input type="text" class="form-control selectric" name="elderly3" id="elderly3" required>
                  <?= form_error('elderly3', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Total Vaksin</label>
                  <input type="text" class="form-control selectric" name="vaccien_3" id="vaccien_3" required>
                  <?= form_error('vaccien_3', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form_group">
                  <label>Tidak Vaksin</label>
                  <input type="text" class="form-control selectric" name="not_vaccine3" id="not_vaccine3" required>
                  <?= form_error('not_vaccine3', '<small class="text-danger">', '</small>'); ?>
              </div>
              
              <br>

              <div class="form_group" align="right">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
              </div><br>

            </form>
        </div>
    </main>
</section>

<script>
    $(document).ready(function() {
        $("#minors1, #elderly1, #population, #minors2, #elderly2, #minors3, #elderly3").keyup(function() {

            var minors1  = $("#minors1").val();
            var elderly1 = $("#elderly1").val();
            var minors2  = $("#minors2").val();
            var elderly2 = $("#elderly2").val();
            var minors3  = $("#minors3").val();
            var elderly3 = $("#elderly3").val();
            var population = $("#population").val();
            
            // vaksin 1
            var vaccien_1 = parseInt(minors1) + parseInt(elderly1);
            $("#vaccien_1").val(vaccien_1);
            var not_vaccine1 = parseInt(population) - parseInt(vaccien_1);
            $("#not_vaccine1").val(not_vaccine1);
            
            // vaksin 2
            var vaccien_2 = parseInt(minors2) + parseInt(elderly2);
            $("#vaccien_2").val(vaccien_2);
            var not_vaccine2 = parseInt(population) - parseInt(vaccien_2);
            $("#not_vaccine2").val(not_vaccine2);

            // vaksin 3
            var vaccien_3 = parseInt(minors3) + parseInt(elderly3);
            $("#vaccien_3").val(vaccien_3);
            var not_vaccine3 = parseInt(population) - parseInt(vaccien_3);
            $("#not_vaccine3").val(not_vaccine3);
        });
    });
</script>