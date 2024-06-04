<?php 
namespace Minhhai\Xuongoop\Controllers\Admin;

use Minhhai\Xuongoop\Commons\Cotroller;

class DashboardController extends Cotroller{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}