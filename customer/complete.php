<?php ob_start(); ?>
<?php session_start(); ?>
<?php include '../includes/db_connection.php'; ?>
<?php include '../includes/functions.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Dishi  Foods</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Fare Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!--//fonts--> 
</head>
<body>
<!--background-->
<h1> Dishi  Foods </h1>
    <div class="bg-agile">

	<div class="book-appointment">
	<h2>Hi <?php echo $_SESSION['name']?> ...You Have placed an order we will get back to you ASAP to confirm
    Thank You in Advance</h2>
						<div class="book-form agileits-login">

					
						</div>

				
 
 
		</div>
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2020 Dishi Foods . All Rights Reserved </p>
	        </div>
		<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

</body>
</html>