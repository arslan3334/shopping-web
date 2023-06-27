<?php
session_start();


if (isset($_SESSION['data']['username'])) {

// print_r($_SESSION);




?>



<!DOCTYPE html>
<html>
<head>
	<title>DRY FRUITS</title>


	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body  style="background-color: #FFC300 ;">

<div class="row">
	
<div class="col-12" style="text-align: center; border:none; "> 

<img src="shop2.jpeg" height="300px;" width="100%">

	</div>

</div>

<div class="row">
	
<div class="col-12" style=" background-color: orange;"> <h1>welcome <?php  echo $_SESSION['data']['fullname']?></h1>  
	<form action="dry.php" method="POST">
<input type="submit" name="logoutD" value="LOGOUT" style="float: right;  padding: 10px; border-style: double; border-width: thick;">
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

<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>DRY FRUITS</h1>
	<br>

<div class="col-2" style="text-align: center; padding:20px; margin-right: 40px; margin-left: 40px;border: none; "> <img src="badam.jpg" style="height: 150px;width:150px;  ">    <p>BADAM</p>
<form action="dry.php" method="POST">
<input type="number" name="quantitydp1" placeholder="quantity">
<input type="submit" name="addcartdp1" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; margin-left: 40px;border: none; ">  <img src="nuts.jpg" style="height: 150px; width:150px; ">  <p>WALL NUTS</p>
<form action="dry.php" method="POST">
<input type="number" name="quantitydp2" placeholder="quantity">
<input type="submit" name="addcartdp2" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px;border: none; ">  <img src="pista.jfif" style="height: 150px; width:150px; ">    <p>PISTACHIO</p>
<form action="dry.php" method="POST">
<input type="number" name="quantitydp3" placeholder="quantity">
<input type="submit" name="addcartdp3" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 40px;border: none; ">  <img src="kishmish.jfif" style="height: 150px;width:150px; ">     <p>KISHMISH</p>

<form action="dry.php" method="POST">
<input type="number" name="quantitydp4" placeholder="quantity">
<input type="submit" name="addcartdp4" value="ADD to CART">
</form>

</div>



</div>




</div>


<footer>
<div class="row">
	
<div class="col-12" style="  text-align: center; background-color: orange;">  <h1>FOOTER</h1>
	<form action="dry.php" method="POST">
<input type="submit" name="checkoutd" value="CHECKOUT" style="float: right;  padding: 10px; border-style: groove; border-width: thick;">
</form>
  </div>

</div>
</footer>




</body>
</html>

<?php


if (isset($_REQUEST['addcartdp1'])) {
	$_SESSION['addcartdp1']=$_REQUEST['addcartdp1'];
}



if (isset($_REQUEST['addcartdp2'])) {
	$_SESSION['addcartdp2']=$_REQUEST['addcartdp2'];
}


if (isset($_REQUEST['addcartdp3'])) {
	$_SESSION['addcartdp3']=$_REQUEST['addcartdp3'];
}


if (isset($_REQUEST['addcartdp4'])) {
	$_SESSION['addcartdp4']=$_REQUEST['addcartdp4'];
}


if (isset($_REQUEST['quantitydp1'])) {
	$_SESSION['quantitydp1']=$_REQUEST['quantitydp1'];
}




if (isset($_REQUEST['quantitydp2'])) {
	$_SESSION['quantityGp2']=$_REQUEST['quantityGp2'];
}

if (isset($_REQUEST['quantitydp3'])) {
	$_SESSION['quantitydp3']=$_REQUEST['quantitydp3'];
}

if (isset($_REQUEST['quantitydp4'])) {
	$_SESSION['quantitydp4']=$_REQUEST['quantitydp4'];
}



if (isset($_SESSION['addcartdp1'])) {
	$_SESSION['quantitydp1']+=1;

	$_SESSION['prized1']+=40;
}


if (isset($_SESSION['addcartdp2'])) {
	
$_SESSION['quantitydp2']+=1;
  $_SESSION['prized2']+=250;
	}

if (isset($_SESSION['addcartdp3'])) {
	
$_SESSION['quantitydp3']+=1;
$_SESSION['prized3']+=100;

	}


if (isset($_SESSION['addcartdp4'])) {
	
$_SESSION['quantitydp4']+=1;
$_SESSION['prized4']+=550;

	}


if (isset($_REQUEST['checkoutd'])) {
	$_SESSION['checkoutd']= isset($_REQUEST['checkoutd']);
	header("location:checkout.php");
}





 
if (isset($_REQUEST['logoutD'])) {
	header("location:logout.php?mgs=logout successfully");
}


}
else{

	header("location:index.php?msg=login first");
}


?>