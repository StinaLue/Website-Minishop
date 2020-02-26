<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (!empty($_POST['login']) && !empty($_POST['passwd']))
        {
            //just to test this file
            $con = mysqli_connect("127.0.0.1", "root", "myadmin", "Inventory");
            $_SESSION['login'] = mysqli_real_escape_string($con, $_POST['login']);
            $_SESSION['passwd'] = hash('whirlpool', mysqli_real_escape_string($con, $_POST['passwd']));
            //check if user exists in users
            $query = "SELECT * FROM Users";
            $result = mysqli_query($con, $query);
            if (!empty($result))
            {
                if (!($rows = mysqli_fetch_all($result, MYSQLI_ASSOC)))
                    echo "Error: Failed to retrieve data from Users ".mysqli_error($con);
                    // echo $rows[0]['username']."\n";
                    // echo $_SESSION['login']."\n";
                    // echo $rows[0]['passwd']."\n";
                    // echo $_SESSION['passwd']."\n";
                foreach ($rows as $key=>$value)
                {
                    if ($value['username'] === $_SESSION['login'] && $value['passwd'] === $_SESSION['passwd'])
                    {
                        header("Location: index.php");
                        echo "user authenticated\n";
                        exit();
                    }
                }
            }
            echo "Login failed. Username or/and password invalid\n";
        }
        else
            echo "Login failed. Username or/and password invalid\n";
    }
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
	<body>
    <?php  require_once 'header.php';  ?>
        <div id="box">
	    	<form action="./login.php" method="POST">
            <div id="login">
                <h1>SIGN IN</h1>
                <p>Username</p>
                <input type="user" placeholder="Enter Username" name="login">
                <p>Password</p>
                <p><input type="password" placeholder="Enter Password" name="passwd"></p>
                <input type="submit" name="submit" value="Sign in">
                <div class="text-foot">
                    <p>Don't have an account yet? <a href="create.php" class="btn">Register</a></p>
                    <p>Want to change your password? <a href="modif.php" class="btn">Modify Password</a></p>
                    <p>Go back to <a href="index.php" class="btn">Mainpage</a></p>
                </div>
            </div>
            </form>
        </div>
    </body>
    <?php  require_once 'footer.php';  ?>
</html>
