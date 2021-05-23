<?php

include_once "../bootstrap.php";

switch ($_SERVER["REQUEST_METHOD"]) {
    case "GET":
        render("new");
        break;

    case "POST":
        $name = $_POST["name"];
        $password = $_POST["password"];
        $description = $_POST["description"];

        $current = get_file_by_username(user()["username"]);
        $new = array_merge($current, [$name, password_encrypt($password), $description]);
        write_file_by_username(user()["username"], $new);

        redirect("/", "Password saved");

        break;

    default:
        bad_request();
        break;
}