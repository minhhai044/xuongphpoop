<?php
use Minhhai\Xuongoop\Controllers\Client\AboutController;
use Minhhai\Xuongoop\Controllers\Client\ContactController;
use Minhhai\Xuongoop\Controllers\Client\HomeController;
//Web có các trang là : 
//trang chủ
//giới thiệu
//sản phẩm
//chi tiết sản phẩm
//liên hệ

//1.để định nghĩ được đầu tiên ta phải tạo Controller
//2.Khai báo function trang đó
//3.định nghĩa đường dẫn

//HTTP Method get,post,put,delete

$router->get('/',       HomeController::class .'@index');
$router->get('/about',  AboutController::class .'@index');


$router->get('/contact',        ContactController::class .'@index');
$router->post('/contact/store',  AboutController::class .'@store');


$router->get('/products',       AboutController::class .'@index');
$router->get('/products/{id}',  AboutController::class .'@detail');
