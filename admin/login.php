<?php ob_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<title> Dishi  Foods</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>

<body id="login">
  <div class="login-logo">
    <!-- <a href="index.php"><img src="images/logo.png" alt=""/></a> -->
  </div>

  <h2 class="form-heading">login</h2>
  <div class="app-cam">
  <?php
// If form submitted, insert values into the database.
    if (isset($_POST['email'])) {
        // removes backslashes
		$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
		$email = mysqli_real_escape_string($con, $email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		//Checking  is user existing in the database or not

    	$query = "SELECT * FROM `admin` WHERE email='$email'
		and password='{" . md5($password) . "}'";
		
      	$result = mysqli_query($con, $query);
      	confirm_query($result);
		  $rows = mysqli_num_rows($result);
		  
      	if ($rows == 1) {
        	$_SESSION['email'] = $email;
            // Redirect user to dashboard.php
        	header("Location: index.php");
      } else {
        echo "
			<h3>username/password is incorrect.</h3>
			<br/>Click here to <a href='login.php'>Try Again</a>";
			}
    } else {
      ?>  


	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<input type="text" class="text" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
	

	</form>
  <?php } ?>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2020 Dishi  Foods </p>
   </div>
</body>
</html>
