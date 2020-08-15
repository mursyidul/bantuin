<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Model_login", "mLogin");
	}

	public function index(){
		if($this->session->userdata("biru_login") == "Y"){
			redirect("dashboard");
		}
		$this->load->view("login_page");
	}

	public function action(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if(isset($username) && isset($password)){
			$checkUser = $this->mLogin->checkUser($username, $password);
			if($checkUser){
				$checkStatus = $this->mLogin->checkStatus($username, $password);
				if($checkStatus){
					$dataUser = array(
					"id_user" => $checkUser->id_user,
					"user_name" => $checkUser->user_name,
					"role" => $checkUser->role,
					"biru_login" => "Y"
				);
				$this->session->set_userdata($dataUser);
				$this->session->set_flashdata("success", "Selamat datang ".$this->session->userdata('user_name'));
				redirect("dashboard");
				} else {
					$this->session->set_flashdata("error", "Maaf, akun anda belum diaktifkan");
					redirect("");
				}
			} else {
				$this->session->set_flashdata("error", "Login gagal! Periksa akun anda");
				redirect("");
			}
		}
	}

	public function doLogout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
