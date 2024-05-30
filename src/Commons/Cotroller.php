<?php

namespace Minhhai\Xuongoop\Commons;

use eftec\bladeone\BladeOne;

class Cotroller
{
    protected function renderViewClient($view, $data)
    {
        $templatePath = __DIR__ . "/../Views/Client";
        $compiledPath = __DIR__ . "/../Views/Compiles";
        $blade = new BladeOne($templatePath, $compiledPath);
        echo $blade->run($view, $data);
    }
    protected function renderAdminClient($view, $data)
    {
        $templatePath = __DIR__ . "/../Views/Admin";
        $compiledPath = __DIR__ . "/../Views/Compiles";
        $blade = new BladeOne($templatePath, $compiledPath);
        echo $blade->run($view, $data);
    }
}
