<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_help extends CI_Model {
	public function getHelp($id = null){
        if(isset($id)){
            $this->db->where("id_help", $id);
        }
        $this->db->select("help.id_help, help.id_village_from, help.id_village_to, help.address_detail_from, help.sender_name, help.sender_phone, help.address_detail_to, help.receiver_name, help.receiver_phone, help.information, help.date_needed, help.time_needed, help.created_date, user.user_name as person_name, vil.name as dist_name, vilto.name as disto_name, dst.name as district_from, dsto.name as district_to, rgc.name as regency_from, rgco.name as regency_to");
        $this->db->from("tbl_help help");
        $this->db->join("tbl_m_user user", "user.id_user=help.id_owner", "LEFT");
        $this->db->join("tbl_bid bid", "bid.id_bid=help.id_bid", "LEFT");
        $this->db->join("villages vil", "vil.id=help.id_village_from", "LEFT");
        $this->db->join("villages vilto", "vilto.id=help.id_village_to", "LEFT");
        $this->db->join("districts dst", "dst.id=vil.district_id", "LEFT");
        $this->db->join("regencies rgc", "rgc.id=dst.regency_id", "LEFT");
        $this->db->join("provinces pvc", "pvc.id=rgc.province_id", "LEFT");
        $this->db->join("districts dsto", "dsto.id=vilto.district_id", "LEFT");
        $this->db->join("regencies rgco", "rgco.id=dsto.regency_id", "LEFT");
        $this->db->join("provinces pvco", "pvco.id=rgco.province_id", "LEFT");
        $this->db->where("id_owner!=", $this->session->userdata('id_user'));
        $this->db->order_by("date_needed", "asc");
        $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
        }
}