<?php 
 class M_login extends CI_Model{
    function __construct(){
        parent::__construct();

    }
    public function login ($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('login')->row();

    }
}
?>