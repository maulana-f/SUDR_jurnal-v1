<?php 
    class M_Login extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function login($username, $password) {
            $this->db->where('login_username', $username);
            $this->db->where('login_password', $password); 
            return $this->db->get('login')->row();
        }
    }
?>