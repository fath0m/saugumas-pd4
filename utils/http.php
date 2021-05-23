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

function querystring_append(string $query) : string
{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parsedUrl = parse_url($url);
    if ($parsedUrl['path'] == null) {
        $url .= '/';
    }
    $separator = ($parsedUrl['query'] == NULL) ? '?' : '&';
    if(!substr_count($url,$query)) $url .= $separator . $query;
    return $url;
}