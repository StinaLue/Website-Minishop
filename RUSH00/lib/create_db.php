<?php

    function create_db($con, $db)
    {
        $db_create = "CREATE DATABASE IF NOT EXISTS ".$db;
        if (mysqli_query($con, $db_create))
            return TRUE;
        else
        {
            echo "Could not create database".mysqli_error($con);
            return FALSE;
        }
        return $db;
    }
?>