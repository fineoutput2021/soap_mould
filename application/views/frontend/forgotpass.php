<div class="container-fluid mt-5 mb-5" style="background-color: #f4f1eb; padding:20px 5px">
	<div class="row">
		<div class="col-12 text-center d-flex justify-content-center align-items-center">
			<a href="index.html">Home</a><span class="px-3">/</span>
			<p  class="margin-0">Forgot Password</p>
		</div>
	</div>
</div>
<!-- end breadcrumb -->


<div class="container my-5 border p-3">
  <form  onsubmit ="return validateForm()" action="<?=base_url()?>User/update_password/<?=$auth?>" enctype="multipart/form-data" method="POST">
    <div class="row px-3">
      <div class="col-12">
        <label for="" class="form-label">Enter Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" id="pswd1" aria-label="Enter password">
        <span id = "message1" style="color:red"> </span> <br><br>
      </div>
      <div class="col-12">
        <label for=""  class="form-label">Enter Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm Password" name="reset_password" id="pswd2" aria-label="Confirm password">
        <span id = "message2" style="color:red"> </span> <br><br>
      </div>
    </div>
    <div class="col-12 text-center">
      <input type = "submit" class="btn btn-primary btn-lg" value = "Submit">
    </div>
  </form>
</div>
<script>
function validateForm() {
    var pw1 = document.getElementById("pswd1").value;
    var pw2 = document.getElementById("pswd2").value;

    if(pw1 == "") {
      document.getElementById("message1").innerHTML = "**Fill the password please!";
      return false;
    }

    if(pw2 == "") {
      document.getElementById("message2").innerHTML = "**Fill the password please!";
      return false;
    }

    if(pw1.length < 4) {
      document.getElementById("message1").innerHTML = "**Password length must be atleast 4 characters";
      return false;
    }

    if(pw1.length > 15) {
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }

    if(pw1 != pw2) {
      document.getElementById("message2").innerHTML = "**Passwords are not same";
      return false;
    } else {
      // alert ("Your password Reset successfully");
      // document.write("JavaScript form has been submitted successfully");
    }
 }
</script>
