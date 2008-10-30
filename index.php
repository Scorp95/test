<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Coffee Database</title>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>
	<div id="f">
		<img src='./image/logo.png' id='logo'>
		<h2>Coffee Database</h2>
		<?php
			if(isset($_POST['username'])){
					echo "<br /><p id='left'>Welcome  ".htmlentities($_POST['username'])."</p><br />";
					?>
					<form action="beta_access.php" method="post">
                                                <input type="hidden" name="username" value="<?php echo $_POST['username']; ?>" >
						<select name="coffee">
							<option>Mocca Latte</option>
							<option>Cappuccino</option>
							<option>Café au lait</option>
							<option>Americano</option>
							<option>Frappuccino</option>
							<option>Espresso</option>
							<option>Irish coffee</option>
							<option>Vienna coffee</option>
							<option>Turkish coffee</option>
							<!-- <option value="Beer">Beer</option> -->
						</select>
					<br /><br />
					<input type=submit value="Generate your token" name="tok" class="button">
					</form>
					<?php	
			}
			else{
				?>
				<form action='' method="post">
					<input type="text" name="username" class="text-field" placeholder="What's your name?" />
	   				<input type="submit" value="Ask for free coffee !" class="button" />
				</form>

				<?php
			}
		?>
</div>
</body>
</html>
