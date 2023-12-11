<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\ProductController;
use Ductong\BaseMvc\Controllers\Admin\CommentController;
use Ductong\BaseMvc\Controllers\Client\DetailProductController;
use Ductong\BaseMvc\Controllers\Client\AboutController;
use Ductong\BaseMvc\Controllers\Client\CartController;
use Ductong\BaseMvc\Controllers\Client\ContactController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\LoginController;
use Ductong\BaseMvc\Controllers\Client\MenuController;
use Ductong\BaseMvc\Controllers\Client\PayController;
use Ductong\BaseMvc\Controllers\Client\RegisterController;
use Ductong\BaseMvc\Controllers\Client\ServiceController;
use Ductong\BaseMvc\Controllers\IndexController;
use Ductong\BaseMvc\Controllers\Client\LogoutController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', IndexController::class, 'index');

//cart
$router->addRoute('/pay', PayController::class, 'index');
$router->addRoute('/cart', CartController::class, 'index');
$router->addRoute('/createOrder', CartController::class, 'createOrder');
$router->addRoute('/removeFromCart', CartController::class, 'removeFromCart');
$router->addRoute('/incrementQuantity', CartController::class, 'incrementQuantity');
$router->addRoute('/decrementQuantity', CartController::class, 'decrementQuantity');

$router->addRoute('/admin/comments', CommentController::class, 'index');
$router->addRoute('/admin/comments/create', CommentController::class, 'create');
$router->addRoute('/admin/comments/update', CommentController::class, 'update');
$router->addRoute('/admin/comments/delete', CommentController::class, 'delete');

$router->addRoute('/detail_product', DetailProductController::class, 'index');
$router->addRoute('/menu', MenuController::class, 'index');
$router->addRoute('/about', AboutController::class, 'index');
$router->addRoute('/home', HomeController::class, 'index');
$router->addRoute('/service', ServiceController::class, 'index');
$router->addRoute('/contact', ContactController::class, 'index');

$router->addRoute('/login', LoginController::class, 'index');
$router->addRoute('/logout', LogoutController::class, 'index');
$router->addRoute('/register', RegisterController::class, 'create');


$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/orders', CartController::class, 'show_order');
$router->addRoute('/admin/orders/update', CartController::class, 'update');


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