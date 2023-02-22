<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Contoh Import Data</span>
    </div>

    <main>
      <div class="container-fluid">
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 col-md-offset-3">
            <h3>Import Data</h3>
            <?php
            $message = $this->session->flashdata('message');
            if (isset($message)) {
                echo '<div class="alert alert-info">' . $message . '</div>';
                $this->session->unset_userdata('message');
            }

            ?>
              <form action="<?= base_url('metode/kmeans/data/import_excel'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Pilih File Excel</label>
                  <input type="file" name="fileExcel">
                </div>
                <div>
                  <button class='btn btn-success' type="submit">
                      Import		
                  </button>
                  <button class='btn btn-default' type="submit">
                      Download Contoh Import
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </main>

</section>