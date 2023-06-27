<?php
session_start();

if (isset($_SESSION['data']['username'])) {


// echo"<pre>";
// print_r($_SESSION);
// echo"</pre>";
?>


<!DOCTYPE html>
<html>
<head>
	<title>check OUT</title>

	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body>


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

<div class="col-10" style="text-align: center; padding:20px; border: none; "> <h1>check cart</h1>
<table>



<?php

// print_r($_REQUEST);
 echo"</br>";

// if (isset($_REQUEST['quantityGp1']))

// $quantityGp1=$_REQUEST['quantityGp1'];

// if (isset($_REQUEST['addcartGp1']))

// $addcartGp1=$_REQUEST['addcartGp1'];


// if (isset($_REQUEST['quantityGp2']))

// $quantityGp2=$_REQUEST['quantityGp2'];

// if (isset($_REQUEST['addcartGp2']))

// $addcartGp2=$_REQUEST['addcartGp2'];



// if (isset($_REQUEST['quantityGp3']))

// $quantityGp3=$_REQUEST['quantityGp3'];

// if (isset($_REQUEST['addcartGp3']))

// $addcartGp3=$_REQUEST['addcartGp3'];



// if (isset($_REQUEST['quantityGp4']))

// $quantityGp4=$_REQUEST['quantityGp4'];

// if (isset($_REQUEST['addcartGp4']))

// $addcartGp4=$_REQUEST['addcartGp4'];


if (isset($_SESSION['checkoutG'])) {

	if (isset($_SESSION['addcartGp1'])) {
		
	


echo"COCACOLA";

echo"prize";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
print_r(" prize of coca cola is ".$_SESSION['prizeG1']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("quantity ".$_SESSION['quantityGp1']);

}

echo"<br/>";

if ( isset($_SESSION['addcartGp2'])) {


echo"MAYO";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
print_r("prize of MAYO is ".$_SESSION['prizeG2']);
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity ".$_SESSION['quantityGp2']);

}
echo"<br/>";

if ( isset($_SESSION['addcartGp3'])) {

echo"LAYS";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of LAYS is ".$_SESSION['prizeG3']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantityGp3']);
}
echo"<br/>";

if ( isset($_SESSION['addcartGp4'])) {



echo"cooking oil";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of COOKING OIL is ".$_SESSION['prizeG4']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantityGp4']);
}


// if (isset($addcartGp3)) {

// 	 $quantityGp3 =0;

// 	$quantityGp3 += 1;
// 	echo "quantity of lays is ". $quantityGp3;
	 
// }
// elseif (isset($addcartGp4)) {

//  $quantityGp4 =0;

// 	$quantityGp4 += 1;
// 	echo  "quantity of oil is " . $quantityGp4;
// }
}
echo"</br>";

if (isset($_SESSION['checkoutg'])) {

	if (isset($_SESSION['addcartgp1'])) {
		
	


echo"Channa DAAL";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
print_r("prize of CHANNA DAAL is ".$_SESSION['prizeg1']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("quantity ".$_SESSION['quantitygp1']);

}

echo"<br/>";

if ( isset($_SESSION['addcartgp2'])) {


echo"MUNG DAL";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of mung daal is ".$_SESSION['prizeg2']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity ".$_SESSION['quantitygp2']);

}
echo"<br/>";

if ( isset($_SESSION['addcartgp3'])) {

echo"RICE";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of BASMATI RICE is ".$_SESSION['prizeg3']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitygp3']);
}
echo"<br/>";

if ( isset($_SESSION['addcartgp4'])) {



echo"chakki ATA";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of chakki ATA is ".$_SESSION['prizeg4']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitygp4']);
}


}

echo"</br>";


if (isset($_SESSION['checkoutd'])) {

	if (isset($_SESSION['addcartdp1'])) {
		
	


echo"Badam";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
print_r("prize of BADAM is ".$_SESSION['prized1']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("quantity ".$_SESSION['quantitydp1']);

}

echo"<br/>";

if ( isset($_SESSION['addcartdp2'])) {


echo"WALL NUT";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of WALL NUT is ".$_SESSION['prized2']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity ".$_SESSION['quantitydp2']);

}
echo"<br/>";

if ( isset($_SESSION['addcartdp3'])) {

echo"PISTA";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of PISTA is ".$_SESSION['prized3']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitydp3']);
}
echo"<br/>";

if ( isset($_SESSION['addcartdp4'])) {



echo"KISHMISH";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of KISHMISH is ".$_SESSION['prized4']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitydp4']);
}


}
echo"</br>";




if (isset($_SESSION['checkoutc'])) {

	if (isset($_SESSION['addcartcp1'])) {
		
	


echo"GARNIER FACE WASH";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";
print_r("prize of FACEWASH is ".$_SESSION['prizec1']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("quantity ".$_SESSION['quantitycp1']);

}

echo"<br/>";

if ( isset($_SESSION['addcartcp2'])) {


echo"TIBET COLD CREAM";
echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of TIBET is ".$_SESSION['prizec2']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity ".$_SESSION['quantitycp2']);

}
echo"<br/>";

if ( isset($_SESSION['addcartcp3'])) {

echo"AXE SPRAY";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of AXE SPRAY is ".$_SESSION['prizec3']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitycp3']);
}
echo"<br/>";

if ( isset($_SESSION['addcartcp4'])) {



echo"GOLDEN FACE MASK";

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r("prize of MASK is ".$_SESSION['prizec4']);

echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;";

print_r( "quantity".$_SESSION['quantitycp4']);
}




}




?>


</table>

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

}
else{

	header("location:index.php?msg=login first");
}

?>