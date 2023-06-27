<?php

session_start();

session_destroy();


if (isset($_SESSION['data'])) {
header("location:index.php?msg=Logout Successfully");
}


else{

header("location:index.php?msg=Login frist");

}
?>