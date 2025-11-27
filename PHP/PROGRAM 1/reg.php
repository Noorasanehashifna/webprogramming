<!doctype html>
<html>
<head>
<title>form</title>
</head>
<body>
<h2>Forms Validation</h2>
<form method="POST">
	Name: <input type="text" name="name" id="name" ><br>
	Email: <input type="text" name="email" id="email" ><br>
	Mobile: <input type="text" name="mobile" id="mobile" ><br>
	Password: <input type="password" name="pass" id="pass" ><br><br>
	<input type="submit" name="submit" value="submit" >
</form>
<?php
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['pass'];
	
	$isValid= true;
	if (empty($name))
	{
	  echo "Name is required.<br>";
	  $isValid = false;
	  }
	 if (empty($email))
	{
	  echo "Email is required.<br>";
	  $isValid = false;
	  }
	 elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	    echo "Invalid email.<br>";
	    $isValid = false;
	   }
	 if (empty($password) )
	{
	  echo "password is required.<br>";
	  $isValid = false;
	  }
	 elseif (strlen($password) < 6)
	 {
	   echo "password must be at least 6 characters long.<br>";
	   $isValid = false;
	   }
	 if ($isValid)
	{
	  echo "<h3>Form Submitted Succesfully!</h3>";
	  echo "Name: $name<br>";
	  echo "Email: $email <br>";
	   echo "mobile: $mobile <br>";
	  echo "Password: $password<br>";

	  }
	}
?>
</body>
</html>
	  
