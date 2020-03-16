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
	<img src="images/side.png" alt="">
	<div class="book-appointment">
	<h2>Make Your Order Here</h2>
						<div class="book-form agileits-login">


<?php 
			$name = $dishi=$phone=$email=$time=$d_method="";
			$date = $address=$d_date=$people="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
			$name    = $_POST["name"];
			$_SESSION['name'] = $name;
			$dishi   = $_POST["dishi"];
			$address = $_POST["address"];
			$phone   = $_POST["phone"];
			$email   = $_POST["email"];
			$d_date  = $_POST["d_date"];
			$time    = $_POST["time"];
			$people  = $_POST["people"];
			$hotel   = $_POST["hotel"];
			$date    = date("Y-m-d");
		
			}

?>	
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<div class="phone_email">
									<label>Full name : </label>
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="name" placeholder="" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="email" placeholder="" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone number : </label>
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="phone" placeholder="" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Address : </label>
									<div class="form-text">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<input type="text" name="address" placeholder="" required="">
									</div> 
								</div> 
								<div class="clear"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Date : </label> 
										<div class="book_date"> 
											<i class="fa fa-calendar" aria-hidden="true"></i>
												<input  id="datepicker" name="d_date" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

										</div>					
									</div>
									<div class="span1_of_1">
										<!-- start_section_room -->
										<label>Time : </label>
										<div class="section_room">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<select id="country" onchange="change_country(this.value)" class="frm-field required" name="time">
												<option value="AX"></option>
												<option value="Lunch">Lunch</option>
												<option value="Dinner">Dinner</option>         
												<option value="BreakFast">Break Fast</option>
											</select>
										</div>	
									</div>
									<div class="span1_of_1">
										<label>Dishi : </label>
										<!-- start_section_room -->
										<div class="section_room">
										    <!-- <i class="fa fa-hamburger" aria-hidden="true"></i> -->
											<i class="fa fa-pizza-slice" aria-hidden="true"></i>
											<select id="country1" name="dishi" onchange="change_country(this.value)" class="frm-field required sect">
											<option value="AX"></option>
												<option value="sima ">Sima,meat & greens(250)</option>
												<option value="Mukimu"> Mukimu stew(300)</option>
												<option value="Wingman"> WingMan(450)</option>         
												<option value="CCS"> Chicken Chips & 350 ML Sods(400)</option>
												<option value="ACT"> Avocado, Cheese & Tomato (480)</option>
												<option value="BBQ"> BBQ Chicken Club (580)</option>
							
											</select>
										</div>	
									</div> 
									<div class="clear"></div>

									<div class="span1_of_1">
										<label>No.of people : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-users" aria-hidden="true"></i>
											<select id="country1" name="people" onchange="change_country(this.value)" class="frm-field required sect">
												<option value="AX"></option>
												<option value="1">1 People</option>
												<option value="2">2 People</option>
												<option value="3">3 People</option>         
												<option value="4">4 People</option>
												<option value="more">More</option>
											</select>
										</div>	
									</div> 
									<div class="clear"></div>
								</div> 
												<div class="wthree-text"> 
												<h6>Restrant</h6>
												<ul>
													<li>
														<label class="anim">
															<input type="radio" name="hotel" value="java" class="checkbox">
															<span>Java</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="radio" name="hotel" value="c4 foods" class="checkbox">
															<span>C4 foods</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="radio" name="hotel" value="KFC" class="checkbox">
															<span>KFC</span> 
														</label> 
													</li>
													<li>
														<label class="anim">
															<input type="radio" name="hotel" value="inn" class="checkbox">
															<span>Chicken Inn</span> 
														</label> 
													</li>
												</ul>
												<div class="clearfix"> </div>
											</div>
								<input type="submit" value="Order Now">
							</form>
						</div>

						<?php 

if (isset($_POST["phone"])) {

    $query = "INSERT INTO orders_ (name_,dishi,address_,phone,email,d_date,time_,people,date_,restrant)

    VALUES ('{$name}','{$dishi}','{$address}','{$phone}','{$email}','{$d_date}','{$time}','{$people}','{$date}', '{$hotel}')";

        $results = mysqli_query($con, $query);
		confirm_query($results);
		echo $results;

        if ($results) {
			redirect_to('complete.php');
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                case addition failed.<a href="index.php">Try Again</a>
                </div>';
      }
    }
?>  
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