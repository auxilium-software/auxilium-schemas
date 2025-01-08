<?php


$baseDir = __DIR__ . "/Public";

$routes = [
    "/"                     => "$baseDir/index.php",
    "/v1"                   => "$baseDir/v1.php",

    "/v1/case.json"         => "$baseDir/v1/case.php",
    "/v1/collection.json"   => "$baseDir/v1/collection.php",
    "/v1/document.json"     => "$baseDir/v1/document.php",
    "/v1/enum.json"         => "$baseDir/v1/enum.php",
    "/v1/message.json"      => "$baseDir/v1/message.php",
    "/v1/organisation.json" => "$baseDir/v1/organisation.php",
    "/v1/user.json"         => "$baseDir/v1/user.php",
];

$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);

foreach ($routes as $route => $file)
{
    if ($path == $route || $path == "$route/")
    {
        require_once $file;
        return true;
    }
}

http_response_code(404);
echo "404 Not Found: The requested URL \"$path\" was not found on this server.";
die();
