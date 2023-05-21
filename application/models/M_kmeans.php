<?php
class M_kmeans extends CI_Model
{
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_area($checked_id)
	{
		$this->db->where_in('idarea', $checked_id);
		return $this->db->delete('area');
	}

    public function hapus_vaksinasi($checked_id)
	{
		$this->db->where_in('idata_vaccien', $checked_id);
		return $this->db->delete('data_vaccien');
	}

    public function edit($where, $table)
    {
        return  $this->db->get_where($table, $where);
    }

    public function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}