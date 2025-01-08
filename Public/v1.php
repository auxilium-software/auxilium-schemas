<?php

use App\Wrappers\TwigWrapper;

require_once __DIR__ . "/../vendor/autoload.php";


$availableSchemas = [];
$files = array_diff(
    scandir(directory: __DIR__ . "/v1"),
    ['.', '..']
);
foreach($files as $file)
    $availableSchemas[] = str_replace(search: '.php', replace: '', subject: $file);



TwigWrapper::RenderTwig(
    target: "Pages/v1.html.twig",
    arguments: [
        "AvailableSchemas" => $availableSchemas,
    ]
);
