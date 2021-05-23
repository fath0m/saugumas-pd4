<?php include_once "../bootstrap.php";

switch ($_SERVER["REQUEST_METHOD"]) {
	case "GET":
		render("register");
		break;

	case "POST":
		echo "Registering...";

		$username = $_POST["username"];
		$password = $_POST["password"];
		$password_confirmation = $_POST["password_confirmation"];
		
		break;
	
	default:
		bad_request();
		break;
}