<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
</head>
<body>
<div class='error'>
	<?php
		if($this->session->flashdata("errors")) 
		{
	  		echo $this->session->flashdata("errors");
		}
		elseif($this->session->flashdata("success"));
		{
			echo $this->session->flashdata("success");
		}

	?>
</div>
	<h1 class='hi'>Welcome To The Chalkboard!</h1>
	<div class='form1'>
		<h1>Log In</h1>
		<form action='/users/login' method="post" >
			Email: <input type='text' name='email'>
			Password: <input type='text' name='password'>
			<input type='submit' value='login'>
		</form>
	</div>
	<h2 class='question'>Don't have an account?</h2>
	<div class='form1'>
		<h1>Register</h1>
		<form action='/users/register' method='post' >
			First Name: <input type='text' name='first_name' >
			Last Name: <input type='text' name='last_name'>
			Email Address: <input type='text' name='email'>
			Password: <input type='text' name='password'>
			Confirm Password: <input type='text' name='confirm'>
			<input type='submit' value='register'>
		</form>
	</div>
</body>
</html>