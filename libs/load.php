<?php

function load_template($name)
{

    // print(include __DIR__ . "/../_templates/$name.php");
    // (This is not consistant way if you move this file to the another place it will show an error)

    include $_SERVER['DOCUMENT_ROOT'] . "/SharePics/_templates/$name.php";
}