<?php session_start(); ?>
<?php require_once('include/db_connection.php'); ?>
<?php require_once('include/functions.php'); ?>
<?php
	$errors = array();
	$first_name ='';
	$last_name ='';
	$email ='';
	$password ='';
	
	
	
	if(isset($_POST['submit'])){
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
	
		
	//checking required fields
		if(empty($_POST['first_name'])){
			$errors[]='First Name is required';
		}
		
		if(empty($_POST['last_name'])){
			$errors[]='Last Name is required';
		}
		
		if(empty($_POST['email'])){
			$errors[]='E-mail is required';
		}
		
		if(empty($_POST['password'])){
			$errors[]='Password is required';
		}
		
		//checking max length
		$max_len_fields = array('first_name'=>50, 'last_name'=>100, 'email'=>100, 'password'=>40);

		foreach ($max_len_fields as $field =>$max_len) {
			if (strlen(trim($_POST[$field]))>$max_len) {
				$errors[] = $field . ' must be less than '. $max_len .' characters';
			}
		}
		//checking if email address already exsits
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1 ";
		$result_set = mysqli_query($conn,$query);
		if($result_set){
			if(mysqli_num_rows($result_set) == 1){
				$errors[] = 'Email address already exsits!';
			}
		}
		
		if(empty($errors)){
		//no errors found.adding new records
		$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
		$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
		//email address is already sanitized
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$hashed_password = sha1($password);
		
		$query = "INSERT INTO user ( ";
		$query .= "first_name, last_name, email, password, is_deleted";
		$query .= ") VALUES (";
		$query .= "'{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}', 0";
		$query .= ")";
		$result = mysqli_query($conn,$query);
		if($result){
			//query succesfull
			header('Location:accountsuccess.php?user_added=true');
		}else{
			$errors[]="Failed to add new record";
		}
		
		}
	}
	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
	<header>
		<div class="appname">Air Asia</div>
		
	</header>
	<br>
	<h1>Welcome to WideAsia</h1>
	<h2>Create an account and join with us</h2><br>
	<form action="signup.php" method="post" class="userform">
	
	<?php
		if(!empty($errors)){
			echo '<div class="errmsg">';
			echo '<b>Please Refill relevant fields of your Form</b><br>';
			foreach($errors as $error){
				echo $error .'<br>';
			}
			echo '</div>';
		}
	
	?>
	<br>
	<p>
		<label for="">First Name:</label>
		<input type="text" name="first_name"<?php echo 'value="' . $first_name . '"';?>>
	</p>
	
	<p>
		<label for="">Last Name :</label>
		<input type="text" name="last_name"<?php echo 'value="' . $last_name . '"';?>>
	</p>
	
	<p>
		<label for="">Email Address:</label>
		<input type="email" name="email"<?php echo 'value="' . $email . '"';?>>
	</p>
	
	<p>
		<label for="">Password:</label>
		<input type="password" name="password">
	</p>
	
	<p>
		<label for="">&nbsp;</label>
		<button type="submit" name="submit">Submit</button>
		<button type="button" class="cancelbtn">Cancel</button>
	</p>
	
	

		
		
	
	
	
	</form>
</body>
</html>