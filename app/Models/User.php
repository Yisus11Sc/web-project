<?php 

/**
 * @author Fernando Defez
 */

   class User {

      private $id;
      private $name;
      private $fatherslastname;
      private $motherslastname;
      private $email;
      private $second_email;
      private $password;
      private $secret_password;
      private $phone_number;
      private $smartphone_number;
      private $age;
      private $address;
      private $lang;
      private $thumbnail;
      private $logo;
      private $template;
      private $template_usa;
      private $qr;
      private $payment_link;
      private $payment_date;
      private $starting_date;
      private $ending_date;

      /*
      `Productos` tinyint(2) NOT NULL DEFAULT '1',
      `U_Habilidades` tinyint(2) NOT NULL DEFAULT '0',
      `U_Experiencia` tinyint(2) NOT NULL DEFAULT '0',
      `U_Certificado` tinyint(2) NOT NULL DEFAULT '0',
      `U_Referencia` tinyint(2) NOT NULL DEFAULT '0',
      `Externalid` int(10) DEFAULT NULL,
      `OriginId` int(10) DEFAULT NULL,
      `eng` tinyint(10) DEFAULT '0',
      `activo` tinyint(10) NOT NULL DEFAULT '1',
      */
      
      public function __construct(int $id, string $name) {
         
      }
      public function setID() {

      }

      public function getID() {

      }

      public function setName() {
      }

      public function setFathersLastname() {
      }

      public function getFathersLastname() {
      }

      public function setMohersLastname() {
      }

      public function getMohersLastname() {
      }
      
   }