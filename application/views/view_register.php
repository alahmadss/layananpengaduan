<html>
<head>
	<title>Silahkan Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/adminpage/css/login.css')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/landingpage/img/favicon.png') ?>">
</head>
<body>
	<div class="loginbox">
		<form action="<?php echo base_url('main/daftarsimpan') ?>" method="post">
			<h3>Silahkan Register</h3>
			<label>NIK</label>
			<input type="text" placeholder="NIK" name="nik" class="inputtext" required>
			<label>Nama</label>
            <input type="text" placeholder="Nama" name="nama" class="inputtext" required>
            <label>Username</label>
            <input type="text" placeholder="Username" name="username" class="inputtext" required>
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" class="inputtext" required>
            <label>Telp</label>
            <input type="text" placeholder="Telp" name="telp" class="inputtext" required>
			<input type="submit" class="loginbutton" value="Register">
			<a href="<?php echo base_url('login') ?>" class="submitbtn"> Login </a>
		</form>
	</div>
</body>
</html>