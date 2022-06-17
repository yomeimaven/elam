<?php 
include ("../include/include.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {

  $name = $_POST['name'];
  $idnum = $_POST['idnum'];
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $retype = $_POST['retype'];
  $date = date("m-d-Y");
  $designation = "user";
  $lablab = $_POST["lab"];
  $status = "Pending";
  $type = $_POST["type"];

  if ($password == $retype) {
  
  $checkOk = 1;



  if($checkOk==1){
  $check = 0;

  $password = md5($_POST['password']);

  $sql = "INSERT INTO login(id_num, name, contact_num, password, designation, date_create, laboratory, status, type, view)
  VALUES('$idnum', '$name', '$contact', '$password', '$designation', '$date', '$lablab', '$status', '$type', '1')";


  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Account Creation Request Successfuly')</script>";
    $check=1;
  }else{
    echo "error: " . mysqli_error($conn);
    $check=0;  
    }


    if ($check==1) {
     header("Refresh: 1; url=../login_form.php");
    }

}
  }else{
    echo "<script>alert('Password and Retype should be match')</script>";
  }

   
}

 ?>

<?php include ('head.php'); ?>

<section class="login header p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="login-card card-block auth-body" style="margin-top: -8%">
<form class="md-float-material" method="post" enctype="multipart/form-data">

<div class="auth-box">
<div class="row m-b-10">
<div class="col-md-12">
<h3 class="text-center txt-primary"><i class="fa fa-user"></i> Sign Up & Enjoy <strong style="color: blue">e-LaM</strong> </h3>
</div>
</div>
<hr />

<div class="input-group">
<input type="text" class="form-control" name="idnum" placeholder="ID # ex. 2019-0275-HC" required>
</div>

<div class="input-group">
<input type="text" class="form-control" name="name" placeholder="Lastname, Firstname M.I" required>
</div>

<div class="input-group">
<input type="text" class="form-control" name="contact" placeholder="Contact #."required>
</div>


<div class="input-group">
<input id="password" style="padding: 10px; z-index: 0" class="form-control" placeholder="Password" type="password" name="password"required>
<h3 class="fa fa-eye" id="togglepassword" style="z-index: 1; position: absolute; top: -13px; right: 10px; cursor: pointer;" ></h3>
</div>

<div class="input-group">
<input id="password1" style="padding: 10px; z-index: 0" class="form-control" placeholder="Retype Password" type="password" name="retype"required>
<h3 class="fa fa-eye" id="togglepassword1" style="z-index: 1; position: absolute; top: -13px; right: 10px; cursor: pointer;" ></h3>
</div>

<div class="input-group">
<select class="form-control" name="lab"required>
  <?php 
$lab = "SELECT lab_id, Name FROM labtable";
$re = mysqli_query($conn, $lab);
while ($rowlab = mysqli_fetch_assoc($re)) {
  echo "<option value='".$rowlab["lab_id"]."'>".$rowlab["Name"]."</option>";
}

   ?>
 

</select>
</div>

<div class="input-group">
<select class="form-control" name="type"required>
<option>Student</option>
<option>Staff</option>

</select>
</div>


<div class="row m-t-25 text-left">
<div class="col-sm-7 col-xs-12">
<div class="checkbox-fade fade-in-primary">
<label>
<span class="text-inverse"><a href="../login_form.php">Already Have an Account ?</a></span>
</label>
</div>
</div>
</div>
<div class="row m-t-15">
<div class="col-md-12">
<button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" id="myBtn">Register</button>
</div>
</div>

</div>
</form>

</div>

</div>

</div>

</div>

</section>


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Some text in the Modal..</p>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script>
  
const togglepassword = document.querySelector('#togglepassword');
const password = document.querySelector('#password');
const togglepassword1 = document.querySelector('#togglepassword1');
const password1 = document.querySelector('#password1');

togglepassword.addEventListener('click', function(e)

{
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  this.classList.toggle('fa-eye-slash');
}




  );

togglepassword1.addEventListener('click', function(e)

{
  const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
  password1.setAttribute('type', type);
  this.classList.toggle('fa-eye-slash');
}




  );


</script>



<?php include ('footer.php'); ?>