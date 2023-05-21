<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Reksadana Area Bitung</span>
    </div>

    <main>
        <div class="container-fluid">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>metode/kmeans/kmeans/iterasi_lanjut">Proses Iterasi Selanjutnya</a><br><br>
            <h5>Centroid Awal</h5>
            <table class="table table-bordered table_hover table-striped">
                <thead>
                    <tr>
                        <th>Centroid</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><center>1</center></td>     
                        <td>11963</td>         
                        <td>16483</td>         
                        <td>27964</td>                                    
                    </tr>
                    <tr>
                        <td><center>2</center></td>     
                        <td>4024</td>         
                        <td>6531</td>         
                        <td>13494</td>                                    
                    </tr>
                    <tr>
                        <td><center>3</center></td>     
                        <td>4663</td>         
                        <td>10264</td>         
                        <td>21891</td>                                    
                    </tr>
                </tbody>
            </table>

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
                <?php 

                    // centroid 1
                    $c1a = 11963;         
                    $c1b = 16483;         
                    $c1c = 27964;                  
        
                    // centroid 2
                    $c2a = 4024;         
                    $c2b = 6531;         
                    $c2c = 13494;         

                    // centroid 3
                    $c3a = 4463;         
                    $c3b = 10264;         
                    $c3c = 21891;           
                    
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
                    
                    $this->db->query('truncate table centroid_temp');
                    $this->db->query('truncate table hasil_centroid');
                ?>
                </thead>
                <tbody>
                <?php foreach ($vaksin->result_array() as $s) { ?>
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
                
                $q = "insert into centroid_temp(iterasi,idata_vaccien,c1,c2,c3) values(1,'".$s['idata_vaccien']."','".$arr_c1[$no]."','".$arr_c2[$no]."','".$arr_c3[$no]."')";
                $this->db->query($q);
                
                } 
                
                //------------centroid baru c1
                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c1) as c1');
                $this->db->where('c1', 1);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp = $this->db->get('centroid_temp')->result();

                // var_dump($centroid_temp);
                // die();
                
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
                
                //------------centroid baru c2
                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c2) as c2');
                $this->db->where('c2', 1);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp_c2 = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp_c2 as $v_ct_c2){
                    $v1_2 = $v_ct_c2->not_vaccine1;
                    $v2_2 = $v_ct_c2->not_vaccine2;
                    $v3_2 = $v_ct_c2->not_vaccine3;
                    $c2 = $v_ct_c2->c2;
                    
                    $c2a_b = $v1_2 / $c2;
                    $c2b_b = $v2_2 / $c2;
                    $c2c_b = $v3_2 / $c2;
                }
                //-----------end proses centroid baru c2

                //------------centroid baru c3
                $this->db->select('sum(not_vaccine1) as not_vaccine1, sum(not_vaccine2) as not_vaccine2, sum(not_vaccine3) as not_vaccine3, sum(c3) as c3');
                $this->db->where('c3', 1);
                $this->db->join('data_vaccien','data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
                $centroid_temp_c3 = $this->db->get('centroid_temp')->result();
                
                foreach($centroid_temp_c3 as $v_ct_c3){
                    $v1_3 = $v_ct_c3->not_vaccine1;
                    $v2_3 = $v_ct_c3->not_vaccine2;
                    $v3_3 = $v_ct_c3->not_vaccine3;
                    $c3 = $v_ct_c3->c3;
                    
                    $c3a_b = $v1_3 / $c3;
                    $c3b_b = $v2_3 / $c3;
                    $c3c_b = $v3_3 / $c3;
                }
                //-----------end proses centroid baru c3

                $q = "insert into hasil_centroid(c1a,c1b,c1c,c2a,c2b,c2c,c3a,c3b,c3c) values('".$c1a_b."','".$c1b_b."','".$c1c_b."','".$c2a_b."','".$c2b_b."','".$c2c_b."','".$c3a_b."','".$c3b_b."','".$c3c_b."')";
                $this->db->query($q);

                ?>
                </tbody>
            </table>
        </div>
    </main>

</section>