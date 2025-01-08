<?php

namespace App\Wrappers;

use JetBrains\PhpStorm\NoReturn;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigWrapper
{
    public FilesystemLoader $loader;
    public Environment $twig;

    public function __construct()
    {

        $this->loader = new FilesystemLoader(dirname($_SERVER["DOCUMENT_ROOT"]) . "/Templates/");
        $this->twig = new Environment($this->loader, ["debug" => true]);

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

    }
    #[NoReturn] public static function RenderTwig(string $target, array $arguments) : void
    {
        $twigRenderer = new TwigWrapper();
        echo $twigRenderer->twig->render($target, $arguments);
        die();
    }
}
