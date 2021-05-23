<?php

function set_user($user = []) : void
{
	$_SESSION["user"] = set_user();
}

function user() : ?array
{
    return $_SESSION["user"] ?? null;
}

function del_user() : void
{
	unset($_SESSION["user"]);
}

function set_message(string $message) : void
{
	$_SESSION["message"] = $message;
}

function message() : ?string
{
	return $_SESSION["message"] ?? null;
}

function del_message() : void
{
	unset($_SESSION["message"]);
}