<?php
    /*
    При входе на сайт, пользователь стартует новую сессию.
    При этом, в параметре user массива session хранится имя пользвателя.
    */
	
	if (isset($_SESSION['user_name'])){
        $user_name = $_SESSION['user_name'];
        echo "Hello $user_name";
    }
    else{
        session_start();
        require_once('autorization.php');
    }
	
?>