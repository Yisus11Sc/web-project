<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      if (isset($_SESSION['user'])) {
         $this->render('dashboard', array($_SESSION['user']));
      } else {
         header('Location: http://project.test/login');
      }
   }
}
