<div style="width: 100%; height:800px;margin-left:0%;background-color: transparent;z-index: 1;position: absolute;">
    <!--div style="z-index: 3;position: absolute;width:100%;color: white;text-align:center;font-weight:bold;font-size: 13px;">
		Monitoring Generator
	</div-->
	<div style="display: flex;justify-content: center;align-items: center;">
        <div style="border-radius: 10px; width: 300px;height: 380px; top: 10px;z-index:2;position: absolute;background-image:linear-gradient(#123f83, #15b575);color: white;">
            <div style="margin-top:15px;width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;">Generator</div>
            <?php $top = 20; ?>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan R-S</div>
                <div id="gen_vrs" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 30 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan S-T</div>
                <div id="gen_vst" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 60 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan T-R</div>
                <div id="gen_vtr" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 90 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus R</div>
                <div id="gen_ir" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 120 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus S</div>
                <div id="gen_is" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 150 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus T</div>
                <div id="gen_it" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 180 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Aktif</div>
                <div id="gen_daya_aktif" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 210 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Reaktif</div>
                <div id="gen_daya_reaktif" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 240 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Semu</div>
                <div id="gen_daya_semu" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 270 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Frekuensi</div>
                <div id="gen_frequency" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 300 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Cos φ</div>
                <div id="gen_faktor_daya" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            
        </div>

     <!-- LINE -->
        <div style="border-radius: 10px; width: 300px;height: 380px; top: 400px;z-index:2;position: absolute;background-image:linear-gradient(#123f83, #15b575);color: white;">
            <div style="margin-top:15px;width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;">Line</div>
            <?php $top = 20; ?>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan R-S</div>
                <div id="line_vrs" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 30 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan S-T</div>
                <div id="line_vst" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 60 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Tegangan T-R</div>
                <div id="line_vtr" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 90 ?>px;">
            <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus R</div>
                <div id="line_ir" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 120 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus S</div>
                <div id="line_is" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 150 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Arus T</div>
                <div id="line_it" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 180 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Aktif</div>
                <div id="line_daya_aktif" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 210 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Reaktif</div>
                <div id="line_daya_reaktif" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 240 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Daya Semu</div>
                <div id="line_daya_semu" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 270 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Frekuensi</div>
                <div id="line_frequency" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 300 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Cos φ</div>
                <div id="line_faktor_daya" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;">#####</div>
            </div>
        </div>
	</div> 
    <br>
    <br>
	
</div>