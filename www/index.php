<?php include_once "../bootstrap.php";
middleware_logged_in();

$passwords = get_file_by_username(user()["username"], true)["passwords"];

if (isset($_GET["search"])) {
    $query = strtolower($_GET["search"]);

    $passwords = array_filter($passwords, function($password) use ($query) {
        $name = strtolower($password["name"]);
        $description = strtolower($password["description"]);

        return str_contains($name, $query) || str_contains($description, $query);
    });
}

render("index", [
    "passwords" => $passwords,
]);