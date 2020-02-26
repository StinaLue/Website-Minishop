<?php
    function create_tbl($con, $tbl_name, $query)
    {
        mysqli_query($con, "DROP TABLE IF EXISTS ".$tbl_name);
        if (mysqli_query($con, $query))
            return TRUE;
        else
        {
            echo "Could not create table".mysqli_error($con);
            return FALSE;
        }
    }
?>