<?php

    function    insert_into_table($con, $tbl_name, $query, $row)
    {
        $stmt = mysqli_prepare($con, $query);
        if ($tbl_name === "Users")
        {
            mysqli_stmt_bind_param($stmt, "ssi", $row['username'], $row['passwd'], $row['privilege']);
        }
        else
            mysqli_stmt_bind_param($stmt, "ssii", $row['img'], $row['description'], $row['price'], $row['size']);
        if (!mysqli_stmt_execute($stmt))
        {
            echo "Failed to insert values into ".$tbl_name."\n";
            exit();
        }
    }

    /*function insert_into_table($con, $tbl_name, $query)
    {
        if ($tbl_name === "Users")
            insert_into_users($con, $query, $privilege);
        else
            insert_into_inventory($con, $query);
    }

    function insert_into_users($con, $query, $privilege)
    {
        if ($stmt = mysqli_prepare($con, $query))
        {
            mysqli_stmt_bind_param($stmt, "ssi", $_SESSION['login'], $_SESSION['passwd'], $privilege);
            if (!mysqli_stmt_execute($stmt))
            {
                echo "Failed to insert values into Users\n";
                exit();
            }
            // header("Location: index.php");
        }
        else
        {
            echo "Failed to prepare statement\n";
            exit();
        }
    }

    function    insert_into_inventory($con, $query)
    {
        if ($stmt = mysqli_prepare($con, $query))
        {
            mysqli_stmt_bind_param($stmt, "ssii", $row['img'], $row['description'], $row['price'], $row['size']);
            if (!mysqli_stmt_execute($stmt))
            {
                echo "Failed to insert values into Users\n";
                exit();
            }
            // header("Location: index.php");
        }
        else
        {
            echo "Failed to prepare statement\n";
            exit();
        }
    }
    */
?>