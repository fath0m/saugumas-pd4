<?php include_once "../bootstrap.php";

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        render("login");
        break;

    case "POST":
        $username = $_POST["username"];
        $password = $_POST["password"];

        $file = get_file_by_username($username);

        if (!$file || !password_verify($password, $file[0])) {
            redirect("back", "Invalid credentials");
        }

        set_user([
            "username" => $username,
            "password" => $password,
        ]);

        redirect("/", "Logged in successfully");

    default:
        bad_request();
        break;
}