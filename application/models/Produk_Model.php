<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_Model extends CI_Model {

    function getData(){
        return $this->db->get('produk')->result();
    }

    function addData($data,$table){
        $this->db->insert($table,$data);
    }

    function getDataBy($where,$table){		
        return $this->db->get_where($table,$where)->result();
    }

    function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

    function deleteData($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}

/* End of file Produk_Model.php */
