<?php include_once "../bootstrap.php";
middleware_logged_in();

$passwords = get_file_by_username(user()["username"], true)["passwords"];

render("index", [
    "passwords" => $passwords,
]);