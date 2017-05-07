<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatakun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('login_user');
	}
	public function index()
	{
		$this->template->load('static_login','buatakun');
	}
	public function insert(){
		$data = array(	
						'username'=> $this->input->post('username'),
						'Password'=> md5($this->input->post('password')),
						'email'=> $this->input->post('email'),
						'nomerhp'=> $this->input->post('nomerhp'),
						'jeniskelamin'=> $this->input->post('jeniskelamin'));
		
				$insert = $this->login_user->insertAkun('user',$data);
				if ($insert > 0){
				redirect(base_url('index.php/login'));
				}else{
					echo '</script> gagal di input </script>';
				}	
	}
}
