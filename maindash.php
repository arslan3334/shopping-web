<?php
session_start();

if (isset($_SESSION['data']['username'])) {
	



// print_r($_SESSION);




?>

<!DOCTYPE html>
<html>
<head>
	<title>MAIN  DASH</title>


	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body style="background-color: #FFC300 ;">

<div class="row">
	
<div class="col-12" style="text-align: center;  border: none;"> 


<img src="shop2.jpeg" height="300px;" width="100%">
</div>

</div>
<div class="row">
	
<div class="col-12" style=" background-color: orange; "> <h1 style="color: white">welcome <?php  echo $_SESSION['data']['fullname']?></h1>  
	<form action="maindash.php" method="POST">
<input type="submit" name="logoutM" value="LOGOUT" style="float: right;  padding: 10px; border-style: double; border-width: thick;">
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

<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>CATEGORY</h1>

<div class="col-2" style="text-align: center; padding:20px; margin-right: 40px; margin-left: 40px; "> <a href="general.php"> <img src="general.png" style="height: 150px;width:150px;  ">    <p>GENERAL ITEMS</p></a></div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; margin-left: 40px; ">  <a href="grocery.php"> <img src="grocery.jpeg" style="height: 150px; width:150px; ">  <p>GROCERY</p></a></div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 80px; "> <a href="dry.php" > <img src="dry fruits.jpg" style="height: 150px; width:150px; ">    <p>DRY FRUITS</p> </a></div>
<div class="col-2" style="text-align: center; padding:20px;margin-right: 40px; "> <a href="COSMETICS.php"><img src="cosmetics.jpg" style="height: 150px;width:150px; ">     <p>COSMETICS</p></a></div>



</div>




</div>


<footer>
<div class="row">
	
<div class="col-12" style="  text-align: center; background-color: orange;">  <h1>FOOTER</h1>
	<form>
<input type="submit" name="checkout" value="CHECKOUT" style="float: right;  padding: 10px; border-style: groove; border-width: thick;">
</form>
  </div>

</div>
</footer>




</body>
</html>


<?php





 
if (isset($_REQUEST['logoutM'])) {
	header("location:logout.php?mgs=logout successfully");
}


}
else{

	header("location:index.php?msg=login first");
}


?>