<?php

function middleware_logged_in() : void
{
    if (!user()) {
        redirect("/login.php", "Please login to the system");
    }
}

function middleware_logged_out() : void
{
    if (user()) {
        redirect("/");
    }
}