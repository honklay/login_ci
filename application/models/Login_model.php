<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_user($username,$password){
        /*$DB2 = $this->load->database('default2', TRUE);*/
		/*$query=$DB2->query("SELECT * FROM user_data WHERE username='$username' AND pass=MD5('$password') LIMIT 1");*/
		
		$query=$this->db->query("SELECT * FROM user_data WHERE username='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_mahasiswa($username,$password){
        $query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}