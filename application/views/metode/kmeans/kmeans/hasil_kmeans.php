<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Informasi Data Vaksinasi</span>
    </div>

    <main>
        <div class="container-fluid">

          <?php

            $this->db->where('c1', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
            $this->db->join('area', 'area.idarea = data_vaccien.idarea');
            $c1 = $this->db->get('centroid_temp');
            
            $this->db->where('c2', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
            $this->db->join('area', 'area.idarea = data_vaccien.idarea');
            $c2 = $this->db->get('centroid_temp');
            
            $this->db->where('c3', 1);
            $this->db->where('iterasi', $it);
            $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
            $this->db->join('area', 'area.idarea = data_vaccien.idarea');
            $c3 = $this->db->get('centroid_temp');

            // echo "<pre>";
            // var_dump($c1);
            // die();
            
          ?>

          <h5>Zona Merah</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelurahan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c1->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->area_name; ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <h5>Zona Kuning</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelurahan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c2->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->area_name; ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
          
          <h5>Zona Hijau</h5><br>
          <table class="table table-bordered table_hover table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelurahan</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach($c3->result() as $v_c1){ ?>
              <tr>
                  <th><?= $no++ ?></th>
                  <th><?= $v_c1->area_name; ?></th>
              </tr>
              <?php }?>
            </tbody>
          </table>

        </div>
    </main>
</section>