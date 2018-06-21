<?php
    /*
    При входе на сайт, пользователь стартует новую сессию.
    При этом, в параметре user массива session хранится имя пользвателя.
    */
   session_start();
	/*echo '<pre>';
		print_r($_SESSION);
	echo '</pre>';*/
	if (isset($_SESSION['user_name'])){
        $user_name = $_SESSION['user_name'];
        //require_once('user_cont.php');
        header('Location: user_cont.php');
    }
    else{
        /*echo '<pre>';
        	print_r($_SESSION);
        echo '</pre>';*/
        header('Location: autorization.php');
    }
	
?>