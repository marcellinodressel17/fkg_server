<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Tambah Data Kecamatan</span>
    </div>

    <main>

        <div class="container">
            <br>
            <center>
                <h4><strong> Contoh Tambah Data Area </strong></h4>
            </center><br>

            <form action=<?= base_url('metode/kmeans/data/tambah_area') ?> method="post">

                <div class="form_group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control selectric" name="area_name" required>
                    <?= form_error('nama_puskesmas', '<small class="text-danger">', '</small>');?>
                </div>
                
                <div class="form_group">
                    <label>Geojson</label>
                    <select name="geojson" class="form-control" required>
                        <option value=""> - Silahkan Pilih - </option>
                        <option value="kec_matuari.geojson">Kecamatan Matuari</option>
                        <option value="kec_ranowulu.geojson">Kecamatan Ranowulu</option>
                        <option value="kec_girian.geojson">Kecamatan Girian</option>
                        <option value="kec_madidir.geojson">Kecamatan Madidir</option>
                        <option value="kec_maesa.geojson">Kecamatan Maesa</option>
                        <option value="kec_aertembaga.geojson">Kecamatan Aertembaga</option>
                        <option value="kec_lembeh_sel.geojson">Kecamatan Lembeh Selatan</option>
                        <option value="kec_lembeh_ut.geojson">Kecamatan Lembeh Utara</option>
                    </select>
                    <?= form_error('geojson', '<small class="text-danger">', '</small>'); ?>
                </div>

                </br>

                <div class="form_group">
                    <button type="submit" class="btn btn-success"><i class='bx bxs-back'></i> Simpan</button>
                </div>

            </form>
            <br>

        </div>
    </main>
</section>
