<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Tambah Data</span>
    </div>

    <main>

        <div class="container">
            <br>
            <center>
                <h4><strong> Form Tambah Data </strong></h4>
            </center><br>

            <form action=<?= base_url('metode/kmeans/data/proses_tambah_data') ?> method="post">
              
              <div class="form_group">
                  <label>Daerah</label>
                  <select type="text" class="form-control selectric" name="iddaerah" required>
                    <option value=""> - Silahkan Pilih - </option>
                    <option value="1">Dinoyo</option>
                    <option value="2">Jatymulyo</option>
                    <option value="3">Ketawanggede</option>
                    <option value="4">Lowokwaru</option>
                    <option value="5">Merjosari</option>
                    <option value="6">Mojolangu</option>
                    <option value="7">Sumbersari</option>
                    <option value="8">Tasikmadu</option>
                    <option value="9">Tlogomas</option>
                    <option value="10">Tulusrejo</option>
                    <option value="11">Tunggulwulung</option>
                    <option value="11">Tunjung Sekar</option>
                  </select>
                  <?= form_error('iddaerah', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Data 1</label>
                  <input type="text" class="form-control selectric" name="data1" required>
                  <?= form_error('data1', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Data 2</label>
                  <input type="text" class="form-control selectric" name="data2" required>
                  <?= form_error('data2', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="form_group">
                  <label>Data 3</label>
                  <input type="text" class="form-control selectric" name="data3" required>
                  <?= form_error('data3', '<small class="text-danger">', '</small>'); ?>
              </div><br>
              
              <div class="form_group">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Save</button>
              </div>

            </form>
        </div>
    </main>
</section>