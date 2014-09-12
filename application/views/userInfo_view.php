<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id='header'>
		<h1>Welcome <?= $this->session->userdata('first_name'); ?>!</h1>
		<a href="/users/logout">Log out</a>
	</div>
	<h3>User Information: </h3>
	<div id="main">
		<ul>
			<li><span>First Name:</span><br><?= $this->session->userdata('first_name'); ?></li>
			<li><span>Last Name:</span><br><?= $this->session->userdata('last_name'); ?></li>
			<li><span>Email:</span><br><?= $this->session->userdata('email'); ?></li>
		</ul>
	</div>
	<br>

</body>
</html>