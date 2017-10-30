<?php 
class Mainmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertdata($batchdata)
    {
        //print_r($batchdata);
        $this->db->insert('newcall', $batchdata);
        if ($this->db->insert_id() > 0) {
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    function getallrecrods(){
        $query = $this->db->get('newcall');
        return $query->result();
    }

    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('newcall');
    }
}

?>
