<?php
    function tbl_get_rows($con, $tbl_name)
    {
        if (!($result = mysqli_query($con, "SELECT * FROM $tbl_name"))
        || !($rows = mysqli_fetch_all($result, MYSQLI_ASSOC)))
            echo "Error: Failed to retrieve data from ".$tbl_name." ".mysqli_error($con);
        return ($rows);
    }
?>