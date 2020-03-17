<?php include '../includes/header.php'; ?>

<div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Forms</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

<?php 
		$name = $password = $admin = $email = "";
		$date= "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$password = test_input($_POST["password"]);
		$email = test_input($_POST["email"]);
		$date = date("Y-m-d");
		$admin = $_SESSION['email'];
		}

?>						
							<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="focusedinput" placeholder="name">
									</div>
									<div class="col-sm-2">
										<p class="help-block">...</p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" name="email" class="form-control1" id="focusedinput" placeholder="email@example.com">
									</div>
									<div class="col-sm-2">
										<p class="help-block">all lower text</p>
									</div>
								</div>

		
								<div class="form-group">
									<label for="inputPassword"  class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" name="password" class="form-control1" id="inputPassword" placeholder="Password">
									</div>
								</div>

								<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn-default btn">Submit</button>
									
										
									</div>
								</div>
							</div>								

							</form>
						</div>
					</div>
					
					<div class="bs-example" data-example-id="form-validation-states">
					<?php 

if (isset($_POST["name"])) {

    $query = "INSERT INTO admin (name,email,password,date_,added_by)
    VALUES ('{$name}','{$email}', '{".md5($password)."}', '{$date}', '{$admin}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
          header("Location: manage_users.php");
            
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                User addition failed.<a href="add_user.php">Try Again</a>
                </div>';
      }
      }
?>  
  </div>

  </div>
  <div class="copy_layout">
      <p>Copyright © 2020 Dishi  Foods. All Rights Reserved </p>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
