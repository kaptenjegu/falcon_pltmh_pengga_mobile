<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		//is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('header',$data);
		$this->load->view('home_view',$data);
		$this->load->view('footer',$data);
	}

	public function n_alarm()
	{
		$this->db->where('status_alarm', 1);
		$data = $this->db->get('pltmh_pengga_alarm_var')->num_rows();
		echo json_encode($data);
	}
	
}
