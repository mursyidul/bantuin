<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_location extends CI_Model {
	public function getLocation($id = null){
        if(isset($id)){
            $this->db->where("id_location", $id);
        }
        $this->db->select("*");
        $this->db->from("tbl_m_location location");
        $this->db->order_by("id_location", "desc");
        $data = $this->db->get();
        if($data->num_rows() > 0){
            return $data->result();
        } else {
            return false;
        }
    }

    public function add_location($data){
        $this->db->insert("tbl_m_location", $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function edit_location($data, $id_location){
        $this->db->where("id_location", $id_location)->update("tbl_m_location",$data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function delete_location($idLocation){
        $this->db->where("id_location", $idLocation)->delete("tbl_m_location");
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function check_existing_code($column, $value){
            $this->db->select("id_location");
            $this->db->from("tbl_m_location");
            $this->db->where($column, $value);
            $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
    }
}