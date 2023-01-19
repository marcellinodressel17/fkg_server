<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library(array('excel','session'));
        $this->load->model('m_data');
    }

  public function index(){

    $data['title'] = "Data Paket 1";

    $this->db->join('daerah', 'daerah.idaerah = data.iddaerah');
    $kmeans['data_kmeans'] = $this->db->get('data');

    $this->load->view('metode/layout/header', $data);
    $this->load->view('metode/kmeans/data', $kmeans);
    $this->load->view('metode/layout/footer');
  }

  public function tambah_data(){
    $data['title'] = "Tambah Data";

    $this->load->view('metode/layout/header', $data);
    $this->load->view('metode/kmeans/tambah_data');
    $this->load->view('metode/layout/footer');
  }

  public function proses_tambah_data(){

    $this->form_validation->set_rules('iddaerah', 'iddaerah', 'required|is_unique[data.iddaerah]');
    $this->form_validation->set_rules('data1', 'data1', 'required');
    $this->form_validation->set_rules('data2', 'data2', 'required');
    $this->form_validation->set_rules('data3', 'data3', 'required');
    
    if ($this->form_validation->run() == false) {
      $data['title'] = "Tambah Data";

      $this->load->view('metode/layout/header', $data);
      $this->load->view('metode/kmeans/tambah_data');
      $this->load->view('metode/layout/footer');
    } else {
        $data_kmeans = [
            'iddaerah'      => $this->input->post('iddaerah'),
            'data1'         => $this->input->post('data1'),
            'data2'         => $this->input->post('data2'),
            'data3'         => $this->input->post('data3'),
        ];

        $this->db->insert('data', $data_kmeans);
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
        redirect('metode/kmeans/data');
    }
  }

  public function deleteall_kmeans(){
    if(isset($_POST['deleteEmpBtn'])){
        if(!empty($this->input->post("checkbox_value"))){
            $checkedEmp = $this->input->post('checkbox_value');
            $checked_id = [];
            foreach($checkedEmp as $row){
                array_push($checked_id, $row);
            }
            $this->m_data->hapus_data($checked_id);
            $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
            redirect('metode/kmeans/data');
        }else{
            $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
            redirect('metode/kmeans/data');
        }
      }
  }

  public function import_data(){
    $data['title'] = "Import Data";

    $this->load->view('metode/layout/header', $data);
    $this->load->view('metode/kmeans/import_data');
    $this->load->view('metode/layout/footer');
  }

  public function import_excel(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=5; $row<=$highestRow; $row++)
				{
					$iddaerah = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$data1 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$data2 = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$data3 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$temp_data[] = array(
						'iddaerah'	=> $iddaerah,
						'data1'	    => $data1,
						'data2'	    => $data2,
						'data3'	    => $data3,
					); 	
				}
			}
			$insert = $this->m_data->import($temp_data);
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect('metode/kmeans/data');
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect('metode/kmeans/data/import_data');
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}

}