<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function getUser($id = null){
        if(isset($id)){
            $this->db->where("user.id_user", $id);
        }
        $this->db->select("user.id_user, user.user_name, user.user_nud, user.position, user.department, user.leader_name, usrj.user_name nama_atasan, usrj.position as leader_pos, user.email, user.role, user.status, user.report_to_pe");
		$this->db->from("tbl_m_user user");
        $this->db->join("tbl_m_user usrj", "usrj.id_user=user.leader_name", "LEFT");
        if($this->session->userdata('role') == 'user'){
        $this->db->where("user.leader_name=", $this->session->userdata('id_user'));
        }
		$this->db->order_by("id_user", "desc");
        $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
    }

    public function user_list(){
        $this->db->select("id_user, user_name as list_name");
        $this->db->from("tbl_m_user");
        $this->db->order_by("list_name");
        return $this->db->get()->result();
    }

    public function tambahUser($data){
        $this->db->insert("tbl_m_user", $data);
        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    public function updateUser($data, $id_user){
            $this->db->where("id_user", $id_user)->update("tbl_m_user", $data);
            if($this->db->affected_rows() > 0){
                return true;
            } else {
                return false;
            }
        }

    public function ubahProfil($data, $idUser){
        $this->db->where("id_user", $idUser)->update("tbl_user", $data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }
    

    public function check_existing_user($column, $value){
            $this->db->select("id_user");
            $this->db->from("tbl_m_user");
            $this->db->where($column, $value);
            $data = $this->db->get();
            if($data->num_rows() > 0){
                return $data->result();
            } else {
                return false;
            }
        }

    public function deleteUser($idUser){
        $this->db->where("id_user", $idUser)->delete("tbl_m_user");
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function view(){
        return $this->db->get('tbl_m_user')->result(); // Tampilkan semua data yang ada di tabel
    }
}
?>