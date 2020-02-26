<?php

include_once "./lib/create_db.php";
include_once "./lib/create_tbl.php";
include_once "./lib/insert_into_table.php";


$host = "127.0.0.1";
$user = "root";
$passwd = "myadmin";
$db = "Inventory";

    include_once "./lib/connect.php";
    $con = connect($host, $user, $passwd);
    if (create_db($con, $db))
    {
        mysqli_select_db($con, $db);
        $users = "CREATE TABLE  Users(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, passwd VARCHAR(128) NOT NULL, privilege INT DEFAULT 0 , reg_date TIMESTAMP)";
        create_tbl($con, "Users", $users);
        $user = mysqli_real_escape_string($con, 'root');
        $passwd = hash('whirlpool', mysqli_real_escape_string($con, 'myadmin'));
        $add_root = "INSERT INTO Users(username, passwd, privilege) VALUES ('".$user."', '".$passwd."', 1)"; 
        if (!mysqli_query($con, $add_root))
        {
            die("Failed to create the root user \n".mysqli_error($con));
        }
        $passwd = hash('whirlpool', 'user');
        $privilege = 0;
        // insert_into_table($con, "Users", "INSER?Us?ass?d, privilege) VALUES ('stina', '".$passwd."', 0)");
        insert_into_table($con, "Users", "INSERT INTO Users(username, passwd, privilege) VALUES (?, ?, ?)", array('username'=>'ismahene', 'passwd'=>$passwd, 'privilege'=>$privilege));
        // insert_into_table($con, "Users", "INSERT INTO Users(username, passwd, privilege) VALUES ('stina', '".$passwd."', 0)");
        insert_into_table($con, "Users", "INSERT INTO Users(username, passwd, privilege) VALUES (?, ?, ?)", array('username'=>'stina', 'passwd'=>$passwd, 'privilege'=>$privilege));
        $men = "CREATE TABLE Men(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $women = "CREATE TABLE Women(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT NOT NULL)";
        $children = "CREATE TABLE Children(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, img VARCHAR(128) NOT NULL, `description`  VARCHAR(128) NOT NULL, price INT NOT NULL, size INT  NOT NULL)";
        create_tbl($con, "Men", $men);
        create_tbl($con, "Women", $women);
        create_tbl($con, "Children", $children);

        //3*filling
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/bottoms/shorts_izod_blue.jpg', 'description'=>'Shorts IZOD Menwear', 'price'=>60, 'size'=>40));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/bottoms/trouser_pullandbear_blue.jpg', 'description'=>'Trousers  PULL&BEAR Menwear', 'price'=>80, 'size'=>38));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/bottoms/trouser_yourturn_grey.jpg', 'description'=>'Trousers YOUR TURN Menwear', 'price'=>100, 'size'=>36));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shirts/polo_ralphlauren_black.jpg', 'description'=>'Polo RALPH LAUREN Menwear', 'price'=>140, 'size'=>38));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shirts/shirt_tomtailor_blue.jpg', 'description'=>'Shirt TOM TAILOR Menwear', 'price'=>190, 'size'=>40));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shirts/tshirt_ralphlauren_white.jpg', 'description'=>'T-shirt RALPH LAUREN Menwear', 'price'=>150, 'size'=>38));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shoes/converse_blue.jpg', 'description'=>'CONVERSE model 45', 'price'=>90, 'size'=>40));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shoes/newbalance_white.jpg', 'description'=>'NEW BALANCE model 360', 'price'=>85, 'size'=>38));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shoes/nike_white.jpg', 'description'=>'NIKE AIR', 'price'=>160, 'size'=>42));
        insert_into_table($con, "Men", "INSERT INTO Men(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/bottoms/shorts_izod_blue.jpg', 'description'=>'Shorts IZOD Menwear', 'price'=>60, 'size'=>38));

        
        
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/bottoms/trouser_leivs_black.jpg', 'description'=>'Trousers LEVI\'S', 'price'=>140, 'size'=>38));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/bottoms/short_levis_blue.jpg', 'description'=>'Shorts LEVI\'S', 'price'=>120, 'size'=>36));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/bottoms/skirt_only_blue.png', 'description'=>'Skirt ONLY BLUE', 'price'=>90, 'size'=>34));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shirts/pullover_nike_grey.jpg', 'description'=>'Pullover NIKE ','price'=> 65, 'size'=>36));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shirts/blouse_sanna_blue.jpg', 'description'=>'Shirt SANNA ', 'price'=>40, 'size'=>36));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shirts/dress_vila_black.jpg', 'description'=>'Dress VILLA', 'price'=>200, 'size'=>36));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shoes/reebok_white.jpg', 'description'=>'REEBOK','price'=> 100, 'size'=>38));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shoes/vans_black.jpg', 'description'=>'VANS', 'price'=>125, 'size'=>36));
        insert_into_table($con, "Women", "INSERT INTO Women(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/women/shoes/vans_red.jpg', 'description'=>'VANS', 'price'=>135, 'size'=>39));

        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/bottoms/shorts_3_pack_fribo.jpg', 'description'=>'Shorts FRIBO Children colllection', 'price'=>100, 'size'=>34));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/bottoms/trouser_hilfiger_blue.jpg', 'description'=>'Trousers TOMMY HILFIGER Children colllection','price'=> 200, 'size'=>32));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/bottoms/trouser_j_crew_grey.jpg', 'description'=>'Trousers JCREW', 'price'=>100, 'size'=>30));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/shirts/t_shirt_lacoste_white.jpg', 'description'=>'T-shirt LACOSTE Children colllection', 'price'=>80, 'size'=>32));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/shirts/t_shirt_benetton_grey.jpg', 'description'=>'T-shirt BENETTON Children colllection','price'=> 140,'size'=> 30));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/shirts/tshirt_levis_blue.jpg', 'description'=>'T-shirt LEVI\S Children colllection','price'=> 90, 'size'=>28));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/shoes/vans_pink.jpg', 'description'=>'VANS Children collection', 'price'=>110, 'size'=>28));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/CHILDREN/shoes/babies_sandals.jpg', 'description'=>'Babies Sandals  FRIBO Children collection', 'price'=>120, 'size'=>28));
        insert_into_table($con, "Children", "INSERT INTO Children(img, `description`, price, size) VALUES(?, ?, ?, ?)", array('img'=> './img/men/shoes/nike_white.jpg', 'description'=>'NIKE Children collection','price'=> 90, 'size'=>26));

        //load mainpage
        // header("Location : index.php");
    }
?>