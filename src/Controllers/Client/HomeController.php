<?php

namespace Minhhai\Xuongoop\Controllers\Client;

use eftec\bladeone\BladeOne;
use Minhhai\Xuongoop\Commons\Cotroller;
use Minhhai\Xuongoop\Commons\Helper;
use Minhhai\Xuongoop\Models\User;

class HomeController extends Cotroller
{
    public function index()
    {
        $user = new User();
        Helper::debug($user);
        $name = "Minh Hải";
        $this->renderViewClient('home',[
            'name'=> $name
        ]);
    }
}
