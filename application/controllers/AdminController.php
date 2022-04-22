<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Admin_Model');
        $this->load->model('Student_Model');
        $this->load->library('email');
    }

    //=======================================================
    //TO CREATE STUDENT ACCOUNTS
    public function createuser(){
        $this->form_validation->set_rules('txt_stno','student id', 'required');
        $this->form_validation->set_rules('txt_stname','name', 'required');
        $this->form_validation->set_rules('txt_stpwd','Password', 'required');
        $this->form_validation->set_rules('batch','batch','required');
        
        if($this->session->flashdata('student_token') == NULL){
            $this->session->set_tempdata('msg', '<div class="alert alert-danger text-center">Please select a student from recent table  and try again.</div>',3);
            $result['autogen'] = $this->Student_Model->auto_generate();
            $result['batches'] = $this->Admin_Model->getAllBatches();
            $this->load->view('admin/student_management',$result);
        }
        else if($this->form_validation->run() == false){
            $this->load->view('admin/student_management');
        }else{
            //create a unique user token
            $user_token = $this->session->flashdata('student_token');

            //call db
            $data = array(
                'index_number' => $this->input->post('txt_stno'),
                'name' => $this->input->post('txt_stname'),
                'batch' => $this->input->post('batch'),
                'user_token' => $user_token,
                'password' => md5($this->input->post('txt_stpwd'))
            );

            $rvalue = $this->Admin_Model->createnewstAccount($data);
            if($rvalue){
                $this->Admin_Model->updateStudentStatus($user_token);
                $this->session->set_tempdata('msg', '<div class="alert alert alert-info text-center" style="width: 90%;">
                Successfully created Student Account.</div>',5);
                $result['autogen'] = $this->Student_Model->auto_generate();
                $result['batches'] = $this->Admin_Model->getAllBatches();
                $this->load->view('admin/student_management',$result);
            }
            else{
                $this->session->set_tempdata('msg', '<div class="alert alert-danger text-center" style="width: 90%;>
                Failed!! Please try again.</div>',5);
                $result['autogen'] = $this->Student_Model->auto_generate();
                $result['batches'] = $this->Admin_Model->getAllBatches();
                $this->load->view('admin/student_management',$result);
            }
        }
    }
    //=======================================================

    

   
}