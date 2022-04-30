<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      echo "Mostar página principal";
   }
}