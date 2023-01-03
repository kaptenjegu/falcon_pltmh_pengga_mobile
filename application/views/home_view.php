<!--div style="width: 100%;text-align:center;font-weight: bold;font-size:40px;color: white;">
	<img src="<? //= base_url('/assets/images/header.png') ?>" style="width: 150px; height: auto;">
</div-->
<div style="width: 100%; height:600px;margin-left:0%;background-color: transparent;z-index: 1;position: absolute;">
    <div style="z-index: 3;position: absolute;width:100%;color: white;text-align:center;font-weight:bold;font-size: 15px;">
		Single Line Diagram
	</div>
	<div style="display: flex;justify-content: center;align-items: center;">
		<!-- single diagram -->
    	<img src="<?= base_url('/assets/images/single_diagram.png') ?>"
        	style="width: 300px; height: auto;z-index: 2;position: absolute;top: 15px;">

		<div id="feedback_distribusi"
        	style="margin-top:88px;margin-left:-70px;width: 40px;height:25px;background-color: red;z-index: 1;position: absolute;">
    	</div>

		<div id="open_feedback_cb"
        	style="margin-top:505px;margin-left:-81px;width: 20px;height:52px;background-color: red;z-index: 1;position: absolute;">
    	</div>

		<div id="on_feedback_exc"
			style="margin-top:665px;margin-left:255px;width: 20px;height:20px;background-color: red;z-index: 1;position: absolute;">
		</div>

		<div id="status_generator"
			style="margin-top:755px;margin-left:-73px;width: 15px;border-radius: 100%;height:18px;background-color: red;z-index: 1;position: absolute;">
		</div>

		<!-- Alarm -->
		<div id="status_alarm" style="display: none;">
    		<a href="#" style="text-decoration: none;color: white; ">!!! Alarm !!!
    		</a>
		</div>

		<!-- variabel data-->
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1000px;background-color: red;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Daya Aktif
			</div>
			<div id="active_power"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				### kW
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1050px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Tegangan
			</div>
			<div id="voltage"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1100px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Arus
			</div>
			<div id="current"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1150px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Frekuensi
			</div>
			<div id="frequency"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1200px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Cos φ
			</div>
			<div id="gen_faktor_daya"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1250px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Governor Position
			</div>
			<div id="governor_position"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1300px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Water Level
			</div>
			<div id="water_level"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1350px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Penstock Pressure
			</div>
			<div id="penstock_pressure"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1400px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				RPM Turbine
			</div>
			<div id="turbine_speed"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
		<div style="width: 300px; height: auto;z-index: 2;position: absolute;margin-top: 1450px;background-color: transparent;">
			<div
				style="width: 48%;height:30px;background-color: transparent;color:yellow;text-align:center;z-index: 1;position: absolute;">
				Gov. Oil Pressure
			</div>
			<div id="governor_oil"
				style="margin-left:50%;width: 50%;background-color: black;color:white;text-align:center;z-index: 2;position: absolute;">
				###
			</div>
		</div>
	</div> 

	
</div>
 