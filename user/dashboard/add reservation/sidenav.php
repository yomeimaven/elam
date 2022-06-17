
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar" pcoded-header-position="relative">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
 <div class="pcoded-inner-navbar main-menu">

<div class="">
<div class="main-menu-header">
<img class="img-40" src="../../../assets/images/user.png" alt="User-Profile-Image">
<div class="user-details">
<span style="text-align: center;"><b><?php 
$desig = $_SESSION["logname"];
	$sql = "SELECT name FROM login WHERE name='$desig'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo $row["name"];


 ?></b></span>
<span style="text-align: center;" id="more-details"><?php 
echo $_SESSION["login"];

 ?><i class="ti-angle-down"></i></span>
</div>
</div>
<div class="main-menu-content">
<ul>
<li class="more-details">
<a href="../profile/profile.php"><i class="ti-user"></i>Edit Profile</a>
<a href="../../../logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
</li>
</ul>
</div>
</div>

<ul class="pcoded-item pcoded-left-item">
	<li class=" ">
<a href="<?php echo "../laboratories/".$_SESSION["selector"]; ?>" data-i18n="nav.form-select.main">
<span class="pcoded-micon"><i class="ti-home"></i></span>
 <span class="pcoded-mtext">Dashboard</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

<li class=" ">
<a href="../borrowers information.php" data-i18n="nav.form-select.main">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
 <span class="pcoded-mtext">Add Reservation</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

<li class=" ">
<a href="../top borrowed item/topborrowed.php" data-i18n="nav.form-select.main">
<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
 <span class="pcoded-mtext">Top Borrowed Item</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
</ul>





</li>

</ul>
</div>
</nav>

<div class="pcoded-content">
<div class="pcoded-inner-content">