<?php
session_start();

if (isset($_SESSION['data']['username'])) {


// print_r($_SESSION);




?>



<!DOCTYPE html>
<html>
<head>
	<title>GROCERY ITEMS</title>


	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body  style="background-color: #FFC300 ;">

<div class="row">
	
<div class="col-12" style="text-align: center;border: none; ">
	

<img src="shop2.jpeg" height="300px;" width="100%">

</div>

</div>

<div class="row">
	
<div class="col-12" style="  background-color: orange;"> <h1>welcome <?php  echo $_SESSION['data']['fullname']?></h1>  
	<form action="grocery.php" method="POST">
<input type="submit" name="logoutg" value="LOGOUT" style="float: right;  padding: 10px; border-style: double; border-width: thick;">
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

<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>GROCERY ITEMS</h1>
	<br>

<div class="col-2" style="text-align: center; padding:20px; margin-right: 40px; margin-left: 40px;border: none; "> <img src="chana.jpg" style="height: 150px;width:150px;  ">    <p>CHANNA DAAL RS 90 PKR </p>
<form action="grocery.php" method="POST">
<input type="number" name="quantitygp1" placeholder="quantity">
<input type="submit" name="addcartgp1" value="ADD to CART">
</form>

</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; margin-left: 40px;border: none; ">  <img src="mung.png" style="height: 150px; width:150px; ">  <p>MUNG DAAL  RS 85 pkr</p>

<form action="grocery.php" method="POST">
<input type="number" name="quantitygp2" placeholder="quantity">
<input type="submit" name="addcartgp2" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px;border: none; ">  <img src="rice.jpg" style="height: 150px; width:150px; ">    <p>BASMATI RICE  RS 150 PKR</p>
<form action="grocery.php" method="POST">
<input type="number" name="quantitygp3" placeholder="quantity">
<input type="submit" name="addcartgp3" value="ADD to CART">
</form>
</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 40px; border: none; ">  <img src="flour.jpg" style="height: 150px;width:150px; ">     <p>CHAKKI ATA  RS 200 PKR</p>
<form action="grocery.php" method="POST">
<input type="number" name="quantitygp4" placeholder="quantity">
<input type="submit" name="addcartgp4" value="ADD to CART">
</form>
</div>



</div>




</div>


<footer>
<div class="row">
	
<div class="col-12" style="  text-align: center; background-color: orange;">  <h1>FOOTER</h1>
	<form action="grocery.php" method="POST">
<input type="submit" name="checkoutg" value="CHECKOUT" style="float: right;  padding: 10px; border-style: groove; border-width: thick;">
</form>
  </div>

</div>
</footer>




</body>
</html>

<?php


if (isset($_REQUEST['addcartgp1'])) {
	$_SESSION['addcartgp1']=$_REQUEST['addcartgp1'];
}



if (isset($_REQUEST['addcartgp2'])) {
	$_SESSION['addcartgp2']=$_REQUEST['addcartgp2'];
}


if (isset($_REQUEST['addcartgp3'])) {
	$_SESSION['addcartgp3']=$_REQUEST['addcartgp3'];
}


if (isset($_REQUEST['addcartgp4'])) {
	$_SESSION['addcartgp4']=$_REQUEST['addcartgp4'];
}


if (isset($_REQUEST['quantitygp1'])) {
	$_SESSION['quantitygp1']=$_REQUEST['quantitygp1'];
}




if (isset($_REQUEST['quantitygp2'])) {
	$_SESSION['quantitygp2']=$_REQUEST['quantitygp2'];
}

if (isset($_REQUEST['quantitygp3'])) {
	$_SESSION['quantitygp3']=$_REQUEST['quantitygp3'];
}

if (isset($_REQUEST['quantitygp4'])) {
	$_SESSION['quantitygp4']=$_REQUEST['quantitygp4'];
}



if (isset($_SESSION['addcartgp1'])) {
	$_SESSION['quantitygp1']+=1;

	$_SESSION['prizeg1']+=90;
}


if (isset($_SESSION['addcartgp2'])) {
	
$_SESSION['quantitygp2']+=1;
  $_SESSION['prizeg2']+=85;
	}

if (isset($_SESSION['addcartGp3'])) {
	
$_SESSION['quantitygp3']+=1;
$_SESSION['prizeg3']+=150;

	}


if (isset($_SESSION['addcartgp4'])) {
	
$_SESSION['quantitygp4']+=1;
$_SESSION['prizeg4']+=200;

	}


if (isset($_REQUEST['checkoutg'])) {
	$_SESSION['checkoutg']= isset($_REQUEST['checkoutg']);
	header("location:checkout.php");
}


 
if (isset($_REQUEST['logoutg'])) {
	header("location:logout.php?mgs=logout successfully");
}


}
else{

	header("location:index.php?msg=login first");
}


?>