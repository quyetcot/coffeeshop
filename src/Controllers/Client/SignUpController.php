<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;

class SignUpController extends Controller
{

    public function indexsign() {
        $this->renderLog('signup');
        
    }
    public function indexlog() {
        $this->renderLog('login');
        
    }
}