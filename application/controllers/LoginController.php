<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Student_Model');
        $this->load->model('Admin_Model');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    //for the student login===================================================================
    public function studentlogin(){

        $this->form_validation->set_rules('txt_studentusername','Username', 'trim|required');
        $this->form_validation->set_rules('txt_studentPassword','Password', 'trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{

            $username = $this->input->post('txt_studentusername');
            $password = md5($this->input->post('txt_studentPassword'));

            if($this->Student_Model->loginStudent($username, $password)){

                $userInfo = $this->Student_Model->loginStudent($username, $password);
                $this->session->set_tempdata('login_msg', '<div class="alert alert-success text-center">Successfully logged in</div>',3);
                $this->session->set_flashdata('logstatus',"mode2");
                $this->load->view('student/student_dashboard');

            }else{
                $this->session->set_tempdata('login_msg', '<div class="alert alert-danger text-center">Login Failed!! Please try again.</div>',3);
                $this->load->view('login');

            }
        }
    }
    //end of the student login===================================================================


    //for the Admin login===================================================================
    public function adminlogin(){

        $this->form_validation->set_rules('txt_adminEmail','Username', 'trim|required');
        $this->form_validation->set_rules('txt_adminPassword','Password', 'trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('login');
        }else{

            $username = $this->input->post('txt_adminEmail');
            $password = md5($this->input->post('txt_adminPassword'));

            if($this->Admin_Model->loginUser($username, $password)){

                $userInfo = $this->Admin_Model->loginUser($username, $password);
                $this->session->set_tempdata('login_msg', '<div class="alert alert-success text-center">Successfully logged in</div>',3);
                $this->session->set_flashdata('logstatus',"mode1");
                //redirect('Welcome/load_adminDash');
                $result['data']=$this->Admin_Model->displayrecords();
                $this->load->view('admindashboard',$result);

            }else{
                $this->session->set_tempdata('login_msg', '<div class="alert alert-danger text-center">Login Failed!! Please try again.</div>',3);
                $this->load->view('login');
            }
        }
    }
     //end of the Admin login===================================================================
    public function logout() {
		
		if($this->session->has_userdata('id')){
            //$this->session->unset_userdata('user_data');
            $this->session->sess_destroy();
            //unset($_SESSION['user_data']);
            echo $_SESSION['id'];
            redirect('/','refresh');
        }
	}

    //to retrive all  data from db
		public function dispdata(){
			$result['data']=$this->Admin_Model->displayrecords();
			$this->load->view('admindashboard',$result);
		}

     //============================================================
    //delete unapprowed students
    //to delete data from selected student
		public function deletenewuser_data(){
			$id=$this->uri->segment(3);
			$response=$this->Student_Model->delete_new_student_records($id);
            if($response==true){
                redirect('index.php/LoginController/dispdata');
            }
            else{
                //to display unable to delete...
            }	
		}
    //============================================================

    //to get specipic user to allowing
    public function allowuser(){
        $id=$this->uri->segment(3);
        $this->session->set_flashdata('student_token',$id);
        $result['newuserdata']=$this->Student_Model->get_userByToken($id);
        $result['autogen'] = $this->Student_Model->auto_generate();
        $this->load->model('Admin_Model');
		$result['batches'] = $this->Admin_Model->getAllBatches();
        $this->load->view('admin/student_management',$result);
    }
    //============================================================
}