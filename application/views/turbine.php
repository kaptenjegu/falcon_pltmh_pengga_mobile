<div style="width: 100%; height:auto;margin-left:0%;background-color: transparent;z-index: 1;position: absolute;">
    <!--div style="z-index: 3;position: absolute;width:100%;color: white;text-align:center;font-weight:bold;font-size: 13px;">
		Monitoring Generator
	</div-->
	<div style="display: flex;justify-content: center;align-items: center;">
        <div style="border-radius: 10px; width: 300px;height: 280px; top: 10px;z-index:2;position: absolute;background-image:linear-gradient(#123f83, #15b575);color: white;">
            <div style="margin-top:15px;width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;">Parameter Turbin</div>
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

        <?php 
            $width = "300px"; 
            $left = "0px"; 
        ?>
        <!-- gate valve / MIV control -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 135px; top: 300px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    MIV
                </div>
                
                <div id="auto_status_gv" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_gv" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>

                <div id="open_feedback_gv" style="top:74px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:79px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Open Status
                </div>

                <div id="close_feedback_gv" style="top:91px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:96px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Close Status
                </div>
            </div>
        </div>
        <!-- END gate valve control -->

        <!-- Turbin Status -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 135px; top: 450px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Turbin Status
                </div>
                
                <div id="auto_status_tc" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_tc" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>

                <div id="on_feedback_tc" style="top:74px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:79px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    On Status
                </div>

                <div id="off_feedback_tc" style="top:91px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:96px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Off Status
                </div>
            </div>
        </div>
        <!-- Turbin Status -->

        <!-- GMode Status -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 100px; top: 600px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Gear Mode
                </div>
                
                <div id="auto_status_ggm" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_ggm" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>
            </div>
        </div>
        <!-- GMode Status -->

        <!-- Hydro Status -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 100px; top: 720px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Hydrolic Mode
                </div>
                
                <div id="auto_status_ghm" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_ghm" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>
            </div>
        </div>
        <!-- Hydro Status -->

        <!-- Exc -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 135px; top: 840px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Excitation
                </div>
                
                <div id="auto_status_exc" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_exc" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>

                <div id="on_feedback_exc" style="top:74px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:79px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    On Status
                </div>

                <div id="off_feedback_exc" style="top:91px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:96px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Off Status
                </div>
            </div>
        </div>
        <!-- EXC -->

        <!-- Syn -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 135px; top: 990px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Synchronizing
                </div>
                
                <div id="auto_status_syn" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_syn" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>

                <div id="on_feedback_syn" style="top:74px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:79px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    On Status
                </div>

                <div id="off_feedback_syn" style="top:91px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:96px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Off Status
                </div>
            </div>
        </div>
        <!-- Syn -->

        <!-- ACB -->
        <div style="border-radius: 10px; width: <?= $width ?>;height: 135px; top: 1150px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-image:linear-gradient(#1872ed, #adebff,#1872ed);color: white;">
            <div style="background-color: #E0FFFF; color: black; font-size: 12px; width: 90%;height: 80%; font-weight:bold;margin-top: 5%;margin-left: auto; margin-right: auto;">
                
                <div style="width: 100%;background-color: transparent;border: 1px black solid;text-align:center;">
                    Air Circuit Breaker(ACB)
                </div>
                
                <div id="auto_status_cb" style="top:40px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:45px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Auto Operation
                </div>

                <div id="manual_status_cb" style="top:57px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:62px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Manual Operation
                </div>

                <div id="open_feedback_cb" style="top:74px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:79px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Open Status
                </div>

                <div id="close_feedback_cb" style="top:91px;width: 10px;height: 10px;left: 60px; background-color: transparent;position: absolute;margin:5px;border: 1px black solid;">
                </div>
                <div style="top:96px;margin-left: 75px;text-align: left; width: 80%;background-color: transparent;position: absolute;">
                    Close Status
                </div>
            </div>
        </div>
        <!-- ACB -->

        <div style="border-radius: 10px; width: <?= $width ?>;height: 35px; top: 1280px; margin-left:<?= $left ?>;z-index:1;position: absolute;background-color: transparent;color: white;">
        </div>
	</div> 
    <br>
    <br>
	
</div>