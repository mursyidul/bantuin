<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Askhelp extends CI_Controller {
	public function __construct(){
		parent::__construct();
        checkSessionUser();
		$this->load->model("Model_askhelp");
	}

	public function index(){
        // print_r($data);
        $data['village'] = $this->Model_askhelp->getVillage();
        $data['ask_list'] = $this->Model_askhelp->getAskhelp();
		$this->template->load("template", "askhelp/data-askhelp", $data);
	}

	public function addAskhelp(){
		$id_owner = $this->input->post('id_owner');
		$id_village_from = $this->input->post('id_village_from');
		$address_detail_from = $this->input->post('address_detail_from');
		$sender_name = $this->input->post('sender_name');
		$sender_phone = $this->input->post('sender_phone');
		$id_village_to = $this->input->post('id_village_to');
		$address_detail_to = $this->input->post('address_detail_to');
		$receiver_name = $this->input->post('receiver_name');
		$receiver_phone = $this->input->post('receiver_phone');
		$information = $this->input->post('information');
		$date_needed = $this->input->post('date_needed');
		$time_needed = $this->input->post('time_needed');

		$dataAdd = array(
			'id_owner' => $id_owner,
			'id_village_from' => $id_village_from,
			'address_detail_from' => $address_detail_from,
			'sender_name' => $sender_name,
			'sender_phone' => $sender_phone,
			'id_village_to' => $id_village_to,
			'address_detail_to' => $address_detail_to,
			'receiver_name' => $receiver_name,
			'receiver_phone' => $receiver_phone,
			'information' => $information,
			'date_needed' => date("Y-m-d", strtotime(str_replace("/", "-", $date_needed))),
			'time_needed' => $time_needed
		);

		$addpost = $this->Model_askhelp->add_ask($dataAdd);
		if($addpost){
			$this->session->set_flashdata("success", "Successfully add new post");
		}else{
			$this->session->set_flashdata("error", "Failed to save");
		}
		redirect('askhelp');
	}

	public function editAskhelp($idHelp){
		$id_owner = $this->input->post('id_owner');
		$id_village_from = $this->input->post('id_village_from');
		$address_detail_from = $this->input->post('address_detail_from');
		$sender_name = $this->input->post('sender_name');
		$sender_phone = $this->input->post('sender_phone');
		$id_village_to = $this->input->post('id_village_to');
		$address_detail_to = $this->input->post('address_detail_to');
		$receiver_name = $this->input->post('receiver_name');
		$receiver_phone = $this->input->post('receiver_phone');
		$information = $this->input->post('information');
		$date_needed = $this->input->post('date_needed');
		$time_needed = $this->input->post('time_needed');

		$dataEdit = array(
			'id_owner' => $id_owner,
			'id_village_from' => $id_village_from,
			'address_detail_from' => $address_detail_from,
			'sender_name' => $sender_name,
			'sender_phone' => $sender_phone,
			'id_village_to' => $id_village_to,
			'address_detail_to' => $address_detail_to,
			'receiver_name' => $receiver_name,
			'receiver_phone' => $receiver_phone,
			'information' => $information,
			'date_needed' => date("Y-m-d", strtotime(str_replace("/", "-", $date_needed))),
			'time_needed' => $time_needed
		);
		$editPost = $this->Model_askhelp->edit_ask($dataEdit, $idHelp);
		if($editPost){
			$this->session->set_flashdata("success", "Successfully edit post");
		}else{
			$this->session->set_flashdata("error", "Failed to edit");
		}
		redirect('askhelp');

	}

	public function biddedPost(){
		$id = $this->input->get("id");
		$data["ask"] = $this->Model_askhelp->getAskhelp($id);
		$this->template->load("template", "askhelp/bidded-help", $data);
	}
}