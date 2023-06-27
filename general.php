<?php
session_start();


if (isset($_SESSION['data']['username'])) {

// print_r($_SESSION);




?>



<!DOCTYPE html>
<html>
<head>
	<title>GENRAL ITEMS</title>


	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>

<body   style="background-color: #FFC300 ;">

<div class="row">
	
<div class="col-12" style="text-align: center; border: none; "> 

<img src="shop2.jpeg" height="300px;" width="100%">

</div>

</div>

<div class="row">
	
<div class="col-12" style=" background-color: orange; "> <h1 style="color: white;">welcome <?php  echo $_SESSION['data']['fullname']?></h1>  
	
	<form action="general.php" method="POST">
<input type="submit" name="logoutG" value="LOGOUT" style="float: right;  padding: 10px; border-style: double; border-width: thick;">
</form>
  </div>

</div>


<div class="row">
	
<div class="col-2" style="text-align: center; padding:20px; list-style: circle; height: 800px; background-color: #FFD580; "> 
	<p>Category</p>

<br>
<li><a href="general.php">GENERAL ITEMS</a></li>
<br>
<li><a href="COSMETICS.php"> COSMETICS</a></li>
<br>
<li> <a href="grocery.php">GROCERY</a></li>
<br>
<li><a href="dry.php" >DRY FRUITS</a></li>
</div>


<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>GENERAL ITEMS</h1>
	<br>

<div class="col-2" style="text-align: center; padding:20px; margin-right: 40px; margin-left: 40px; border: none; "> <img src="coca.jpeg" style="height: 150px;width:150px; ">    <p>COCA COLA RS 40pkr</p>
<form action="general.php" method="POST">
<input type="number" name="quantityGp1" placeholder="quantity">
<input type="submit" name="addcartGp1" value="ADD to CART">
</form>

</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; margin-left: 40px; border: none; ">  <img src="mayo.jfif" style="height: 150px; width:150px; ">  <p>MAYO RS 250pkr</p>
<form action="general.php" method="POST">
<input type="number" name="quantityGp2" placeholder="quantity">
<input type="submit" name="addcartGp2" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; border: none; ">  <img src="lays.png" style="height: 150px; width:150px; "><p>LAYS RS 100pkr</p>
<form action="general.php" method="POST">
<input type="number" name="quantityGp3" placeholder="quantity">
<input type="submit" name="addcartGp3" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 40px; border: none; ">  <img src="oil.jpg" style="height: 150px;width:150px; "> <p>EVA OIL RS 550 PKR</p>
<form action="general.php" method="POST">
<input type="number" name="quantityGp4" placeholder="quantity">
<input type="submit" name="addcartGp4" value="ADD to CART">
</form>
</div>
</div>
</div>
<form action="general.php" method="POST">
<footer>
<div class="row">
	
<div class="col-12" style="  text-align: center; background-color: orange;" >  <h1>FOOTER</h1>
	
<input type="submit" name="checkoutG" value="CHECKOUT" style="float: right;  padding: 10px; border-style: groove; border-width: thick;">

  </div>

</div>
</footer>

</form>


</body>
</html>


<?php
if (isset($_REQUEST['addcartGp1'])) {
	$_SESSION['addcartGp1']=$_REQUEST['addcartGp1'];
}



if (isset($_REQUEST['addcartGp2'])) {
	$_SESSION['addcartGp2']=$_REQUEST['addcartGp2'];
}


if (isset($_REQUEST['addcartGp3'])) {
	$_SESSION['addcartGp3']=$_REQUEST['addcartGp3'];
}


if (isset($_REQUEST['addcartGp4'])) {
	$_SESSION['addcartGp4']=$_REQUEST['addcartGp4'];
}


if (isset($_REQUEST['quantityGp1'])) {
	$_SESSION['quantityGp1']=$_REQUEST['quantityGp1'];
}




if (isset($_REQUEST['quantityGp2'])) {
	$_SESSION['quantityGp2']=$_REQUEST['quantityGp2'];
}

if (isset($_REQUEST['quantityGp3'])) {
	$_SESSION['quantityGp3']=$_REQUEST['quantityGp3'];
}

if (isset($_REQUEST['quantityGp4'])) {
	$_SESSION['quantityGp4']=$_REQUEST['quantityGp4'];
}



if (isset($_SESSION['addcartGp1'])) {
	$_SESSION['quantityGp1']+=1;

	$_SESSION['prizeG1']+=40;
}


if (isset($_SESSION['addcartGp2'])) {
	
$_SESSION['quantityGp2']+=1;
  $_SESSION['prizeG2']+=250;
	}

if (isset($_SESSION['addcartGp3'])) {
	
$_SESSION['quantityGp3']+=1;
$_SESSION['prizeG3']+=100;

	}


if (isset($_SESSION['addcartGp4'])) {
	
$_SESSION['quantityGp4']+=1;
$_SESSION['prizeG4']+=550;

	}


if (isset($_REQUEST['checkoutG'])) {
	$_SESSION['checkoutG']= isset($_REQUEST['checkoutG']);
	header("location:checkout.php");
}
 
if (isset($_REQUEST['logoutG'])) {
	header("location:logout.php?mgs=logout successfully");
}


}
else{

	header("location:index.php?msg=login first");
}


?>