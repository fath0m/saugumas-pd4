<?php

include_once "../bootstrap.php";
middleware_logged_in();

$passwords = get_file_by_username(user()["username"], true)["passwords"];

if (!isset($_GET["id"])) {
    bad_request();
}

$id = intval($_GET["id"]);
$password = $passwords[$id];

if (!$password) {
    not_found();
}

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        render("edit", [
            "password" => $password,
        ]);
        break;

    case "POST":
        $name = $_POST["name"];
        $password = $_POST["password"];
        $description = $_POST["description"];

        $current = get_file_by_username(user()["username"]);

        $current[3 * $id + 1] = $name;
        $current[3 * $id + 2] = password_encrypt($password);
        $current[3 * $id + 3] = $description;

        write_file_by_username(user()["username"], $current);
        redirect("/", "Password updated successfully");

    default:
        bad_request();
        break;
}