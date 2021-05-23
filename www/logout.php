<?php

include_once "../bootstrap.php";
middleware_logged_in();

del_user();
redirect("/login.php", "Successfully logged out");