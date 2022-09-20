<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'overview';
		$this->load->view('header',$data);
		$this->load->view('overview',$data);
		$this->load->view('footer',$data);
	}
	public function data_out()
	{
		$data = $this->db->query("SELECT * FROM pltmh_pengga_ov_asp, pltmh_pengga_seq_start,pltmh_pengga_seq_stop")->first_row();
		echo json_encode($data);
	}
	
}
