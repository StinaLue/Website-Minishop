<?php
session_start();
include_once "./install.php";
include_once "./lib/tbl_get_rows.php";

$men = tbl_get_rows($con, "Men");
$women = tbl_get_rows($con, "Women");
$children = tbl_get_rows($con, "Children");
?>
<html>

<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php require_once 'header.php';  ?>
	<div id="center">
			<div class="row">
				<div class="column">
					<p><?php  echo $men[0]['description'];?></p>
					<?php
						$result = mysqli_query($con, "SELECT size FROM Men WHERE `description` ='".$men[0]['description']."'");
						$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
					?>
					<a href="#"><img class="pic" src=<?php  echo $men[0]['img'];?>></a>
					<div class="add">
						<p>Price: </p>
						<form action="addtobasket.php" method="GET">
							  	<p>Size</p>
  								<select name="size" id="size">
								<?php foreach ($articles as $key => $value)
									echo "<option value=".$value['size'].">".$value['size']."</option>";
									?>
						 		</select> 
								<input type="hidden" name="table" value="Men" />
								<input type="hidden" name="index" value="0" />
 						 	<button type="submit">Add to basket</button>
						</form> 
					</div>
  				</div>
  				<div class="column">
					<p><?php  echo $women[0]['description']; ?></p>
					<?php
						
						$result = mysqli_query($con, "SELECT size FROM Women WHERE `description` =\"".$women[0]['description']."\"");
						$articles = mysqli_fetch_all($result, MYSQLI_ASSOC);
					?>
					<a href="#"><img class="pic" src=<?php  echo $women[0]['img']?>></a>
					<div class="add">
						<p>Price: </p>
						<input class="addtype" type="button" value="Add to basket">
					</div>
  				</div>
  				<div class="column">
					<p><?php echo $children[0]['description']; ?></p>
					<a href="#"><img class="pic" src=<?php echo $children[0]['img'];?>></a>
					<div class="add">
						<p>Price: </p>
						<input class="addtype" type="button" value="Add to basket">
					</div>
  				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<p><?php echo $men[3]['description']; ?></p>
				<a href="#"><img class="pic" src=<?php echo $men[3]['img']; ?>></a>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
			<div class="column">
				<p><?php echo $women[3]['description']; ?></p>
				<p><a href="#"><img class="pic" src=<?php echo $women[3]['img'] ?>></a></p>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
			<div class="column">
				<p><?php echo $children[3]['description']; ?></p>
				<p><a href="#"><img class="pic" src=<?php echo $children[3]['img']; ?>></a></p>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<p><?php echo $men[6]['description']; ?></p>
				<p><a href="#"><img class="pic" src=<?php echo $men[6]['img']; ?>></a></p>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
			<div class="column">
				<p><?php echo $women[6]['description']; ?></p>
				<p><a href="#"><img class="pic" src=<?php echo $women[6]['img']; ?>></a></p>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
			<div class="column">
				<p><?php echo $children[6]['description']; ?></p>
				<p><a href="#"><img class="pic" src=<?php echo $children[6]['img']; ?>></a></p>
				<div class="add">
					<p>Price: </p>
					<input class="addtype" type="button" value="Add to basket">
				</div>
			</div>
		</div>
	</div>
</body>
<?php require_once 'footer.php';  ?>

</html>
