<?php 
include("../include/include.php");
session_start();
session_unset();
session_destroy();
//header("location:login_form.php");
header("Refresh: 1; url=../login_form.php");
 ?>