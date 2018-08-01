<?php
	include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">
		<h2>Create an account</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="uname" placeholder="User Name">
			<input type="text" name="email" placeholder="Email">
			<input type="text" name="pass" placeholder="Password">
			<input type="text" name="repass" placeholder="Retype Password">
			<button type="submit" name="submit">Sign Up</button>
		</form>

		<?php

		/*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		if (strpos($fullUrl, "signup=empty") == true) {
			echo "<p class='error'> You did not fill in all fileds!</p>";
			exit();
		}

		elseif (strpos($fullUrl, "signup=name") == true) {
			echo "<p class='error'> This can't be a name!</p>";
			exit();
		}

		elseif (strpos($fullUrl, "signup=email") == true) {
			echo "<p class='error'> Email is not valid!</p>";
			exit();
		}

		elseif (strpos($fullUrl, "signup=password") == true) {
			echo "<p class='error'> You password didn't match!</p>";
			exit();
		}

		elseif (strpos($fullUrl, "signup=success") == true) {
			echo "<p class='error'> Successfully Signed Up!</p>";
			exit();
		}*/


		if (!isset($_GET['signup'])) {
			exit();
		}
		else {
			$signupCheck = $_GET['signup'];

			if ($signupCheck == "empty") {
				echo "<p class='error'> You did not fill in all fields!</p>";
				exit();
			}

			if ($signupCheck == "name") {
				echo "<p class='error'> Invalid Name!</p>";
				exit();
			}

			if ($signupCheck == "email") {
				echo "<p class='error'> Please enter valid email!</p>";
				exit();
			}

			elseif ($signupCheck == "password") {
				echo "<p class='error'> Password Didn't Match!</p>";
				exit();
			}

			if ($signupCheck == "success") {
				echo "<p class='error'> Successfully Signed Up!</p>";
				exit();
			}
		}

		?>


	</div>

</section>

<?php
	include_once 'footer.php';
?>
