<?php
require_once('scripts/config.php');
confirm_logged_in();
if (isset($_POST['submit'])){
  var_dump($_POST);
  $fname = tirm($_POST['fname']);
  $username = tirm($_POST['username']);
  $password = tirm($_POST['password']);
  $email = tirm($_POST['email']);

  if(empty($username)|| empty($password) || empty($email)) {
    $message = 'please file the required fields';
  }else{
    $result = createuser($fname,$username,$password,$email)
    $message = 'Data seems alright..';
}
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <?php if(!empty($message)):?>
  		<p><?php echo $message;?></p>
  	<?php endif;?>
<h2> Create User</h2>
<from action="admin_createuser.php" method="post">
  <label for="first-name">First Name:</label>
  <input type="text" id="first-name" name="fname" value=""> <br> <br>

  <label for="username">User Name:</label>
  <input type="text" id="username" name="username" value=""> <br> <br>

  <label for="email">Email:</label>
  <input type="email" id="eamil" name="eamil" value=""> <br> <br>

  <label for="password">Password:</label>
  <input type="text" id="password" name="password" value=""> <br> <br>

<button type="sumbit" name"submit"> Create User </button>
</from>


  </body>
</html>
