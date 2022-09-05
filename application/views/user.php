<div class="col-xs-12 col-sm-12">
    <div class="widget-box">
        <div class="widget-header">
            <h4 class="widget-title">Edit Password</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <form method="post" action="<?= base_url('user/edit/') ?>">
                    <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>">
                <div>
                    <label for="form-user">Username</label>
                    <input type="text" class="form-control" id="form-user" placeholder="Username" value="<?= $_SESSION['username'] ?>" disabled>
                </div><br>
                <div>
                    <label for="form-pass">Password</label>
                    <input type="password" class="form-control" id="form-pass" name="pass" placeholder="Password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Change</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php if($_SESSION['role'] == 2) { ?>
<div class="col-xs-12 col-sm-12">
    <div class="widget-box">
        <div class="widget-header">
            <h4 class="widget-title">Add User</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <form method="post" action="<?= base_url('user/add/') ?>">
                <div>
                    <label for="form-user2">Username</label>
                    <input type="text" class="form-control" id="form-user2" placeholder="Username" name="user" required>
                </div>
                <br>
                <div>
                    <label for="form-pass2">Password</label>
                    <input type="password" class="form-control" id="form-pass2" placeholder="Password" name="pass" required>
                </div>
                <br>
                <button type="submit" class="btn btn-info">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12">
    <div class="widget-box">
        <div class="widget-header">
            <h4 class="widget-title">Manage User</h4>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($users as $v) {
                            echo '<tr><td>' . $no . '</td><td>' . $v->username . '</td><td><a href="" class="btn btn-sm btn-danger">Delete</a></td></tr>';
                            $no += 1;
                        }
                        ?>

                    </tbody>
                </table>

            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->

    </div>
</div>
<?php } ?>