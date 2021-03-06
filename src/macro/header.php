<head>
	<title>KasKong</title>
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/homePage.css">
	<script src="script/header_home.js"></script>
	<script src="validate.js"></script>
	<script src="change.js"></script>
</head>
<div id="headerMenu">
	<a href="index.php">
		<img id='logo' src="images/logo.png">
	</a>
	<li><a href="kategori.php?id=1">Makanan</a></li>
	<li><a href="kategori.php?id=2">Minuman</a></li>
	<li><a href="kategori.php?id=3">Pakaian</a></li>
	<li><a href="kategori.php?id=4">Rumah</a></li>
	<li><a href="kategori.php?id=5">Plus-Plus</a></li>
	<div id='rightBox'>
		<?php
			if (isset($_SESSION['user_id'])) {
				echo "<a id=\"shopbag\" href=\"shoppingbag.php\"><img src=\"images/shopbag.png\"></a></p>";
			}
		?>
		<div id="headerControl">
		<?php
			if (isset($_SESSION['user_id'])) {
				echo "Welcome <a href=\"profile.php?id=".$_SESSION['user_id']."\">".$_SESSION['username']."</a>!";
				echo "<button type=\"button\" onclick=\"location.href='logout.php';\">Logout</button><br />";
			} else {
				echo "<button type=\"button\" onclick=\"toggleLogin()\">Login</button>";
				echo "<button type=\"button\" onclick=\"location.href='register.php';\">Register</button>";
			}
		?>
		</div>
	</div>
  <div id="searchDiv">
  <form id='searchForm' method="post" autocomplete="off" action="search.php">
    <input id="searchBox" autofocus required style="width: 100px;" type="text" name="itemName" placeholder="Nama Item"/>
      <select required name="kategori" form='searchForm'>
        <option value="" disabled selected>Kategori</option>
        <option value="1">Makanan</option>
        <option value="2">Minuman</option>
        <option value="3">Pakaian</option>
        <option value="4">Rumah</option>
        <option value="5">Plus-Plus</option>
      </select>
    <input placeholder="Harga Min" style="width: 100px;" type="number" name="rangeMin" min=0 max=2000000000> to 
    <input placeholder="Harga Max" style="width: 100px;" type="number" name="rangeMax" min=0 max=2000000000>
    <input type="submit" value="Search">
  </form>
  </div>
	<div id="loginPop">
  	<form id='loginForm' method="post" action="login.php" autocomplete="off">
    	Username:<input style="width: 125px;" type="text" name="username" id="username" required />
        Password:<input style="width: 125px;" type="password" name="password" id="password" required />
    	<input type="submit" id="subLog" value="Log me in!"/></td>
    </form>
	</div>
	<h3>Barang? Boleh sama... Kualitas? Dijamin <i>Oeh</i> punya!</h3>
</div>