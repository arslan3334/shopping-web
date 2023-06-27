<?php
session_start();


if (isset($_SESSION['data']['username'])) {

// print_r($_SESSION);




?>



<!DOCTYPE html>
<html>
<head>
	<title>COSMETICS</title>


	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body style="background-color: #FFC300 ;">

<div class="row">
	
<div class="col-12" style="text-align: center; border:none; "> 


<img src="shop2.jpeg" height="300px;" width="100%">

</div>

</div>

<div class="row">
	
<div class="col-12" style="background-color: orange; "> <h1>welcome <?php  echo $_SESSION['data']['fullname']?></h1>  
	<form action="cosmetics.php" method="POST">
<input type="submit" name="logoutC" value="LOGOUT" style="float: right;  padding: 10px; border-style: double; border-width: thick;">
</form>
  </div>

</div>


<div class="row">
	
<div class="col-2" style="text-align: center; padding:20px; list-style: circle; height: 800px;background-color:  #FFD580; "> 
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

<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>COSMETICS</h1>

<div class="col-2" style="text-align: center; padding:20px; margin-right: 40px; margin-left: 40px; border: none; "> <img src="facewash.jpg" style="height: 150px;width:150px;  "><p>GARNIER FACEWASH</p>
<form action="cosmetics.php" method="POST">
<input type="number" name="quantitycp1" placeholder="quantity">
<input type="submit" name="addcartcp1" value="ADD to CART">

</form>


</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; margin-left: 40px;border: none; ">  <img src="cream.jpg" style="height: 150px; width:150px; ">  <p>TIBET CREAM</p>

<form action="cosmetics.php" method="POST">

<input type="number" name="quantitycp2" placeholder="quantity">
<input type="submit" name="addcartcp2" value="ADD to CART">
</form>

</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px;border: none; ">  <img src="spray.jpg" style="height: 150px; width:150px; ">    <p>AXE BODY SPRAY</p>

<form action="cosmetics.php" method="POST">

<input type="number" name="quantitycp3" placeholder="quantity">
<input type="submit" name="addcartcp3" value="ADD to CART">
</form>

</div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 40px;border: none; ">  <img src="mask.jpg" style="height: 150px;width:150px; ">     <p>GOLDEN FACEMASK</p>
<form action="cosmetics.php" method="POST">
<input type="number" name="quantitycp4" placeholder="quantity">
<input type="submit" name="addcartcp4" value="ADD to CART">
</form>


</div>



</div>




</div>


<footer>
<div class="row">
	
<div class="col-12" style="  text-align: center; background-color: orange;">  <h1>FOOTER</h1>
	<form action="cosmetics.php" method="POST">
<input type="submit" name="checkoutc" value="CHECKOUT" style="float: right;  padding: 10px; border-style: groove; border-width: thick;">
</form>
  </div>

</div>
</footer>




</body>
</html>



<?php





if (isset($_REQUEST['addcartcp1'])) {
	$_SESSION['addcartcp1']=$_REQUEST['addcartcp1'];
}



if (isset($_REQUEST['addcartcp2'])) {
	$_SESSION['addcartcp2']=$_REQUEST['addcartcp2'];
}


if (isset($_REQUEST['addcartcp3'])) {
	$_SESSION['addcartcp3']=$_REQUEST['addcartcp3'];
}


if (isset($_REQUEST['addcartcp4'])) {
	$_SESSION['addcartcp4']=$_REQUEST['addcartcp4'];
}


if (isset($_REQUEST['quantitycp1'])) {
	$_SESSION['quantitycp1']=$_REQUEST['quantitycp1'];
}




if (isset($_REQUEST['quantitycp2'])) {
	$_SESSION['quantitycp2']=$_REQUEST['quantitycp2'];
}

if (isset($_REQUEST['quantitycp3'])) {
	$_SESSION['quantitycp3']=$_REQUEST['quantitycp3'];
}

if (isset($_REQUEST['quantitycp4'])) {
	$_SESSION['quantitycp4']=$_REQUEST['quantitycp4'];
}



if (isset($_SESSION['addcartcp1'])) {
	$_SESSION['quantitycp1']+=1;

	$_SESSION['prizec1']+=40;
}


if (isset($_SESSION['addcartcp2'])) {
	
$_SESSION['quantitycp2']+=1;
  $_SESSION['prizec2']+=250;
	}

if (isset($_SESSION['addcartcp3'])) {
	
$_SESSION['quantitycp3']+=1;
$_SESSION['prizec3']+=100;

	}


if (isset($_SESSION['addcartcp4'])) {
	
$_SESSION['quantitycp4']+=1;
$_SESSION['prizec4']+=550;

	}


if (isset($_REQUEST['checkoutc'])) {
	$_SESSION['checkoutc']= isset($_REQUEST['checkoutc']);
	header("location:checkout.php");
}

 
if (isset($_REQUEST['logoutC'])) {
	header("location:logout.php?mgs=logout successfully");
}

}
else{

	header("location:index.php?msg=login first");
}

?>