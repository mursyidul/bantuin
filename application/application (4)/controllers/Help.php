<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {
	public function __construct(){
		parent::__construct();
        // checkSessionUser();
		$this->load->model("Model_help");
		$this->load->model("Model_bid");
	}

	public function index(){
        $data['help'] = $this->Model_help->getHelp();
        $data['bid'] = $this->Model_bid->getBid();
		$this->template->load("template", "help/data-help", $data);
	}

	public function addBid(){
		$id_helper = $this->input->post('id_helper');
		$id_help = $this->input->post('id_help');
		$estimate_date_pick_up = $this->input->post('estimate_date_pick_up');
		$estimate_time_pick_up = $this->input->post('estimate_time_pick_up');
		$estimate_date_arrive = $this->input->post('estimate_date_arrive');
		$estimate_time_arrive = $this->input->post('estimate_time_arrive');
		$bid_cost = $this->input->post('bid_cost');

		$dataAdd = array(
			'id_helper' => $id_helper,
			'id_help' => $id_help,
			'estimate_date_pick_up' => date("Y-m-d", strtotime(str_replace("/", "-", $estimate_date_pick_up))),
			'estimate_time_pick_up' => $estimate_time_pick_up,
			'estimate_date_arrive' => date("Y-m-d", strtotime(str_replace("/", "-", $estimate_date_arrive))),
			'estimate_time_arrive' => $estimate_time_arrive,
			'bid_cost' => $bid_cost
		);

		// print_r($dataAdd);

		$addBid = $this->Model_bid->add_bid($dataAdd);
		if($addBid){
			$this->session->set_flashdata("success", "Successfully");
		}else{
			$this->session->set_flashdata("error", "Failed to save");
		}
		redirect('help');
	}
}