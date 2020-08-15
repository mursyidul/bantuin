<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
		parent::__construct();
        checkSessionUser();
        $loginstatus = $this->session->userdata('role');
         if($loginstatus!="SUPERADMIN"){
            redirect('my404');
        }
        $this->load->library('pdf');
        $this->load->model("Model_user");
    }

    public function index(){
		// $data["user"] = $this->Model_user->getUser();
        $data["listuse"] = $this->Model_user->user_list();
		$this->template->load("template", "user/data-user", $data);
    }

    public function get_data_user($iduser = null){
        $data = $this->Model_user->getUser($iduser);
        echo json_encode(array("status" => "success", "data" => $data));
    }

    public function addUSer(){
        $user_name = $this->input->post("user_name");
		$user_nud = $this->input->post("user_nud");
        $position = $this->input->post("position");
		$department = $this->input->post("department");
        $leader_name = $this->input->post("leader_name");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$role = $this->input->post("role");
		$status = $this->input->post("status");
        $report_to_pe = $this->input->post("report_to_pe");

		$dataUser = array(
			"user_name" => $user_name,
			"user_nud" => $user_nud,
            "position" => $position,
			"department" => $department,
            "leader_name" => $leader_name,
			"email" => $email,
			"password" => md5($password),
			"role" => $role,
			"status" => $status,
            "report_to_pe" => $report_to_pe
		);

		$check_when_double_email = $this->Model_user->check_existing_user("email", $email);
        $check_when_double_username = $this->Model_user->check_existing_user("user_name", $user_name);
        if($check_when_double_email){
            echo json_encode(array("status" => "error", "message" => "The email already exists, please use another email."));
        } else if($check_when_double_username){
            echo json_encode(array("status" => "error", "message" => "The username already exists, please use another username"));
        } else {
            $tambahUser = $this->Model_user->tambahUser($dataUser);
            if ($tambahUser) {
                echo json_encode(array("status" => "success", "message" => "Successfully add new user", "data" => $dataUser));
            } else {
                echo json_encode(array("status" => "error", "message" => "Failed, user can't be saved.!!"));
            }
		}
		
	}

	public function editUser(){
		$id_user = $this->input->post("id_user");
		$user_name = $this->input->post("user_name");
        $user_nud = $this->input->post("user_nud");
        $position = $this->input->post("position");
        $department = $this->input->post("department");
        $leader_name = $this->input->post("leader_name");
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        $role = $this->input->post("role");
        $status = $this->input->post("status");
        $report_to_pe = $this->input->post("report_to_pe");

		$editdataUser = array(
            "user_name" => $user_name,
            "user_nud" => $user_nud,
            "position" => $position,
            "department" => $department,
            "leader_name" => $leader_name,
            "email" => $email,
            "password" => md5($password),
            "role" => $role,
            "status" => $status,
            "report_to_pe" => $report_to_pe
		);

		if($password != ""){
			$editdataUser["password"] = md5($password);
		}

		$update = $this->Model_user->updateUser($editdataUser, $id_user);
		if ($update) {
			echo json_encode(array("status" => "success", "message" => "User successfully changed", "data" => $editdataUser));
		} else {
			echo json_encode(array("status" => "error", "message" => "Failed, user can't be changed.!!"));
		}
	}

	public function action_hapus($idUser){
		$hapusUser = $this->Model_user->hapusUser($idUser);
		if($hapusUser){
			$this->session->set_flashdata("success", "Successfully delete user");
		} else {
			$this->session->set_flashdata("error", "Failed, user can't be deleted.!!");
		}

		redirect("user");
	}

	public function delete_data_user(){
        $id_user = $this->input->post("id_user");
        $delete = $this->Model_user->deleteUser($id_user);
		if($delete){
			echo json_encode(array("status" => "success", "data" => $id_user, "message" => "Successfully delete user"));
		} else {
			echo json_encode(array("status" => "error", "message" => "Failed, user can't be deleted.!!"));
		}
    }

    function cetakPdf(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'MAN KEDIRI 1',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR USER KUISIONER MAN KEDIRI 1',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(20,6,'No Induk',1,0);
        $pdf->Cell(30,6,'Nama Lengkap',1,0);
        $pdf->Cell(27,6,'Nama User',1,0);
        $pdf->Cell(40,6,'Email',1,0);
        $pdf->Cell(30,6,'Role',1,0);
        $pdf->Cell(35,6,'Status',1,1);
        $pdf->SetFont('Arial','',10);
        $user = $this->db->get('tbl_user')->result();
        $i=1;
        foreach ($user as $row){
        	$pdf->Cell(10,6, $i,1,0);
            $pdf->Cell(20,6,$row->no_induk,1,0);
            $pdf->Cell(30,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->nama_user,1,0);
            $pdf->Cell(40,6,$row->email,1,0);
            $pdf->Cell(30,6,$row->role,1,0);
            $pdf->Cell(35,6,$row->status,1,1);
            $i++;
        }
        $pdf->Output();
    }
}
?>