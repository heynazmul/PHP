<?php 

  include "config.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    

    $sql = "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$name','$email','$phone','$message')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style2.css">
	<title>Contact</title>
</head>
<body>
	<!-- Contact Part Start-->
<section id="contact">
			<div class="container">
				<!-- Contact Part  -->
				<h6>Find Me</h6>
				<h1>Contact Me Now</h1>
				<form action="" method="post">
					<!-- Form Part 001 -->
					<div class="col-50">
						<div class="content mr-10">
							<input type="text" name="name" value="" placeholder="Enter Your Name">
							<input type="email" name="email" value="" placeholder="Enter Your email">
							<input type="text" name="phone" value="" placeholder="Enter Your Phone">
						</div>
					</div>
					<!-- Form Part 002 -->
					<div class="col-50">
						<div class="content ml-10">
							<textarea name="message" id="" placeholder="Write Message Here..."></textarea>
						</div>
					</div>
					<div class="submit_btn">
						<button class="btn" type="submit">Submit</button>
					</div>
				</form>
		</section>
		<!-- Contact Part End-->
	
</body>
</html>