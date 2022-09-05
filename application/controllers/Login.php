<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
	}
	
	public function index()
	{
		$data['page'] = 'login';
		$this->load->view('login',$data);
	}

	public function cek()
	{
		$u = $this->input->post('user');
		$p = $this->input->post('pass');
		$this->db->where('username', $this->db->escape_str($u));
		$this->db->where('password', $this->db->escape_str($p));
		$this->db->where('aktif', 1);
		$this->db->limit(1); 
		$dt = $this->db->get('pltmh_pengga_user');
		
		if($dt->num_rows()==1){
			$data = $dt->first_row();
			
			$_SESSION['id_user'] = $data->id_user;
			$_SESSION['username'] = $data->username;
			$_SESSION['role'] = $data->role;
			
			redirect('home');
		}else{
			redirect('login');
		}
	}
	public function out()
	{
		session_destroy();
		redirect('login');
	}
}