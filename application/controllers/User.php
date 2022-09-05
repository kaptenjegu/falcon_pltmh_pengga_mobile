<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		detection();
		is_logged_in();
	}
	
	public function index()
	{
		$data['page'] = 'user';
        $this->db->where('aktif', 1);
        $data['users'] = $this->db->get('pltmh_pengga_user')->result();
		$this->load->view('header',$data);
		$this->load->view('user',$data);
		$this->load->view('footer',$data);
	}
	public function add()
	{
        $this->db->trans_start();
		$data = array(
            'id_user' => '',
            'username' => $this->input->post('user'),
            'password' => $this->input->post('pass'),
            'role' => 1,
            'aktif' => 1
        );
        $this->db->insert('pltmh_pengga_user', $data);
        $this->db->trans_complete();
        redirect('user');
	}
	public function edit()
	{
        $this->db->trans_start();
		$id = $this->input->post('id_user');
		$p = $this->input->post('pass');        
        $this->db->set('password',$p);
        $this->db->where('id_user', $id);
        $this->db->update('pltmh_pengga_user');
        $this->db->trans_complete();
		redirect('user');
	}

	
}
