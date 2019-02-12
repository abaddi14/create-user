<?php
	require_once('scripts/config.php');
	if(empty($_POST['username']) || empty($_POST['password'])){
		$message = 'Missing Fields';
	}else{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];

		$message = login($username,$password,$ip);
	}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php
	try{
		login($user_fname,$user_name,$userpass,$userpass,);
		echo '<br> weclome to home page 0-0!<br>';
	}carch(Excption $e){
	echo $e -> getMessage();
	exit;
	}
	$user_name = $_POST["name"];
	echo " Welcome to $user_name";


	if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
	<form action="admin_login.php" method="post">
		<label>Username:
			<input type="text" name="username" value="" required>
		</label>
		<br>
		<label>Password:
			<input type="password" name="password" required>
		</label>
		<br>
		<button id="btn" type="submit">Submit</button>
	</form>
</body>
</html>
