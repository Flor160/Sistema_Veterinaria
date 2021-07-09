<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patitas y Garritas</title>
	<link rel="stylesheet" href="css.css">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<a><img src="logo.png" height="40px"></a>
			</div>
			<nav>
				<ul id="MenuItems">
				<li><a>Account</a></li>
				</ul>
			</nav>
			<img src="menu.png" class="menu-icon" 
			onclick="menutoggle()">
		</div>	
	</div>	
	</div>
<!------account page------->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<img src="owner.png" width="100%">
				</div>
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
							<a>Login</a>
							<hr id="Indicator">
						</div>
											
						<form action="login.php" method="post">
						<div class= "w3l-form-group">
								<label>Usuario:</label>
								<input type="text" class="form-control" placeholder="Usuario"  name="username"  required="required" value="admin" />
								<label>Password:</label>
								<input type="password" class="form-control" placeholder="Password" name="password"  required="required" value="admin" />
							
						<button type="submit" name="login" class="btn">Login</button>
						</div>   
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!------ js for MenuItems ------>

<script>
	var MenuItems = document.getElementById("MenuItems");
	
	MenuItems.style.maxHeight = "0px";
	
	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px"){
			MenuItems.style.maxHeight = "200px";
		}
		else{
			MenuItems.style.maxHeight = "0px"
		}
	}
</script>
<!------------------footer------------->	
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download our App</h3>
					<p>asdasdasdasdasadasdasdadadasdadadadadsadadsadsadsadsad</p>	
					<ul>
						<a href="https://play.google.com/store?hl=es_PE&gl=US" target="_blank">
						<img src="android.png"height="60px"></a>
						<a href="https://play.google.com/store?hl=es_PE&gl=US" target="_blank">
						<img src="ioss.png"height="60px"></a>
					</ul>
				</div>
				<div class="footer-col-2">
					<h3>Follow us</h3>
					<p>Our social networks ♥</p>
					<ul>
						<a href="https://www.facebook.com/BT21.Official" target="_blank">
						<img src="fb.png"height="60px"></a>
						<a href="https://twitter.com/BT21_" target="_blank">
						<img src="twitter.png"height="60px"></a>
						<a href="https://www.instagram.com/bt21_official/" target="_blank">
						<img src="ins.png"height="60px"></a>
						<a href="https://www.youtube.com/channel/UCINr5W7cwW06ADtsszAToAw" target="_blank">
						<img src="ytb.png"height="60px"></a>
					</ul>
				</div>
			</div>
		</div>		
	</div>
<!------ js for Toggle Form ------>	
