<?php

class Testimonial {
   
   private $id;
   private $name;
   private $title;
   private $text;
   private $thumbnail;
   private $photo;
   #foreign key
   private $userId;

   public function __construct
   (
      int $id,
      string $name,
      string $title,
      string $text,
      string $photo,
      int $userId
   )
   {
      $this->id = $id;
      $this->name = $name;
      $this->title = $title;
      $this->text = $text;
      $this->photo = $photo;
      $this->userId = $userId;
   }

   public function setId(int $id)
   {
      $this->id = $id;
   }

   public function getId() 
   {
      return $this->id;
   }

   public function setName(string $name)
   {
      $this->name = $name;
   }

   public function getName(): string
   {
      return $this->name;
   }

   public function setTitle(string $title)
   {
      $this->title = $title;
   }

   public function getTitle(): string
   {
      return $this->title;
   }

   public function setText(string $text)
   {
      $this->text = $text;
   }

   public function getText(): string
   {
      return $this->text;
   }

   public function setPhoto(string $photo)
   {
      $this->photo = $photo;
   }

   public function getPhoto(): string
   {
      return $this->photo;
   }

   public function setUserId(string $userId)
   {
      $this->userId = $userId;
   }

   public function getUserId(): int
   {
      return $this->userId;
   }
}