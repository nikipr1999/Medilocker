<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
<body style="background-color: rgb(122, 189, 211);">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form  class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						My Profile
					</span>
					<font style="font-size: 150">
					<?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM customer");
                    ?>
 
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    
                        <b>Name:</b><?php echo $row["fullname"]; ?><br>
                        <b>Email:</b><?php echo $row["email"]; ?><br>
                        <b>Mobile:</b><?php echo $row["phone"]; ?><br>
                        <b>Insurance:</b><?php echo $row["insurance"]; ?><br>
                        <b>Blood Group:</b><?php echo $row["blood"]; ?><br><br>

<?php
	if(isset($_POST['submit']))
	{
			$image=addslashes($_FILES['image']['tmp_name']);
			$imagename=addslashes($_FILES['image']['name']);
			$image=file_get_contents($image);
			$image=base64_encode($image);

			//$query=mysqli_query($con,"insert into uploadfile(username,email,image,imagename) values('$uname','$email','$image','$imagename')") or die ("Query Error ");
			//?>
			


			<?php
		}
	}
	

?>
<h6><b> Upload file :</b> </h6>
	<input type="file" name="image" id="image" />  <br /><br />
	<input type="submit" name="submit" id="submit" /><script>window.alert("Record saved "); </script>
                        <b><br><br>
                        <a href="database.php">View My database</a></font><br>
                        <a href="qrcode.html">Click here to get your unique QR code</a><br></b>
                    
                    <?php
                    $i++;
                    
                    ?>
                    </font>
					

					
                </div>
                </form>
            </div>
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

</body>
</html>