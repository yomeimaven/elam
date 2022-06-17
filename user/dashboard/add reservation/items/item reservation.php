<?php 
session_start();
include ("../../../../include/include.php"); 
if (isset($_POST['submit'])) {
	$iter=0;



$Name = array($_POST['name1'], $_POST['name2'], $_POST['name3'], $_POST['name4'], $_POST['name5'], $_POST['name6'], $_POST['name7'], $_POST['name8'], $_POST['name9'], $_POST['name10']);

$Quantity = array($_POST['Quantity1'], $_POST['Quantity2'], $_POST['Quantity3'], $_POST['Quantity4'], $_POST['Quantity5'], $_POST['Quantity6'], $_POST['Quantity7'], $_POST['Quantity8'], $_POST['Quantity9'], $_POST['Quantity10']);

$Duration = array($_POST['Duration1'], $_POST['Duration2'], $_POST['Duration3'], $_POST['Duration4'], $_POST['Duration5'], $_POST['Duration6'], $_POST['Duration7'], $_POST['Duration8'], $_POST['Duration9'], $_POST['Duration10']);

//inserting data to session
	while($Name[$iter] != ""){
		
		//$_SESSION["Serial$iter"] =  $Serial[$iter];
		$_SESSION["Name$iter"] =  $Name[$iter];
		$_SESSION["Quantity$iter"] =  $Quantity[$iter];
		//$_SESSION["Comment$iter"] =  $Comment[$iter];
		$_SESSION["Duration$iter"] =  $Duration[$iter];
		$iter++;
	}
	$_SESSION["iter"]=$iter;

	header("location:../summary/summary.php");
}

include ('head.php'); include ('topnav.php'); include ('sidenav.php'); 
?>

<div class="main-body" style="background-color: lightgrey ">
<div class="page-wrapper">

<div class="page-header">
<div class="page-header-title">
<h4>Equipment Reservation</h4>
</div>

</div>


<div class="page-body">
<div class="row">
<div class="col-sm-10 mx-auto">

<div class="card">
<div class="card-header">
<span>
	<b>Borrowers Name: <?php echo $_SESSION["name"]; ?></b>
	<b style="float: right; margin-right: 2%">Date: <?php echo $date = date('M-d-Y ');; ?> </b>

</span>
</div>
<div class="card-block">
<div class="wrapper wrapper-640">
<form method="post" class="j-forms" id="j-forms" novalidate>

<div class="content">


<div class="row">

	<label class="col-sm-4 text-center">Item Name</label>
	<label class="col-sm-4 text-center">Quantity</label>
	<label class="col-sm-4 text-center">Duration(Days) of Borrowing</label>

<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name1">
<option></option>
<?php
						$selector = $_SESSION["selector"];
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity1" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration1">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name2">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity2" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration2">



<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name3">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity3" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration3">



<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name4">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity4" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration4">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name5">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity5" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration5">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name6">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity6" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration6">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name7">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity7" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration7">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name8">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity8" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration8">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name9">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity9" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration9">


<select class="col-sm-4" style="border: 0.5px dotted lightgrey;" name="name10">
<option></option>
<?php
						$sql ="SELECT name FROM itemtable WHERE lab_id='$selector'";
						$result = mysqli_query($conn,$sql);
						while($rows = mysqli_fetch_assoc($result)){
						echo "<option>".$rows["name"]."</option><br>";
					}
					 ?>	
</select>

<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" name="Quantity10" min="1">
<input class="col-sm-4" style="border: 0.5px dotted lightgrey" type="number" min="1" name="Duration10">


</div>





<br><br><br><br><br><br><br>

</div>

<div class="footer">
<button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
</div>

</form>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
<?php include ('footer.php'); ?>