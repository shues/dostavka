<?php
    require_once('base.php');

    $base = get_connect();
    $query = "
        UPDATE TABLE 
            `users` 
        SET 
            `name`='Admin',
            `surname`='Adminov',
            `fathername`='Adminovich'
        WHERE
            `id`='1'
        ";
    mysqli_query($base,$query);
?>
