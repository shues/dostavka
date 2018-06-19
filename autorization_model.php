<?php
    require_once('base.php');
    $base = get_connect();
    if(!$base){
        echo('database not acces');
    }
    else{
        $login_inp = $_GET['login_str'];
        $password_inp = $_GET['password_str'];
        $query = "
            SELECT 
                `name`, 
                `password`, 
                `role` 
            FROM 
                `users` 
            WHERE 
                `login` = '$login_inp'
        ";
        $name       = '';
        $password   = '';
        $role       = '';
        $res = mysqli_query($base, $query);
        while($count = mysqli_fetch_assoc($res)){
            echo '<pre>';
            print_r($count);
            echo '</pre>';
            $name       = $count['name'];
            $password   = $count['password'];
            $role       = $count['role'];
        }
        if (strcmp($password,$password_inp)==0){
            $_SESSION['user_name']=$name;
            $_SESSION['user_role']=$role;
            echo "it s all right";
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
        }
        //echo $password;
        //echo $password_inp;
        header('Location: index.php');
    }
?>