<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function destroy()
   {
      if (isset($_SESSION['user'])) {
         unset($_SESSION['user']);
         header('Location: http://project.test/login');
      }
      header('Location: http://project.test/login');
   }
}