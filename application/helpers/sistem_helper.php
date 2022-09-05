<?php 

function is_logged_in()
{
    //$ci = get_instance();
    if ($_SESSION['role'] == 1 OR $_SESSION['role'] == 2) {
        
    } else{
		redirect('login');
	}
}


