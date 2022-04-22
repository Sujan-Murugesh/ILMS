<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Student_Model');
        $this->load->library('email');
    }


    public function signup(){
        $this->form_validation->set_rules('txt_registerfullname','name', 'required');
        $this->form_validation->set_rules('txt_registeraddress','address', 'trim|required');
        $this->form_validation->set_rules('txt_registerPhone','phone', 'required');
        $this->form_validation->set_rules('txt_registeranswer','Answer', 'trim|required');
        $this->form_validation->set_rules('txt_registerEmail',' Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('txt_registerPassword','Password', 'required');
        $this->form_validation->set_rules('txt_registerCPassword', 'Password Confirmation', 'trim|required|matches[txt_registerPassword]');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('state','Security','required');
        


        if($this->form_validation->run() == false){
            $this->load->view('register');

        }else{
            //create a unique user token
            $user_token = hash('ripemd160', $this->input->post('txt_registerEmail'));
            //call db
            $data = array(
                'full_name' => $this->input->post('txt_registerfullname'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('txt_registerEmail'),
                'phone_no' => $this->input->post('txt_registerPhone'),
                'address' => $this->input->post('txt_registeraddress'),
                'se_question' => $this->input->post('state'),
                'se_answer' => $this->input->post('txt_registeranswer'),
                'user_token' => $user_token,
                'password' => md5($this->input->post('txt_registerPassword'))
            );

            $rvalue = $this->Student_Model->insertUser($data);
            if($rvalue){
                $this->session->set_tempdata('msg', '<div class="alert alert alert-info text-center" style="width: 90%;">
                Successfully registered. Our administrator will confirm your registration with in 24 hours. </div>',5);
                $this->load->view('register');
            }
            else{
                $this->session->set_tempdata('msg', '<div class="alert alert-danger text-center" style="width: 90%;>
                Failed!! Please try again.</div>',5);
                $this->load->view('register');
            }
        }
    }


    

}