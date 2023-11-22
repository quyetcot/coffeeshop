<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class ContactController extends Controller
{

    public function index() {
        $this->renderClient('contact');
    }
}
