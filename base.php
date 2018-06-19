<?php
    function get_connect(){
        $base = mysqli_connect('localhost','root','glos2ar12','dostavka' );
        //if ($base!=null){
            return $base;
        //}
    }
?>