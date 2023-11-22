<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class ServiceController extends Controller
{

    public function index() {
        $this->renderClient('service');
    }
}
