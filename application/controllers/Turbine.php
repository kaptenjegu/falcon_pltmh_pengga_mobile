<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Turbine extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'turbine';
		$this->load->view('header',$data);
		$this->load->view('turbine',$data);
		$this->load->view('footer',$data);
	}

	public function data_out()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_turbine')->first_row();
		echo json_encode($data);		
	}
	
	public function var_out()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->db->query("SELECT * FROM pltmh_pengga_gate_valve, pltmh_pengga_ggear_mode, pltmh_pengga_ghyd_mode")->first_row();
		//$data = $this->db->query("SELECT * FROM pltmh_pengga_excitation, pltmh_pengga_syn, pltmh_pengga_cb")->first_row();
		echo json_encode($data);			
	}
}
