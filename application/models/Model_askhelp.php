<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_askhelp extends CI_Model {
	public function getAskhelp($id = null){
        if(isset($id)){
            $this->db->where("help.id_help", $id);
        }
        $this->db->select("help.id_help, help.id_owner, help.id_village_from, help.id_village_to, help.address_detail_from, help.sender_name, help.sender_phone, help.address_detail_to, help.receiver_name, help.receiver_phone, help.information, help.date_needed, help.time_needed, help.created_date, user.user_name as person_name, vil.name as dist_name, vilto.name as disto_name");
		$this->db->from("tbl_help help");
        $this->db->join("tbl_m_user user", "user.id_user=help.id_owner", "LEFT");
        $this->db->join("tbl_bid bid", "bid.id_bid=help.id_bid", "LEFT");
        $this->db->join("villages vil", "vil.id=help.id_village_from", "LEFT");
        $this->db->join("villages vilto", "vilto.id=help.id_village_to", "LEFT");
        $this->db->where("id_owner", $this->session->userdata('id_user'));
		$this->db->order_by("date_needed", "asc");
        $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
        }
    

    public function add_ask($data){
        $this->db->insert("tbl_help", $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function edit_ask($data, $id_help){
        $this->db->where("id_help", $id_help)->update("tbl_help",$data);
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

    public function getVillage(){
        $this->db->select("vlg.id, vlg.name as village_name, dst.name as district_name, rgc.name as regency_name, pvc.name as province_name");
        $this->db->from("villages vlg");
        $this->db->join("districts dst", "dst.id=vlg.district_id", "LEFT");
        $this->db->join("regencies rgc", "rgc.id=dst.regency_id", "LEFT");
        $this->db->join("provinces pvc", "pvc.id=rgc.province_id", "LEFT");
        $this->db->where("(pvc.name='DKI JAKARTA' OR pvc.name='JAWA BARAT')", NULL, FALSE);
        $this->db->order_by("vlg.name");
        // $this->db->limit("10");
        return $this->db->get()->result();
    }
}