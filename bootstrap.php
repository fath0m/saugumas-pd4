<?php

include __DIR__ . "/vendor/autoload.php";
session_start();

// Global include
function get_incl(string $file) : string
{
    return __DIR__ . "/" . $file . ".php";
}

const STORAGE_LOCATION = __DIR__ . "/storage/";
const STORAGE_KEY = "mZq4t7w!z%C&F)J@NcRfUjXn2r5u8x/A";

include_once get_incl("utils/files");
include_once get_incl("utils/session");
include_once get_incl("utils/http");
include_once get_incl("utils/template");
include_once get_incl("utils/password");

include_once get_incl("middleware/auth");