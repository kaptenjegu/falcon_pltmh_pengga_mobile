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
		//echo "Turbin";
	}

	
}
