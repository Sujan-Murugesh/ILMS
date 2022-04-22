<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->flashdata('logstatus') == "mode1"){
			$result['data']=$this->Admin_Model->displayrecords();
       		$this->load->view('admindashboard',$result);
		}
		else if($this->session->flashdata('logstatus') == "mode2"){
			$this->load->view('student_dashboard');
		}
		else{				
			$this->load->view('welcome_message');
		}	
		
	}

	public function load_register(){
		if($this->session->flashdata('logstatus') == "mode1"){
			$result['data']=$this->Admin_Model->displayrecords();
        	$this->load->view('admindashboard',$result);
		}
		else if($this->session->flashdata('logstatus') == "mode2"){
			$this->load->view('student_dashboard');
		}
		else{				
			$this->load->view('register');
		}	
		
	}

	public function load_login(){
		$this->load->view('login');
	}

	public function load_adminDash(){
		$this->load->model('Admin_Model');
		$result['data']=$this->Admin_Model->displayrecords();
        $this->load->view('admindashboard',$result);
	}

	public function studentDash(){
		$this->load->view('student_dashboard');
	}

	public function studentmngt(){
		$this->load->model('Student_Model');
		$data['autogen'] = $this->Student_Model->auto_generate();
		$this->load->model('Admin_Model');
		$data['batches'] = $this->Admin_Model->getAllBatches();
		$this->load->view('admin/student_management',$data);
	}
}
