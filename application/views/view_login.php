<html>
<head>
	<title>Silahkan Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminpage/css/login.css')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/landingpage/img/favicon.png') ?>">
</head>
<body>
	<div class="loginbox">
		<form action="<?php echo base_url('login/autentikasi_user') ?>" method="post">
			<h3>Silahkan Login</h3>
			<label>Username</label>
			<input type="text" placeholder="Username" name="username" class="inputtext" required>
			<label>Password</label>
			<input type="password" placeholder="Password" name="password" class="inputtext" required>
			<input type="submit" class="loginbutton" value="Login">
			<a href="<?php echo base_url('main/register')?>" class="submitbtn"> Register </a>
			<br>
			<center>
			<a href="<?php echo base_url() ?>">kembali ke website</a>
			</center>
		</form>
	</div>
</body>
</html>