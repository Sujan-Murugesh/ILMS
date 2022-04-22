<?php 
    class Student_Model extends CI_Model{

        function __construct(){

            parent::__construct();
            $this->load->database();
            $this->load->library('session');
            $this->load->helper('form');
        }

        //insert buyers details to buyers table
        public function insertUser($data){
            return $this->db->insert('users',$data);
        }

        //login student==========================================================
        public function loginStudent($username, $password){
            //$this->db->where(array('username' = >$username, 'password' => $password));
            $query = $this->db->get_where('student', array('index_number' => $username, 'password' => $password,'status'=> 1));   //status sholud be 1
    
            if($query->num_rows() == 1){
    
                $userArr = array();
                foreach($query->result() as $row){
                    $userArr[0] = $row->index_number;
                    $userArr[1] = $row->name;
                    $userArr[2] = $row->user_token;
                }
                $userData = array(
                    'index_number' => $userArr[0],
                    'name' => $userArr[1],
                    'user_token' => $userArr[2],
                    'logged_in'=> TRUE
                );
                $this->session->set_userdata($userData);
    
                return $query->result();
            }else{
                return false;
            }
        }
        //=========================================================================
        //TO DELETE NEW STUDENT DATA
        public function delete_new_student_records($id){
            $this->db->where("user_token", $id);
            $this->db->delete("users");
            return true;
        }
        //=========================================================================

        //TO SELECT A STUDENT BY USERTOKEN
        public function get_userByToken($id){
            $this->db->where("user_token", $id);
            $query=$this->db->get("users");
            return $query->result();
        }

        //=========================================================================
        //TO AUTO GENERATING STUDENT ID
        public function auto_generate() 
        {
            $tgl = date("Y"); 

            $this->db->select('RIGHT(student.index_number,3) as uid', FALSE);
            $this->db->order_by('id', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('student');
            if($query->num_rows() <> 0) {
                $data = $query->row();
                $uid = intval($data->uid) + 1;
            }
            else {
                $uid = 1;
            }

            $uidmax = date('Y', strtotime($tgl)).'/'. str_pad($uid, 3, 0, STR_PAD_LEFT); 
            $studentid = "EI/". $uidmax;

            return $studentid;
        }
    }

?>