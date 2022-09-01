<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Overview extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
	}
	
	public function index()
	{
		$data['page'] = 'overview';
		$this->load->view('header',$data);
		$this->load->view('overview',$data);
		$this->load->view('footer',$data);
	}
	public function ov_asp()
	{
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_ov_asp')->first_row();
		echo json_encode($data);
	}
	public function seq_start()
	{
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_seq_start')->first_row();
		echo json_encode($data);
	}
	public function seq_stop()
	{
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_seq_stop')->first_row();
		echo json_encode($data);
	}
	
}
