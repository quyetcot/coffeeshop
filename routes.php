<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\ProductController;
use Ductong\BaseMvc\Controllers\Client\DetailProductController;
use Ductong\BaseMvc\Controllers\Client\AboutController;
use Ductong\BaseMvc\Controllers\Client\ContactController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\MenuController;
use Ductong\BaseMvc\Controllers\Client\ServiceController;
use Ductong\BaseMvc\Controllers\Client\SignUpController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/detail_product', DetailProductController::class, 'index');
$router->addRoute('/signup', SignUpController::class, 'indexsign');
$router->addRoute('/login', SignUpController::class, 'indexlog');
$router->addRoute('/menu', MenuController::class, 'index');
$router->addRoute('/about', AboutController::class, 'index');
$router->addRoute('/service', ServiceController::class, 'index');
$router->addRoute('/contact', ContactController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');