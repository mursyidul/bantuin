<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    public function __construct(){
		parent::__construct();
		// checkSessionUser();
        // $this->load->model("Model_perisai");
    }

    public function index(){
		$this->load->view("landing");
    }

    public function email(){
    	$email     = $this->input->post("email");
    	$subject   = $this->input->post("subject");
    	$message   = $this->input->post("message");

    	$config = [
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_user' => 'mursyidul1994@gmail.com',
                'smtp_pass' => '2407199402',
                'smtp_port' => 465,
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'newline'   => "\r\n"
              ];

          $this->load->library('email', $config);
          $this->email->initialize($config);
          $this->email->from('mursyidul1994@gmail.com', 'Cari Toko (umam)');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);

          if($this->email->send()) {
              // return true;
              // $register = $this->Model_register->tambahMaster("m_user", $dataRegister);
              //   if($register){
                $this->session->set_flashdata("success", "Success");
                // } else {
                //     $this->session->set_flashdata("error", "Failed");
                // }
                redirect("landing");
            } else {

                $this->session->set_flashdata("error", "Failed");
                // redirect("landing");
              echo $this->email->print_debugger();
              die;
            }
    }
    
}
?>