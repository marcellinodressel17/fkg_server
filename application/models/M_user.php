<?php
class M_user extends CI_Model
{

    private function _get_datatables_query()
    {
        //custom filter
        if ($this->input->post('iduser')) {
            $this->db->where('user.iduser', $this->input->post('name'));
        }
 
        $this->db->select('name AS name_user');
        $this->db->from('iduser');
        $i = 0;
 
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
 
                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
 
        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function getuser($searchTerm = "")
    {
        $this->db->select('iduser, name');
        $this->db->where("name like '%" . $searchTerm . "%' ");
        $this->db->order_by('iduser', 'asc');
        $fetched_records = $this->db->get('user');
        $datauser = $fetched_records->result_array();
 
        $data = array();
        foreach ($datauser as $user) {
            $data[] = array("id" => $user['iduser'], "text" => $user['name']);
        }
        return $data;
    }
}