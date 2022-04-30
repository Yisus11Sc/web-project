<?php

namespace App\Web;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Response;

session_start();

// Define routes

// This route handling function will only be executed when visiting http(s)://www.example.org/about
if ($_SERVER['REQUEST_URI'] === "/" && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $controller = new HomeController();
   $controller->index();
} else if ($_SERVER['REQUEST_URI'] === "/login" && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $controller = new LoginController();
   $controller->index();
} else if ($_SERVER['REQUEST_URI'] === "/login" && $_SERVER['REQUEST_METHOD'] === 'POST') {
   $controller = new LoginController();
   $controller->login();
} else if ($_SERVER['REQUEST_URI'] === "/register" && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $controller = new RegisterController();
   $controller->index();
} else if ($_SERVER['REQUEST_URI'] === "/register" && $_SERVER['REQUEST_METHOD'] === 'POST') {
   $controller = new RegisterController();
   $controller->register();
} else if ($_SERVER['REQUEST_URI'] === "/logout" && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $controller = new LogoutController();
   $controller->destroy();
} else if ($_SERVER['REQUEST_URI'] === "/dashboard" && $_SERVER['REQUEST_METHOD'] === 'GET') {
   $controller = new DashboardController();
   $controller->index();
} else {
   $response = new Response();
   $response->render('errors/404');
}