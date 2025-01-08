<?php

use App\Wrappers\TwigWrapper;

require_once __DIR__ . "/../vendor/autoload.php";
TwigWrapper::RenderTwig(
    target: "Pages/index.html.twig",
    arguments: [

    ]
);
