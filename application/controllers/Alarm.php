<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alarm extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        detection();
        //is_logged_in();
    }

    public function index()
    {
        $data['page'] = 'alarm';
        $this->load->view('header', $data);
        $this->load->view('alarm', $data);
        $this->load->view('footer', $data);
        //echo "Alarm";
    }
    public function data_out()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->where('status_alarm', 1);
        $data = $this->db->get('pltmh_pengga_alarm_var');

        $no = 1;
        if ($data->num_rows() > 0) {
            $result = '<table id="simple-table" style="border: 1px solid white;background-color: white;">
                        <tr>
                            <th>No</th>
                            <th>Alarm Name</th>
                            <th>Date & Time</th>
                        </tr>
                        
                        <tbody>';
            foreach ($data->result() as $v) {
                $result .= '<tr><td>' . $no . '</td><td>' . $v->nama_alarm . '</td><td>' . $v->tanggal_update . '</td></tr>';
                $no += 1;
            }
            $result .= '</tbody></table>';
        } else {
            $result = '<div style="background-color: green; color: white;width: 90%;">
                            <p>
                            <center><strong>
                                    <i class="ace-icon fa fa-check"></i>
                                    There is no Alarm
                                </strong></center>
                            </p>
                        </div>';
        }

        echo $result;
    }
}
