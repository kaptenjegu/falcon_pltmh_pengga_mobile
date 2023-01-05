<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//error_reporting(0);
class Api_client extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        try {
            $data = json_decode($this->input->post('data_json'));
            //echo $data->auto_status_ggm;

            //MIV / Gate Valve
            $this->db->set('permit_open_gv', $data->permit_open_gv);
            $this->db->set('permit_close_gv', $data->permit_close_gv);
            $this->db->set('remote_indication_gv', $data->remote_indication_gv);
            $this->db->set('auto_status_gv', $data->auto_status_gv);
            $this->db->set('manual_status_gv', $data->manual_status_gv);
            $this->db->set('open_feedback_gv', $data->open_feedback_gv);
            $this->db->set('close_feedback_gv', $data->close_feedback_gv);
            $this->db->set('trip_indication_gv', $data->trip_indication_gv);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_gate_valve');
            //echo 'Update MIV Success';

            //Gov Gear Mode
            $this->db->set('permit_operation_ggm', $data->permit_operation_ggm);
            $this->db->set('remote_indication_ggm', $data->remote_indication_ggm);
            $this->db->set('auto_status_ggm', $data->auto_status_ggm);
            $this->db->set('manual_status_ggm', $data->manual_status_ggm);
            $this->db->set('fault_indication_ggm', $data->fault_indication_ggm);
            $this->db->set('underspeed_ggm', $data->underspeed_ggm);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_ggear_mode');
            //echo 'Update GGM Success';

            //Gov Hyd Mode
            $this->db->set('permit_operation_ghm', $data->permit_operation_ghm);
            $this->db->set('remote_indication_ghm', $data->remote_indication_ghm);
            $this->db->set('auto_status_ghm', $data->auto_status_ghm);
            $this->db->set('manual_status_ghm', $data->manual_status_ghm);
            $this->db->set('fault_indication_ghm', $data->fault_indication_ghm);
            $this->db->set('underspeed_ghm', $data->underspeed_ghm);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_ghyd_mode');
            //echo 'Update GHM Success';

            //Excitation
            $this->db->set('permit_operation_exc', $data->permit_operation_exc);
            $this->db->set('remote_indication_exc', $data->remote_indication_exc);
            $this->db->set('auto_status_exc', $data->auto_status_exc);
            $this->db->set('manual_status_exc', $data->manual_status_exc);
            $this->db->set('on_feedback_exc', $data->on_feedback_exc);
            $this->db->set('off_feedback_exc', $data->off_feedback_exc);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_excitation');
            //echo 'Update Exc Success';

            //Sync
            $this->db->set('permit_operation_syn', $data->permit_operation_syn);
            $this->db->set('remote_indication_syn', $data->remote_indication_syn);
            $this->db->set('auto_status_syn', $data->auto_status_syn);
            $this->db->set('manual_status_syn', $data->manual_status_syn);
            $this->db->set('on_feedback_syn', $data->on_feedback_syn);
            $this->db->set('off_feedback_syn', $data->off_feedback_syn);
            $this->db->set('ok_syn', $data->ok_syn);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_syn');
            //echo 'Update Syn Success';

            //CB
            $this->db->set('permit_operation_cb', $data->permit_operation_cb);
            $this->db->set('remote_indication_cb', $data->remote_indication_cb);
            $this->db->set('auto_status_cb', $data->auto_status_cb);
            $this->db->set('manual_status_cb', $data->manual_status_cb);
            $this->db->set('open_feedback_cb', $data->open_feedback_cb);
            $this->db->set('close_feedback_cb', $data->close_feedback_cb);
            $this->db->set('trip_indication_cb', $data->trip_indication_cb);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_cb');
            echo 'Update VAR Success';

        } catch (\Throwable $th) {
            echo 'Error VAR';
        }
    }

    public function var2()
    {
        try {
            $data = json_decode($this->input->post('data_json'));
            
            //ASP
            $this->db->set('prm1', $data->prm1);
            $this->db->set('prm2', $data->prm2);
            $this->db->set('prm3', $data->prm3);
            $this->db->set('prm4', $data->prm4);
            $this->db->set('prm5', $data->prm5);
            $this->db->set('prm6', $data->prm6);
            $this->db->set('prm7', $data->prm7);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_ov_asp');

            //Seq Start 
            $this->db->set('sq_start1', $data->sq_start1);
            $this->db->set('sq_start2', $data->sq_start2);
            $this->db->set('sq_start3', $data->sq_start3);
            $this->db->set('sq_start4', $data->sq_start4);
            $this->db->set('sq_start5', $data->sq_start5);
            $this->db->set('sq_start6', $data->sq_start6);
            $this->db->set('sq_start7', $data->sq_start7);
            $this->db->set('sq_start8', $data->sq_start8);
            $this->db->set('sq_start9', $data->sq_start9);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_seq_start');

            //Seq Stop
            $this->db->set('sq_stop1', $data->sq_stop1);
            $this->db->set('sq_stop2', $data->sq_stop2);
            $this->db->set('sq_stop3', $data->sq_stop3);
            $this->db->set('sq_stop4', $data->sq_stop4);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_seq_stop');


            echo 'Update VAR2 Success';

        } catch (\Throwable $th) {
            echo 'Error VAR2';
        }
    }

    public function val()
    {
        try {
            $data = json_decode($this->input->post('data_json'));
            
            //Generator
            //$this->db->set('non_drive', $data->non_drive);
            //$this->db->set('drive', $data->drive);
            $this->db->set('active_power', $data->active_power);
            $this->db->set('voltage', $data->voltage);
            $this->db->set('current', $data->current);
            $this->db->set('frequency', $data->frequency);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_generator_backup');
            //echo 'Update Generator Success';

            //Turbine
            //$this->db->set('thrust_bearing', $data->thrust_bearing);
            //$this->db->set('second_bearing', $data->second_bearing);
            $this->db->set('turbine_speed', $data->turbine_speed);
            $this->db->set('inlet_pressure', $data->inlet_pressure);
            $this->db->set('water_level', $data->water_level);
            $this->db->set('governor_position', $data->governor_position);
            $this->db->where('id', 1);
            $this->db->update('pltmh_pengga_turbine');
            echo 'Update VAL Success';

        } catch (\Throwable $th) {
            echo 'Error VAL';
        }
    }

    public function alarm()
    {
        try {
            $data = json_decode($this->input->post('data_json'));
            //$data = $this->input->post('data_json');
            
            //Alarm
            foreach($data as $v){
                $this->db->set('status_alarm', $v->status_alarm);
                $this->db->where('id_alarm', $v->id_alarm);
                $this->db->update('pltmh_pengga_alarm_var');
                //echo 'Update Alarm Success' . $v->id_alarm;
            }          
            echo 'Update Alarm Success';
        } catch (\Throwable $th) {
            echo 'Error Alarm';
        }
    }

    public function generators_data()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_generator_backup')->first_row();
		echo json_encode($data);		
	}

    public function turbine_data()
	{
		date_default_timezone_set('Asia/Jakarta');
		$this->db->where('id', 1);
		$data = $this->db->get('pltmh_pengga_turbine')->first_row();
		echo json_encode($data);		
	}
	
	public function turbine_var()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->db->query("SELECT * FROM pltmh_pengga_gate_valve, pltmh_pengga_ggear_mode, pltmh_pengga_ghyd_mode")->first_row();
		//$data = $this->db->query("SELECT * FROM pltmh_pengga_excitation, pltmh_pengga_syn, pltmh_pengga_cb")->first_row();
		echo json_encode($data);			
	}

	public function generators_var()
	{
		date_default_timezone_set('Asia/Jakarta');
		//$data = $this->db->query("SELECT * FROM pltmh_pengga_gate_valve, pltmh_pengga_ggear_mode, pltmh_pengga_ghyd_mode")->first_row();
		$data = $this->db->query("SELECT * FROM pltmh_pengga_excitation, pltmh_pengga_syn, pltmh_pengga_cb")->first_row();
		echo json_encode($data);			
	}

    public function ov_data()
	{
		//$data = $this->db->query("SELECT * FROM pltmh_pengga_ov_asp, pltmh_pengga_seq_start,pltmh_pengga_seq_stop")->first_row();
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->db->query("SELECT * FROM pltmh_pengga_turbine, pltmh_pengga_generator,pltmh_pengga_generator_backup, pltmh_pengga_line, pltmh_pengga_pid, pltmh_pengga_excitation, pltmh_pengga_cb,pltmh_pengga_gate_valve, pltmh_pengga_ggear_mode, pltmh_pengga_ghyd_mode,  pltmh_pengga_syn, pltmh_pengga_turbine_control")->first_row();
		echo json_encode($data);	
	}

    public function dashboard()
	{
		$data = $this->db->query("SELECT (SELECT count(*) from pltmh_pengga_alarm_var where status_alarm=1) as n_alarm, (SELECT turbine_speed FROM pltmh_pengga_turbine limit 1) as turbin, (SELECT open_feedback_cb FROM pltmh_pengga_cb) as cb")->first_row();
		echo json_encode($data);
	}
}
