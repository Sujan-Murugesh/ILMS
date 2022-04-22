<?php 
    class Admin_Model extends CI_Model{

        function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->library('session');
            $this->load->helper('form');
        }

        //insert admin details to admin table
        public function insertAdmin($data){
            return $this->db->insert('admin',$data);
        }

        //=================================================
        //insert student
        public function createnewstAccount($data){
            return $this->db->insert('student',$data);
        }
        //=================================================

        //login student==========================================================
        public function loginUser($username, $password){
            //$this->db->where(array('username' = >$username, 'password' => $password));
            $query = $this->db->get_where('admin', array('email' => $username, 'password' => $password,'status'=> 1));   //status sholud be 1
    
            if($query->num_rows() == 1){
                
                $userArr = array();
                foreach($query->result() as $row){
                    $userArr[0] = $row->id;
                    $userArr[1] = $row->name;
                    $userArr[2] = $row->email;
                }
                $userData = array(
                    'id' => $userArr[0],
                    'name' => $userArr[1],
                    'email' => $userArr[2],
                    'logged_in'=> TRUE
                );
                $this->session->set_userdata($userData);
                return $query->result();
            }else{
                return false;
            }
        }
        //=========================================================================
        //TO DISPLAY NEW USER DATA TO THE DASHBOARD 
        public function displayrecords(){
            $st = 0;
			$query=$this->db->query("select * from users where status = $st");
			return $query->result();
		}

        //=========================================================================
        //TO GET ALL BATCHES IN DB
        public function getAllBatches()
        {
            $query = $this->db->query("select batch_name FROM batch");
            return $query->result();
        }
        //=========================================================================
        //TO change STUDENTS status true
        public function updateStudentStatus($user_token){
            $data = [
                'status' => 1,
            ];
            $this->db->where('user_token', $user_token);
            $this->db->update('users', $data);
        }

       
    }

?>