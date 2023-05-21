<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kmeans extends CI_Controller {

		// get data reksadana
    public function index(){

        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $data_reksadana['vaksin'] = $this->db->get('data_vaccien');

        $data_title['title'] = 'Proses Perhitungan K-means';
        $this->load->view('metode/kmeans/layout/header', $data_title);
        $this->load->view('metode/kmeans/kmeans/data_awal', $data_reksadana);
        $this->load->view('metode/kmeans/layout/footer');
    }

    public function iterasi_lanjut()
    {
		$this->db->join('area', 'area.idarea = data_vaccien.idarea');
		$data['data_vaccien'] = $this->db->get('data_vaccien');
		$id = "";
		$id = $this->db->query('select max(idhasil_centorid) as m from hasil_centroid');
		foreach($id->result() as $i)
		{
			$id = $i->m;
		}
		$this->db->where('idhasil_centorid', $id);
		$data['centroid'] = $this->db->get('hasil_centroid');
		$data['id'] = $id+1;
		
		$it = "";
		$it = $this->db->query('select max(iterasi) as it from centroid_temp');
		foreach($it->result() as $i)
		{
			$it = $i->it;
		}
		
		$it_temp = $it-1;
		$this->db->where('iterasi', $it_temp);
		$it_sebelum = $this->db->get('centroid_temp');
		$c1_sebelum = array();
		$c2_sebelum = array();
		$c3_sebelum = array();
		$no=0;
		foreach($it_sebelum->result() as $it_prev)
		{
			$c1_sebelum[$no] = $it_prev->c1;
			$c2_sebelum[$no] = $it_prev->c2;
			$c3_sebelum[$no] = $it_prev->c3;
			$no++;
		}
		
		$this->db->where('iterasi', $it);
		$it_sesesudah = $this->db->get('centroid_temp');
		$c1_sesesudah = array();
		$c2_sesesudah = array();
		$c3_sesesudah = array();
		$no=0;
		foreach($it_sesesudah->result() as $it_next)
		{
			$c1_sesesudah[$no] = $it_next->c1;
			$c2_sesesudah[$no] = $it_next->c2;
			$c3_sesesudah[$no] = $it_next->c3;
			$no++;
		}
		
		if($c1_sebelum==$c1_sesesudah && $c2_sebelum==$c2_sesesudah && $c3_sebelum==$c3_sesesudah)
		{
			?>
				<script>
					alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
				</script>
			<?php
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."metode/kmeans/proses/'>";
		}
		else
		{
			$datas['title'] = 'Iterasi Lanjut';

				$this->load->view('metode/kmeans/layout/header', $datas);
				$this->load->view('metode/kmeans/kmeans/iterasi_lanjut', $data);
				$this->load->view('metode/kmeans/layout/footer');
			}
    }

 }