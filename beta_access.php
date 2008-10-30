<?php
require('token.php');
require('cookie.php');
if (!empty($_COOKIE['cookie'])) {
    $cookie = unserialize(base64_decode($_COOKIE['cookie']));
}
else if (!empty($_POST['username']) && !empty($_POST['coffee'])) {
    $token = new Token($_POST['coffee'], $_POST['username']);
    $cookie = new Cookie();
    $cookie->username = $_POST['username'];
    $cookie->coffee = $_POST['coffee'];
    $cookie->token = "STARBUG-$token";
    setcookie("cookie", base64_encode(serialize($cookie)));
}
else {
    header("Location: index.php");
    exit(-1);
}
?>

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
		<br />
		<?php
                        print $cookie;
		?>
	</div>
</body>
</html>
