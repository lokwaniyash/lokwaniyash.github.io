<?php
$message = '';
$error = '';
if(isset($_POST["submit"]))
{
	  if(empty($_POST["name"]))
	  {
			 $error = "<label class='text-danger'>Enter Name</label>";
	  }
	  else if(empty($_POST["email"]))
	  {
			 $error = "<label class='text-danger'>Enter Gender</label>";
	  }
	  else if(empty($_POST["message"]))
	  {
			 $error = "<label class='text-danger'>Enter Designation</label>";
	  }
	  else
	  {
			 if(file_exists('data.json'))
			 {
					$current_data = file_get_contents('data.json');
					$array_data = json_decode($current_data, true);
					$extra = array(
						  'name'               =>     $_POST['name'],
						  'email'          =>     $_POST["email"],
						  'message'     =>     $_POST["message"]
					);
					$array_data[] = $extra;
					$final_data = json_encode($array_data);
					if(file_put_contents('data.json', $final_data))
					{
						  $message = "<label class='text-success'>File Appended Success fully</p>";
					}
			 }
			 else
			 {
					$error = 'JSON File not exits';
			 }
	  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="bg" style="background-image: linear-gradient(135deg, #067c87, #d460ff);">

		<img src="../imgs/bg-01.jpg" style="position: fixed; opacity: 0.25; display: block;">
		<div class="container-contact100">
			<button class="contact100-btn-show">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</button>

			<div class="wrap-contact100">
				<button class="contact100-btn-hide">
					<i class="fa fa-close" aria-hidden="true"></i>
				</button>

				<form class="contact100-form validate-form" method="post">
					<span class="contact100-form-title">
						Contact Us
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Your Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter your name" id="name" />
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter your email here" id="mail" />
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Message is required">
						<span class="label-input100">Message</span>
					 	<textarea class="input100" name="message" placeholder="Your message here..." id="message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<input type="submit" class="contact100-form-btn" name="submit" value="Submit">
					</div>
					<?php
                     if(isset($message))
                     {
                          echo $message;
                     }
                     ?>
				</form>

				<span class="contact100-more">
					For any question contact hit me up at: <span class="contact100-more-highlight">+91 8107412177</span>
					<a name="home" class="home" id="home" href="../index.html" style=" margin-left: 40%; font-size: 19px;"><- BACK</a>

				</span>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>

</body>

</html>
