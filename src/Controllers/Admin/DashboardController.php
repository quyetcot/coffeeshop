<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;


class DashboardController extends Controller {

    
    public function index() {
       

        $this->renderAdmin("dashboard");
    }

}