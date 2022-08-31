<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_data extends CI_Controller {

	public function index()
	{
		$data['message'] = 'Gagal konek';
		$data['status'] = '0';
		echo json_encode($data);
	}
	public function saveData()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->input->post('api_key')==md5('Falcon@Banjarsari@' . date('d-m-Y')))
		{
			$n = $this->cek($this->input->post('pk_request'));
			if($n==0){
				$data = array(
					'id_data' => '',
					'pk_request' => $this->input->post('pk_request'),
					'req_data' => $this->input->post('req_data'),
					'status_data' => $this->input->post('status_data'),
					'po_type' => $this->input->post('po_type'),
					'tgl_create_data' => $this->input->post('tgl_create_data'),
					'tgl_deadline_data' => $this->input->post('tgl_deadline_data')
				);
				$this->db->insert('data_coswin', $data);
				$data['message'] = 'Insert Sukses';
			}else{
				$this->db->set('req_data', $this->input->post('req_data'));
				$this->db->set('status_data', $this->input->post('status_data'));
				$this->db->set('po_type', $this->input->post('po_type'));
				$this->db->set('tgl_create_data', $this->input->post('tgl_create_data'));
				$this->db->set('tgl_deadline_data', $this->input->post('tgl_deadline_data'));
				$this->db->where('pk_request', $this->input->post('pk_request'));
				$this->db->update('data_coswin'); 
				$data['message'] = 'Update Sukses';
			}
			$data['status'] = '1';
		}else{
			$data['message'] = "API Key Salah";
			$data['status'] = '0';
		}
		echo json_encode($data);
	}
	
	public function saveData_PO()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->input->post('api_key')==md5('Falcon@Banjarsari@' . date('d-m-Y')))
		{
			$n = $this->cek_po($this->input->post('pk_order_'));
			if($n==0){
				$data = array(
					'id_data' => '',
					'req_data' => $this->input->post('req_data'),
					'req_status_data' => $this->input->post('req_status_data'),
					'req_tgl_deadline_data' => $this->input->post('req_tgl_deadline_data'),
					'pk_order_' => $this->input->post('pk_order_'),
					'po_data' => $this->input->post('po_data'),
					'status_data' => $this->input->post('status_data'),
					'po_type' => $this->input->post('po_type'),
					'tgl_create_data' => $this->input->post('tgl_create_data'),
					'tgl_levering_data' => $this->input->post('tgl_levering_data')
				);
				$this->db->insert('data_coswin_po', $data);
				$data['message'] = 'Insert PO Sukses';
			}else{
				$this->db->set('req_data', $this->input->post('req_data'));
				$this->db->set('req_status_data', $this->input->post('req_status_data'));
				$this->db->set('req_tgl_deadline_data', $this->input->post('req_tgl_deadline_data'));
				$this->db->set('po_data', $this->input->post('po_data'));
				$this->db->set('status_data', $this->input->post('status_data'));
				$this->db->set('po_type', $this->input->post('po_type'));
				$this->db->set('tgl_create_data', $this->input->post('tgl_create_data'));
				$this->db->set('tgl_levering_data', $this->input->post('tgl_levering_data'));
				$this->db->where('pk_order_', $this->input->post('pk_order_'));
				$this->db->update('data_coswin_po'); 
				$data['message'] = 'Update PO Sukses';
			}
			$data['status'] = '1';
		}else{
			$data['message'] = "API Key Salah";
			$data['status'] = '0';
		}
		echo json_encode($data);
	}

	public function saveData_RC()
	{
		date_default_timezone_set('Asia/Jakarta');
		if($this->input->post('api_key')==md5('Falcon@Banjarsari@' . date('d-m-Y')))
		{
			$n = $this->cek_rc($this->input->post('pk_receipt'));
			if($n==0){
				$data = array(
					'id_data' => '',
					'pk_receipt' => $this->input->post('pk_receipt'),
					'rc_data' => $this->input->post('rc_data'),
					'po_data' => $this->input->post('po_data'),
					'status_data' => $this->input->post('status_data'),
					'tgl_create_data' => $this->input->post('tgl_create_data'),
					'tgl_receipt_data' => $this->input->post('tgl_receipt_data')
				);
				$this->db->insert('data_coswin_rc', $data);
				$data['message'] = 'Insert RC Sukses';
			}else{
				$this->db->set('rc_data', $this->input->post('rc_data'));
				$this->db->set('po_data', $this->input->post('po_data'));
				$this->db->set('status_data', $this->input->post('status_data'));
				$this->db->set('tgl_create_data', $this->input->post('tgl_create_data'));
				$this->db->set('tgl_receipt_data', $this->input->post('tgl_receipt_data'));
				$this->db->where('pk_receipt', $this->input->post('pk_receipt'));
				$this->db->update('data_coswin_rc'); 
				$data['message'] = 'Update RC Sukses';
			}
			$data['status'] = '1';
		}else{
			$data['message'] = "API Key Salah";
			$data['status'] = '0';
		}
		echo json_encode($data);
	}

	private function cek($id)
	{
		$this->db->where('pk_request', $id);
		$data = $this->db->get('data_coswin')->num_rows();
		return $data;
	}

	private function cek_po($id)
	{
		$this->db->where('pk_order_', $id);
		$data = $this->db->get('data_coswin_po')->num_rows();
		return $data;
	}

	private function cek_rc($id)
	{
		$this->db->where('pk_receipt', $id);
		$data = $this->db->get('data_coswin_rc')->num_rows();
		return $data;
	}
}
