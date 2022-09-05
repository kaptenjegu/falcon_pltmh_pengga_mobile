<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generators extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'generators';
		$this->load->view('header',$data);
		$this->load->view('generators',$data);
		$this->load->view('footer',$data);
	}
	public function data_out()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_generator')->first_row();
		echo json_encode($data);		
	}
	public function excitation()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_excitation')->first_row();
		echo json_encode($data);		
	}
	public function syn()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_syn')->first_row();
		echo json_encode($data);		
	}
	public function cb()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_cb')->first_row();
		echo json_encode($data);		
	}
	public function trend()
	{
		$data['js'] = base_url('assets/js/generator.js');
		$data['page'] = 'gtrend';
		$data['header'] = 'Generator Trend';
		$this->load->view('header', $data);
		$this->load->view('trend', $data);
		$this->load->view('footer');
	}
}
