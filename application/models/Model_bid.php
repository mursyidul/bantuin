<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bid extends CI_Model {
	public function getBid($id = null){
        if(isset($id)){
            $this->db->where("id_bid", $id);
        }
        $this->db->select("*");
		$this->db->from("tbl_bid");
        $this->db->where("id_helper", $this->session->userdata('id_user'));
		$this->db->order_by("id_bid", "desc");
        $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
        }
    

    public function add_bid($data){
        $this->db->insert("tbl_bid", $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function edit_bid($data, $id_bid){
        $this->db->where("id_bid", $id_bid)->update("tbl_bid",$data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function delete_ask($idHelp){
        $this->db->where("id_help", $idHelp)->delete("tbl_help");
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
}