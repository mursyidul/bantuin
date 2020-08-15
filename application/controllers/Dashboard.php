<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
        checkSessionUser();
		$this->load->model("Model_dashboard");
	}

	public function index(){
        // print_r($data);
		$this->template->load("template", "dashboard/v-dashboard");
	}
}