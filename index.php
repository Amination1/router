<?php
$url = parse_url($_SERVER['REQUEST_URI'])["path"];
//print_r($url);
function route($url)
{
    require "pages/{$url}.php";
    die();
}
if ($url == "/") {
    echo "Type any name after / in url";

}

route($url);
