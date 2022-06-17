<?php
session_start();
include ("include/include.php");
include('smsnotif.php');

if($_SERVER['REQUEST_METHOD']=="POST"){
  $id_num=$_POST['id_num1'];
  $password=$_POST['pass'];
  $pass = md5($password);
    
$sql = "SELECT id_num, password, designation, laboratory, name, status FROM login WHERE id_num = '$id_num' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
  $checkOk=0;
  while($rows = mysqli_fetch_assoc($result)){

    if($id_num == $rows["id_num"] && $pass == $rows["password"]){
      $checkOk++;
    $_SESSION["login"] =$rows["designation"];
    $_SESSION["logname"] = $rows["name"];
    $locator = $rows["designation"];
    $lab = $rows["laboratory"];
    $status = $rows["status"];
    }
  }
  if($checkOk>0){
    if($locator == "administrator"){
      header("location: admin/dashboard/dashboard.php"); 
    }elseif($locator == "admin"){
     header("location: sub admin/dashboard/laboratories/$lab"); 
    }else{

      if ($status == "Pending") {
        echo "<script>alert('Your Account is Waiting for Admin Approval')</script>";
      }else{
        header("location: user/dashboard/laboratories/$lab"); 

      }

      
    }


  }

   }else{
    echo "<script>alert('Incorrect Combination')</script>";
   }
  }

 ?>


<?php include ('head.php'); ?>

<section class="login header p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body">
<form class="md-float-material" method="post">

<div class="auth-box">
<div class="row m-b-10">
<div class="col-md-12">

<h3 class="text-center txt-primary"><i class="ion-locked"></i> Please Log In</h3>
</div>
</div>
<hr />
<div class="input-group">
 <input type="text" class="form-control" name="id_num1" placeholder="ID Number">
<span class="md-line"></span>
</div>



<div class="input-group">
<input style="z-index: 0" id="password" type="password" class="form-control" name="pass" placeholder="Password">
<h3 class="fa fa-eye" id="togglepassword" style="z-index: 1; position: absolute; top: -13px; right: 10px; cursor: pointer;" ></h3>
<span class="md-line"></span>
</div>


<div class="row m-t-25 text-left">
<div class="col-sm-7 col-xs-12">
<div class="checkbox-fade fade-in-primary">
<label>
<span class="text-inverse">Don't Have an Account ?<br> <a style="color: red" href="signup/sign_up.php">Register</a></span>
</label>
</div>
</div>
<div class="col-sm-5 col-xs-12 forgot-phone text-right">
<a href="forget/forget.php" class="text-left f-w-100 "> Forgot Your Password?</a>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button name="login" type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
</div>
</div>

</div>
</form>

</div>

</div>

</div>

</div>

</section>


<script>
  
const togglepassword = document.querySelector('#togglepassword');
const password = document.querySelector('#password');

togglepassword.addEventListener('click', function(e)

{
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  this.classList.toggle('fa-eye-slash');
}




  );


</script>

<?php include ('footer.php'); ?>