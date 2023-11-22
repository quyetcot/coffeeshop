<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class AboutController extends Controller
{

    public function index() {
        $this->renderClient('about');
    }
}
