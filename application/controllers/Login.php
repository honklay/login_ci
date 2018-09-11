<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
		if($this->session->userdata('masuk') != TRUE){
			$this->load->view('v_login');
		}
		else{
			redirect('page');			
		}
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_user=$this->login_model->auth_user($username,$password);
 
        if($cek_user->num_rows() > 0){ //jika login sebagai dosen
                $data=$cek_user->row_array();												
                $this->session->set_userdata('masuk',TRUE);
				
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('page');
 
                 }elseif($data['level']=='2') { //akses dosen
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('page');
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','3');
                    $this->session->set_userdata('ses_nama',$data['username']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai mahasiswa
                      // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}