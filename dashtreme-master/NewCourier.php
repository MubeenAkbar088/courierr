<?php 
 include("connection.php");

session_start();
if(isset($_SESSION['s_email'])==null){
    // header("location:login.php");
}
else{ 

 include("sidebar.php");
 include("navbar.php");


?>

   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->

<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add New Courier</div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-1">Street/Building</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-2">City</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-3">State</label>
            <input type="text" class="form-control" id="input-3" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-4">Zip Code/ Postal Code</label>
            <input type="text" class="form-control" id="input-4" placeholder="Enter Password">
           </div>
           <div class="form-group">
            <label for="input-5">Country</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm Password">
           </div>
           <div class="form-group">
            <label for="input-5">Contact #</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm Password">
           </div>
           <!-- <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked=""/>
            <label for="user-checkbox1">I Agree Terms & Conditions</label>
            </div>
           </div> -->
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Save</button> 
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Cancel</button> 

          </div>
          </form>
         </div>
         </div>
      </div>

      <!-- <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Round Vertical Form</div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-6">Name</label>
            <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-7">Email</label>
            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-8">Mobile</label>
            <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-9">Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
           </div>
           <div class="form-group">
            <label for="input-10">Confirm Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div> -->
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->

  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
<?php
}
?>