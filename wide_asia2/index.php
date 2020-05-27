<?php session_start(); ?>
<?php require_once('include/db_connection.php'); ?>
<?php 

	// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($conn, $_POST['email']);
			$password 	= mysqli_real_escape_string($conn, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM user
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($conn, $query);

			if ($result_set) {
				// query succesfful

				if (mysqli_num_rows($result_set) == 1) {
					// valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id']= $user['id'];
					$_SESSION['first_name']=$user['first_name'];
					//updating last login
					$query = "UPDATE user SET last_login=NOW()";
					$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";
					$result_set = mysqli_query($conn, $query);
					if(!$result_set){
						die("Databse query failed.");
					}
					
					// redirect to users.php
					header('Location: home.php');
				} else {
					// user name and password invalid
					$errors[] = 'Invalid Username / Password';
				}
			} else {
				$errors[] = 'Database query failed';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="login">

		<form action="index.php" method="post">
			
			<fieldset>
				<legend><h1>Log In</h1></legend>

				<?php 
					if (isset($errors) && !empty($errors)) {
						echo '<p class="error">Invalid Username or Password</p>';
					}
				?>
				
				<?php 
					if(isset($_GET['logout'])){
						echo '<p class="info">You have successfully logged out.</p>';
					}
				?>

				<p>
					<label for="">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="">Password:</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>

				<p>
					<button type="submit" name="submit">Log In</button>
				</p>
			
				 <div class="container">
				<button type="button" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="change_password.php">password?</a></span><br>
				<span class="sign"> <a href="signup.php">Create a new account</a></span><br>
				
						

			</fieldset>

		</form>		

	</div> 
</body>
</html>
<?php mysqli_close($conn); ?>