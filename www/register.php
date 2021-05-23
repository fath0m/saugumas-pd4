<?php include_once "../bootstrap.php";

switch ($_SERVER["REQUEST_METHOD"]) {
	case "GET":
		render("register");
		break;

	case "POST":
	    $username = $_POST["username"];
		$password = $_POST["password"];
		$password_confirmation = $_POST["password_confirmation"];

		if ($password !== $password_confirmation) {
			redirect("back", "Password confirmation does not match");
		}

        $existing_file = file_get_contents(STORAGE_LOCATION . $username . ".txt");

		if ($existing_file) {
		    redirect("back", "User already exists");
        }

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        write_file_by_username($username, [$hashed_password]);

        set_user([
            "username" => $username,
        ]);

        redirect("/", "Account created successfully!");
	
	default:
		bad_request();
		break;
}