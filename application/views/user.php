<style>
    .btn-reset{
        text-decoration: none;
        background-color: purple;
        color: white;
        border-radius: 5px;
        font-size: 12px;
        padding: 15%;
    }
</style>
<div style="width: 100%; height:auto;margin-left:0%;background-color: transparent;z-index: 1;position: absolute;">
    <div style="display: flex;justify-content: center;align-items: center;">
        <!-- Edit -->
        <form method="post" action="<?= base_url('akun/edit/') ?>">
        <div style="border-radius: 10px; width: 300px;height: 150px; top: 10px;z-index:2;position: absolute;background-image: linear-gradient( #1e85aa,#0a1e51);color: white;">
            <div style="width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;margin-top: 7px;">Edit Password</div>
            <?php $top = 20; ?>
            
                <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Username</div>
                <input type="text" style="width: 50%;position: absolute;margin-left:45%;background-color:gray;color:black;text-align: center;font-size: 13px;" value="<?= $_SESSION['username'] ?>" disabled>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 30 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Password</div>
                <input type="password" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;" name="pass" placeholder="Password" required>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 70 ?>px;">
                <button type="submit" style="width: 35%;height: 30px;position: absolute;margin-left:45%;background-color: #29a4da;color:white;text-align: center;font-size: 13px;border-radius: 10px;border: 1px solid white;">
                    Simpan
                </button>
            </div>
            
        </div>     
        </form>

        <!-- Tambah User -->
        <form method="post" action="<?= base_url('akun/add/') ?>">
        <div style="border-radius: 10px; width: 300px;height: 150px; top: 200px;z-index:2;position: absolute;background-image: linear-gradient( #6d6c6a,#1a1e26);color: white;">
            <div style="width: 100%;font-weight:bold;color:white;text-align:center;background-color:transparent;font-size:13px;margin-top: 7px;">Tambah User</div>
            <?php $top = 20; ?>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Username</div>
                <input type="text" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;" name="user" required>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 30 ?>px;">
                <div style="width: 40%;position: absolute;margin-left:5%;background-color:transparent;color:white;text-align: center;font-size: 13px;">Password</div>
                <input type="password" style="width: 50%;position: absolute;margin-left:45%;background-color:white;color:black;text-align: center;font-size: 13px;" name="pass" required>
            </div>
            <div style="width: 100%;font-weight:bold;margin-top: <?= $top + 70 ?>px;">
                <button type="submit" style="width: 35%;height: 30px;position: absolute;margin-left:45%;background-color: #fb8d00;color:white;text-align: center;font-size: 13px;border-radius: 10px;border: 1px solid white;">
                    Simpan
                </button>
            </div>
        </div>   
        </form>

        <!-- list user -->
        <table style="width:300px;border: 1px solid white;background-color: white;margin-top: 400px;font-size: 20px;">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Opsi</th>
            </tr>
            
            <tbody>
            <?php 
            $no = 1;
            foreach($users as $v){ 
                echo '<tr style="height:45px;"><td>' . $no . '</td><td>' . $v->username . '</td><td><a href="' . base_url('akun/reset/')  . $v->id_user . '" class="btn-reset">Reset</a></td></tr>';
                $no += 1;
            } 
            ?>
            </tbody>
        </table>

        <!-- logout -->
        <div style="width: 100%;font-weight:bold;margin-top: 800px;z-index:3;position: absolute;display: flex;justify-content: center;align-items: center;">
            <a href="<?= base_url('login/out') ?>" style="font-weight: bold; width: 50%;height: 30px;position: absolute;background-color: red;color:white;text-align: center;display: flex;justify-content: center;align-items: center; text-decoration: none; font-size: 13px;border-radius: 10px;border: 1px solid white;">
                Log Out
            </a>
        </div>

        <div style="width: 100%; height: 100px; font-weight:bold;margin-top: 900px;z-index:2;position: absolute;display: flex;justify-content: center;align-items: center;">
        </div>



	</div> 
</div>