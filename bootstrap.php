<?php

include __DIR__ . "/vendor/autoload.php";
session_start();

// Global include
function get_incl(string $file) : string
{
    return __DIR__ . "/" . $file . ".php";
}

include_once get_incl("utils/http");
include_once get_incl("utils/template");