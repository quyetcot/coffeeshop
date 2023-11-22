<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class MenuController extends Controller
{

    public function index() {
        $this->renderClient('menu');
    }
}
