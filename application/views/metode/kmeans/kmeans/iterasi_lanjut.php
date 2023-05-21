<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>metode/kmeans/kmeans/iterasi_lanjut">Proses Iterasi Selanjutnya</a><br><br>

        <?php
          $c1a = "";
          $c1b = "";
          $c1c = "";

          $c2a = "";
          $c2b = "";
          $c2c = "";

          $c3a = "";
          $c3b = "";
          $c3c = "";
        
          foreach($centroid->result_array() as $c){
            $c1a = $c['c1a'];
            $c1b = $c['c1b']; 
            $c1c = $c['c1c'];

            $c2a = $c['c2a'];
            $c2b = $c['c2b']; 
            $c2c = $c['c2c'];

            $c3a = $c['c3a'];
            $c3b = $c['c3b']; 
            $c3c = $c['c3c'];
          }

          $c1a_b = "";
          $c1b_b = "";
          $c1c_b = "";

          $c2a_b = "";
          $c2b_b = "";
          $c2c_b = "";

          $c3a_b = "";
          $c3b_b = "";
          $c3c_b = "";
          
          $hc1 = 0;
          $hc2 = 0;
          $hc3 = 0;

          $no = 1;
          $arr_c1 = array();
          $arr_c2 = array();
          $arr_c3 = array();

          $arr_c1_temp = array();
          $arr_c2_temp = array();
          $arr_c3_temp = array();
        ?>

<table class="table table-bordered table_hover table-striped">
            <thead>
                <tr>
                  <th>Data Centroid</th>
                  <th></th>
                  <th></th>
                  <th></th>
                <tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <center>1</center>
                </td>
                <td>
                  <?= $c1a ?> 
                </td>
                <td>
                  <?= $c1b ?> 
                </td>
                <td>
                  <?= $c1c ?> 
                </td>
                
              </tr>
              <tr>
                <td>
                  <center>2</center>
                </td>
                <td>
                  <?= $c2a ?> 
                </td>
                <td>
                  <?= $c2b ?> 
                </td>
                <td>
                  <?= $c2c ?> 
                </td>
                
              </tr>
              <tr>
                <td>
                  <center>3</center>
                </td>
                <td>
                  <?= $c3a ?> 
                </td>
                <td>
                  <?= $c3b ?> 
                </td>
                <td>
                  <?= $c3c ?> 
                </td>
                
              </tr>
            </tbody>
          </table><br>

          <table class="table table-striped data">
            <thead>
              <tr align="center">
              <th rowspan="2">#</th>
              <th rowspan="2">Desa / Kelurahan</th>
              <th rowspan="2">Belum Vaksin 1</th>
              <th rowspan="2">Belum Vaksin 2</th>
              <th rowspan="2">Belum Vaksin 3</th>
              <th rowspan="2">Centroid 1</th>
              <th rowspan="2">Centroid 2</th>
              <th rowspan="2">Centroid 3</th>
              <th rowspan="2">C1(Merah)</th>
              <th rowspan="2">C2(Kuning)</th>
              <th rowspan="2">C3(Hijau)</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach($data_vaccien->result_array() as $s){ ?>
              <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $s['area_name']; ?></td>
                  <td><?= $s['not_vaccine1']; ?></td>
                  <td><?= $s['not_vaccine2']; ?></td>
                  <td><?= $s['not_vaccine3']; ?></td>
                  <td><?php
                    $hc1 = sqrt(pow(($s['not_vaccine1'] - $c1a), 2) + pow(($s['not_vaccine2'] - $c1b), 2) + pow(($s['not_vaccine3'] - $c1c), 2));
                    echo $hc1;
                  ?></td>
                  <td><?php
                    $hc2 = sqrt(pow(($s['not_vaccine1'] - $c2a), 2) + pow(($s['not_vaccine2'] - $c2b), 2) + pow(($s['not_vaccine3'] - $c2c), 2));
                    echo $hc2;
                  ?></td>
                  <td><?php
                    $hc3 = sqrt(pow(($s['not_vaccine1'] - $c3a), 2) + pow(($s['not_vaccine2'] - $c3b), 2) + pow(($s['not_vaccine3'] - $c3c), 2));
                    echo $hc3;
                  ?></td>
                <?php
                    if($hc1<=$hc2)
                    {
                        if($hc1<=$hc3)
                        {
                        $arr_c1[$no] = 1;
                        }
                        else
                        {
                        $arr_c1[$no] = '0';
                        }
                    }
                    else
                    {
                        $arr_c1[$no] = '0';
                    }
                    
                    if($hc2<=$hc1)
                    {
                        if($hc2<=$hc3)
                        {
                        $arr_c2[$no] = 1;
                        }
                        else
                        {
                        $arr_c2[$no] = '0';
                        }
                    }
                    else
                    {
                        $arr_c2[$no] = '0';
                    }
                    
                    if($hc3<=$hc1)
                    {
                        if($hc3<=$hc2)
                        {
                        $arr_c3[$no] = 1;
                        }
                        else
                        {
                        $arr_c3[$no] = '0';
                        }
                    }
                    else
                    {
                        $arr_c3[$no] = '0';
                    }

                    $arr_c1_temp[$no] = $s['not_vaccine1'];
                    $arr_c2_temp[$no] = $s['not_vaccine2'];
                    $arr_c3_temp[$no] = $s['not_vaccine3'];

                    $warna1="";
                    $warna2="";
                    $warna3="";
                ?>
                <?php if($arr_c1[$no]==1){$warna1='#FFFF00';} else{$warna1='#ccc';} ?><td bgcolor="<?php echo $warna1; ?>"><?php echo $arr_c1[$no] ;?></td>
                <?php if($arr_c2[$no]==1){$warna2='#FFFF00';} else{$warna2='#ccc';} ?><td bgcolor="<?php echo $warna2; ?>"><?php echo $arr_c2[$no] ;?></td>
                <?php if($arr_c3[$no]==1){$warna3='#FFFF00';} else{$warna3='#ccc';} ?><td bgcolor="<?php echo $warna3; ?>"><?php echo $arr_c3[$no] ;?></td>
                </tr>
                <?php
                $q = "insert into centroid_temp(iterasi,idata_vaccien,c1,c2,c3) values('".$id."','".$s['idata_vaccien']."','".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."')";
                $this->db->query($q);

                $no++; } 

                $this->db->select('max(iterasi) as d_iterasi');
                $iterasi_data = $this->db->get('centroid_temp')->row('d_iterasi');

                // $iterasi_data = $iterasi_data_smtr - 1;

                //------------centorid baru c1
                // $this->db->select('sum(positif) as positif, sum(usia_0) as u_0, sum(usia_5) as u_5, sum(usia_15) as u_15, sum(usia_64) as u_64, sum(pf) as pf, sum(pv) as pv, sum(po) as po, sum(pm) as pm, sum(iterasi) as iterasi');
                // $this->db->where('c1', 1);
                // $this->db->where('iterasi', $iterasi_data);
                // $this->db->join('data_malaria','data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                // $centroid_temp = $this->db->get('centroid_temp')->result();

                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c1) as c1');
                $this->db->where('c1', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp = $this->db->get('centroid_temp')->result();

                foreach($centroid_temp as $v_ct){
                  $v1 = $v_ct->not_vaccine1;
                  $v2 = $v_ct->not_vaccine2;
                  $v3 = $v_ct->not_vaccine3;
                  $c1 = $v_ct->c1;
            
                  $c1a_b = $v1 / $c1;
                  $c1b_b = $v2 / $c1;
                  $c1c_b = $v3 / $c1;                 
                }

                //-----------end proses centroid baru c1
                
                //------------centorid baru c2
                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c2) as c2');
                $this->db->where('c2', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp_c2 = $this->db->get('centroid_temp')->result();

                // echo "<pre>";
                // var_dump($centroid_temp_c2);
                // die();
                
                foreach($centroid_temp_c2 as $v_ct_c2){
                    $v1_2 = $v_ct_c2->not_vaccine1;
                    $v2_2 = $v_ct_c2->not_vaccine2;
                    $v3_2 = $v_ct_c2->not_vaccine3;
                    $c2 = $v_ct_c2->c2;
                    
                    $c2a_b = $v1_2 / $c2;
                    $c2b_b = $v2_2 / $c2;
                    $c2c_b = $v3_2 / $c2;
                }

                //------------centorid baru c2
                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c3) as c3');
                $this->db->where('c3', 1);
                $this->db->where('iterasi', $iterasi_data);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp_c3 = $this->db->get('centroid_temp')->result();

                // echo "<pre>";
                // var_dump($centroid_temp_c2);
                // die();
                
                foreach($centroid_temp_c3 as $v_ct_c3){
                  $v1_3 = $v_ct_c3->not_vaccine1;
                  $v2_3 = $v_ct_c3->not_vaccine2;
                  $v3_3 = $v_ct_c3->not_vaccine3;
                  $c3 = $v_ct_c3->c3;
                  
                  $c3a_b = $v1_3 / $c3;
                  $c3b_b = $v2_3 / $c3;
                  $c3c_b = $v3_3 / $c3;
                }
                
                $q = "insert into hasil_centroid(c1a,c1b,c1c,c2a,c2b,c2c,c3a,c3b,c3c) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c3a_b."','".$c3b_b."','".$c3c_b."')";
                $this->db->query($q);

                ?>

              </table>
    </main>
</section>