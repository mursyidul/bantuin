<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

    public function checkUser($email, $password){
        $this->db->select("user.id_user, user.user_name, user.role");
        $this->db->from("tbl_m_user user");
        $this->db->where(array(
            "email" => $email,
            "password" => md5($password)
        ));

        $user = $this->db->get();
        if($user->num_rows() > 0){
            return $user->row();
        } else {
            return false;
        }
    }
    public function checkStatus($email, $password){
        $this->db->select("id_user, user_name, status");
        $this->db->from("tbl_m_user");
        $this->db->where(array(
            "email" => $email,
            "password" => md5($password),
            "status" => 1
            ));
        $user = $this->db->get();
        if($user->num_rows() > 0){
            return $user->row();
        } else {
            return false;
        }
        }
    }