<?php

include 'db.php';
include 'macro/header.php';

?>

<!DOCTYPE html>
<html>
<head>
<script src="validate.js"></script>
<title>Title</title>
</head>

<body>
	<?php
	if (!isset($_SESSION['user_id'])) {
	?>
		<form method="post" action="reg.php" onsubmit="return validateAll()" name="regform">
			<input id="username" name="username" placeholder="username" type="text" onkeyup="if(this.value != '') validateUsername('username', this.value, 'valusername');" required /><div id="valusername"></div><br />
			<input id="password1" name="password1" placeholder="password" type="password" onkeyup="if(this.value != '') validatePassword(this.value, password2.value, username.value, email.value, 'valpasswords');" required /><div id="valpassword"></div><br />
			<input id="password2" name="password2" placeholder="password lagi" type="password" onkeyup="if(this.value != '') validatePassword(password1.value, this.value, username.value, email.value, 'valpasswords');" required /><div id="valpasswords"></div><br />
			<input id="name" name="name" placeholder="nama lengkap" type="text" onkeyup="if(this.value != '') validateName(this.value, 'fullname');" required /><div id="fullname"></div><br />
			<input id="email" name="email" placeholder="email" type="email" onkeyup="if(this.value != '') validateEmail('email', this.value, 'valemail');" required /><div id="valemail"></div><br />
			
			<input id="telephone" name="telephone" placeholder="telepon" type="tel" onkeyup="validateEmpty(this.value, 'valtelephone')" required /><div id="valtelephone"></div><br />
			<textarea id="address" name="address" onkeyup="validateEmpty(this.value, 'valaddress')" required ></textarea><div id="valaddress"></div><br />
			<input id="city" name="city" placeholder="kota" type="text" onkeyup="validateEmpty(this.value, 'valcity')" required /><div id="valcity"></div><br />
			<input id="province" name="province" placeholder="provinsi" type="text" onkeyup="validateEmpty(this.value, 'valprovince')" required /><div id="valprovince"></div><br />
			<input id="postal" name="postal" placeholder="kode pos" type="number" onkeyup="validateEmpty(this.value, 'valpostal')" required /><div id="valpostal"></div><br />
			
			<input type="submit" /><br />
		</form>
	<?php
	} else {
		header("Location: index.php");
	}
	?>
</body>

</html> 