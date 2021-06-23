<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style.css">
	<title>Document</title>
	<script src="bower_components/jquery/dist/validator.min.js"></script>
	<script defer src="scripts/script.js"></script>
</head>

<body>
	<header class="header">

	</header>
	<div class="container">
		<?php if (isset($_GET['errors'])) {
			if ($_GET['errors'] == "none") {
				echo "<div class='title' style='color:green;'>Registiration complete</div>";
			}
		} else {
			echo "<div class='title'>Enter your information to register</div>";
		}
		?>

		<div id ="error">
			<form action="classes/UserCont.php" method="POST" id="inputform" name="form1">
				<div class="user-details">
					<div class="input-box">
						<span class="details">Full Name</span>
						<input name="name" type="text" placeholder="Enter your name" id="name">
						<small id="namemsg">*Required</small>
					</div>
					<div class="input-box">
						<span class="details">Email </span>
						<input name="email" type="text" class="ex" placeholder="Enter your Email" id="email"  >
						<small id="emailmsg">*Required</small>
					</div>
					<div class="input-box">
						<span class="details">Phone</span>
						<input type="tel" name="phone" placeholder="059-5365-880"  id="phone" >
						<small id="phonemsg">*Required</small>
					</div>
					<div class="button">
						<input name="submit" method="submit" type="submit" value="register" id="button">
					</div>
					<div class="input-box">
						<span class="details">Message</span>
						<textarea name="message" placeholder="Enter Massege" id="message" ></textarea>
						<small id="messagemsg">*Required</small>
					</div>
				</div>
		</div>

		</form>

	</div>
</body>

</html>