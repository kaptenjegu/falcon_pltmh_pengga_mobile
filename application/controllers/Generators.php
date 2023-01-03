<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generators extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		//is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'generators';
		$this->load->view('header',$data);
		$this->load->view('generators',$data);
		$this->load->view('footer',$data);
		//echo "Generators";
	}
	
}
