<?php

class MailNotification implements Notification {


   private $to;
   private $title;
   private $message;
   private $header;
   
   public function __construct(string $to, string $title, string $message, string $header) {
      
      $this->to = $to;
      $this->title = $title;
      $this->message = $message;
      $this->header = $header;
      /***
       * This is how a mail is sent
       * $to        = 'nobody@example.com';
       * $titulo    = 'El título';
       * $cabeceras = 'From: webmaster@example.com' . "\r\n" . 'Reply-To: webmaster@example.com' . "\r\n" * . 'X-Mailer: PHP/' . phpversion();
       */
   }

   public function send() {
      mail(
         $this->to,
         $this->title,
         $this->message,
         $this->header
      );
   }
}