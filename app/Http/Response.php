<?php

namespace App\Http;

class Response {

   public function render(string $view, array $data = []) 
   {
      $this->data = $data;
      include './../resources/views/' . $view . '.php';
   }

   public function renderWithErrors(string $view, array $data = [], array $errors = [])
   {
      $this->data = $data;
      $this->errors = $errors;
      include './../resources/views/' . $view . '.php';
   }
}