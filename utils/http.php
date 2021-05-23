<?php

function redirect(string $url, string $message = null) : void
{
    if ($url === "back") {
        $url = $_SERVER['HTTP_REFERER'];
    }

    if ($message) {
        set_message($message);
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