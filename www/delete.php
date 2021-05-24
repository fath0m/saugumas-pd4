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
        render("delete");
        break;

    case "POST":
        $current = get_file_by_username(user()["username"]);

        unset($current[3 * $id + 1]);
        unset($current[3 * $id + 2]);
        unset($current[3 * $id + 3]);

        write_file_by_username(user()["username"], $current);
        redirect("/", "Password deleted successfully");

    default:
        bad_request();
        break;
}