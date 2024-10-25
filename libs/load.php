<?php

include_once 'includes/Database.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Session.class.php';

Session::start();

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/SharePics/_templates/$name.php";
}

function validate_credentials($username, $password)
{
    if ($username == "PK@test.sher" and $password == "123456") {
        return true;
    } else {
        return false;
    }
}
