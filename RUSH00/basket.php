<!DOCTYPE html>
<html>

<head>
	<title>WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php require_once 'header.php';  ?>
	<br>
	<h2>BASKET</h2>
	<div id="centerbasket">
		<div class="basket">
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/WOMEN/shirts/blouse_sanna_blue.jpg"></a>
					<div class="description">
						<p id="test">description</p>
						<p>Price: </p>
						<br>
						<div class="change">
							<p>Size</p>
							<form action="changesize" method="post">
								<select id="size" name="size">
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="change">
							<p>Amount</p>
							<form action="changeamount" method="post">
								<!--<label for="action">Options:</label>-->
								<select name="action" id="size">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="delete">
						<p>Delete this item from your basket</p>
						<a href="delete"><img class="deletepic" src="./img/delete.png" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/WOMEN/shirts/blouse_sanna_blue.jpg"></a>
					<div class="description">
						<p id="test">description</p>
						<p>Price: </p>
						<br>
						<div class="change">
							<p>Size</p>
							<form action="changesize" method="post">
								<select id="size" name="size">
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="change">
							<p>Amount</p>
							<form action="changeamount" method="post">
								<!--<label for="action">Options:</label>-->
								<select name="action" id="size">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="delete">
						<p>Delete this item from your basket</p>
						<a href="delete"><img class="deletepic" src="./img/delete.png" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="rowbasket">
				<div class="columnbasket">
					<a href="#"><img class="pic" src="img/WOMEN/shirts/blouse_sanna_blue.jpg"></a>
					<div class="description">
						<p id="test">description</p>
						<p>Price: </p>
						<br>
						<div class="change">
							<p>Size</p>
							<form action="changesize" method="post">
								<select id="size" name="size">
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="change">
							<p>Amount</p>
							<form action="changeamount" method="post">
								<!--<label for="action">Options:</label>-->
								<select name="action" id="size">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
								<button type="add" name="submit" value="submit">Submit</button>
							</form>
						</div>
						<div class="delete">
						<p>Delete this item from your basket</p>
						<a href="delete"><img class="deletepic" src="./img/delete.png" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="info">
			<div class="col-25">
				<div class="container">
					<h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
					<p><a href="#">Product 1</a> <span class="price">$15</span></p>
					<p><a href="#">Product 2</a> <span class="price">$5</span></p>
					<p><a href="#">Product 3</a> <span class="price">$8</span></p>
					<p><a href="#">Product 4</a> <span class="price">$2</span></p>
					<hr>
					<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
					<input type="submit" value="Checkout" class="checkout">
				</div>
			</div>
		</div>
	</div>
</body>
<?php require_once 'footer.php';  ?>

</html>