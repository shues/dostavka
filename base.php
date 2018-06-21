<?php
    function get_connect(){
        $base = mysqli_connect('localhost','root','glos2ar12','dostavka' );
        mysqli_set_charset($base,'utf-8');
        //if ($base!=null){
            return $base;
        //}
    }
?>