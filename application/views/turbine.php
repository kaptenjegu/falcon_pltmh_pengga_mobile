<div style="width: 100%; height:auto;margin-left:0%;background-color: transparent;z-index: 1;position: absolute;">
    <!--div style="z-index: 3;position: absolute;width:100%;color: white;text-align:center;font-weight:bold;font-size: 13px;">
		Monitoring Generator
	</div-->
	<div style="display: flex;justify-content: center;align-items: center;">
        <div style="border-radius: 10px; width: 300px;height: 280px; top: 100px;z-index:2;position: absolute;background-image:linear-gradient(#123f83, #15b575);color: white;">
            <div style="width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;">Data Turbin</div>
            <?php $top = 20; ?>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">RPM Turbine</div>
                <div id="turbine_speed" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 30 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Water Level</div>
                <div id="water_level" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 60 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Inlet Pressure</div>
                <div id="inlet_pressure" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 90 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Penstock Pressure</div>
                <div id="penstock_pressure" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 120 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Governor Position</div>
                <div id="governor_position" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 150 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Excitation</div>
                <div id="volt_exc" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 180 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Gov. Oil Pressure</div>
                <div id="governor_oil" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
        </div>

     
	</div> 
    <br>
    <br>
	
</div>