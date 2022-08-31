<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
	}
	
	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('header',$data);
		$this->load->view('home_view',$data);
		$this->load->view('footer',$data);
	}

	
}
