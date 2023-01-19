<?php
class M_data extends CI_Model
{
    
    function get_puskesmas()
    {
        return $this->db->get('puskesmas')->result();
    }

    function get_kecamatan()
    {
        return $this->db->get('kecamatan')->result();
    }

    public function get_puskel($id_puskesmas){    
          $this->db->where('id_puskesmas', $id_puskesmas);    
          $result = $this->db->get('kelurahan')->result();
                  
          return $result;   
    }

    public function data_puskesmas(){
        $this->db->select('*');
        $this->db->from('puskesmas');
        return $this->db->get()->result();
    }

    public function edit_puskesmas($where,$table){
        return  $this->db->get_where($table,$where);
    }

    public function edit_daerahlaki($where, $table)
    {
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        return  $this->db->get_where($table, $where);
    }

    public function edit_daerahperempuan($where, $table)
    {
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        return  $this->db->get_where($table, $where);
    }

    public function edit_daerah_malaria($where, $table)
    {
        return  $this->db->get_where($table, $where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($checked_id)
	{
		$this->db->where_in('iddata', $checked_id);
		return $this->db->delete('data');
	}

    public function hapus_daerah($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function datamalaria(){
        $this->db->select('*');
        $this->db->from('data_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        return $this->db->get()->result();
    }

    public function datamalarial()
    {
        $this->db->select('*');
        $this->db->from('data_malarialaki');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        return $this->db->get()->result();
    }

    public function datamalariap()
    {
        $this->db->select('*');
        $this->db->from('data_malariaperempuan');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        return $this->db->get()->result();
    }

    // function get_puskesmas($id_penduduk)
    // {
    //     //ambil data kabupaten berdasarkan id provinsi yang dipilih
    //     $this->db->where('id_penduduk', $id_penduduk);
    //     $this->db->order_by('jumlah_penduduk', 'ASC');
    //     $query = $this->db->get('data_penduduk');

    //     $output = '<option value="">-- Pilih Puskesmas --</option>';

    //     //looping data
    //     foreach ($query->result() as $row) {
    //         $output .= '<option value="' . $row->id_penduduk . '">' . $row->jumlah_penduduk . '</option>';
    //     }
    //     //return data kabupaten
    //     return $output;
    // }

    function selectdata($where = '')
    {
        return $this->db->query("select * from $where;");
    }

    function zhijau(){
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_malaria', 'data_malaria.id_malaria = centroid_temp.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c3 = "1"');
        return $this->db->get()->result();
    
    }

    function zhijaulaki()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_laki');
        $this->db->join('data_malarialaki', 'data_malarialaki.id_malarial = centroid_temp_laki.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c3 = "1"');
        return $this->db->get()->result();
    }

    function zhijauperempuan()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_perempuan');
        $this->db->join('data_malariaperempuan', 'data_malariaperempuan.id_malariap = centroid_temp_perempuan.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        $this->db->where('iterasi = "4"');
        $this->db->where('c3 = "1"');
        return $this->db->get()->result();
    }

    function zkuning(){
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_malaria', 'data_malaria.id_malaria = centroid_temp.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c2 = "1"');
        return $this->db->get()->result();
    }

    function zkuninglaki()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_laki');
        $this->db->join('data_malarialaki', 'data_malarialaki.id_malarial = centroid_temp_laki.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c2 = "1"');
        return $this->db->get()->result();
    }

    function zkuningperempuan()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_perempuan');
        $this->db->join('data_malariaperempuan', 'data_malariaperempuan.id_malariap = centroid_temp_perempuan.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        $this->db->where('iterasi = "4"');
        $this->db->where('c2 = "1"');
        return $this->db->get()->result();
    }

    function zmerah()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_malaria', 'data_malaria.id_malaria = centroid_temp.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c1 = "1"');
        return $this->db->get()->result();
    }

    function zmerahlaki()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_laki');
        $this->db->join('data_malarialaki', 'data_malarialaki.id_malarial = centroid_temp_laki.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        $this->db->where('iterasi = "3"');
        $this->db->where('c1 = "1"');
        return $this->db->get()->result();
    }

    function zmerahperempuan()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp_perempuan');
        $this->db->join('data_malariaperempuan', 'data_malariaperempuan.id_malariap = centroid_temp_perempuan.id_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        $this->db->where('iterasi = "4"');
        $this->db->where('c1 = "1"');
        return $this->db->get()->result();
    }

    function graph()
    {
        $query = "SELECT COUNT(*) AS total, predikat FROM hasil
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    function graph_laki()
    {
        $query = "SELECT COUNT(*) AS total_laki, predikat FROM hasil_laki
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    function graph_perempuan()
    {
        $query = "SELECT COUNT(*) AS total_perempuan, predikat FROM hasil_perempuan
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    public function getData(){
		$this->db->select('*');
		return $this->db->get('data_malaria_baru')->result_array();
	}

    public function getData_2020(){
		$this->db->select('*');
		return $this->db->get('data_malaria_baru_2020')->result_array();
	}

    public function insert($data){
		$insert = $this->db->insert_batch('data_malaria_baru', $data);
		if($insert){
			return true;
		}
	}

    public function insert_2020($data){
		$insert = $this->db->insert_batch('data_malaria_baru_2020', $data);
		if($insert){
			return true;
		}
	}

    public function hapus_malaria($checked_id)
	{
		$this->db->where_in('idmalaria_baru', $checked_id);
		return $this->db->delete('data_malaria_baru');
	}

    public function hapus_puskesmas($checked_id)
	{
		$this->db->where_in('id_puskesmas', $checked_id);
		return $this->db->delete('puskesmas');
	}

    public function hapus_data_malaria($checked_id)
	{
		$this->db->where_in('iddata_malaria', $checked_id);
		return $this->db->delete('data_malaria');
	}

    public function hapus_malaria_2020($checked_id)
	{
		$this->db->where_in('idmalaria_baru2020', $checked_id);
		return $this->db->delete('data_malaria_baru_2020');
	}

    public function import($data){
		$insert = $this->db->insert_batch('data', $data);
		if($insert){
			return true;
		}
	}

}
