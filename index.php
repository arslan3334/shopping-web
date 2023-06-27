<?php

session_start();

if (isset($_SESSION['data'])) {
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>INDEX LOGIN</title>
	<link rel="stylesheet" type="text/css" href="grid2.css">
</head>
<body style="">
<div class=row >
	
	 <div class= col-12  style="  border-color: orange;border-style: groove;border-width: thick;  ">    

<img src="shop2.jpeg" height="300px;" width="100%">

	 	 </div>
</div>

<h1 style="text-align: center;">WELCOME TO ONLINE SHOPING SYSTEM</h1>

<center>
<form action="loginprocess.php" method="POST">

	<fieldset style="border-style: double;border-width: thick; border-color:blue; background-color: yellow; "><legend><h1 style="color: red;text-align: center;">Login Panel</h1></legend>

	<table border="4px" style="margin-top: 50px; border-style: groove; border-color: red;">
		

<tr><td><p style="color: red;"><?php echo $_REQUEST['msg']??''; ?></p></td></tr>
<tr>

	<td> USER NAME <input type="text" name="username" placeholder="enter username">      </td>
</tr>

<tr>
	
	<td> PASSWORD&nbsp&nbsp <input type="password" name="password" placeholder="enter password">      </td>
</tr>

<tr>
	
	<td> <input type="submit" name="login" value="LOGIN">      </td>
</tr>


	</table>

</fieldset>




</form>
</center>


</body>
</html>
