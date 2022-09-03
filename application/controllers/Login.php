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

}