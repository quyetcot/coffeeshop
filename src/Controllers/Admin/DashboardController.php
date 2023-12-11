<?php 

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Dashboard;

class DashboardController extends Controller {
    
    public function index() {
        $dashboard = (new Dashboard())->getProductCountByCategory();
        $totalQuantity = (new Dashboard())->getTotalQuantity();
        $totalUser =(new Dashboard())->getTotalUser();
        $totalBill =(new Dashboard())->getTotalBill();
        $totalSale =(new Dashboard())->getTotalSale();

        $this->renderAdmin('dashboard', [
            'dashboard' => $dashboard,
            'totalQuantity' => $totalQuantity,
            'totalUser' => $totalUser,
            'totalBill' => $totalBill,
            'totalSale' => $totalSale,
        ]);
    }
}
