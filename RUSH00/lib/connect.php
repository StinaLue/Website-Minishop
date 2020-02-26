<?php

    function connect($host, $user, $passwd)
    {
        $con = mysqli_connect($host, $user, $passwd);
        if (!$con)
        {
            die("Could not connect to the database ".mysqli_connect_error());   
        }
        return $con;
    }
?>