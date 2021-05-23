<?php

function redirect(string $url, string $error = null, string $success = null) : void
{
    if ($url === "back") {
        $url = $_SERVER['HTTP_REFERER'];
    }

    if ($error) {
        set_error($error);
    }

    if ($success) {
        set_success($success);
    }

    header('Location: ' . $url, true, 303);
    die();
}

function not_found() : void
{
    header("HTTP/1.0 404 Not Found");
    die();
}

function bad_request() : void
{
    header("HTTP/1.0 400 Bad Request");
    die();
}