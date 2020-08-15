<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Earn extends CI_Controller {
	public function __construct(){
		parent::__construct();
        // checkSessionUser();
	}

	public function index(){
		$this->template->load("template", "earn/data-earn");
	}
}