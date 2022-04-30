<?php

class Skill {
   
   private $id;
   private $name;
   private $progress;
   private $userId;

   public function __construct(int $id, string $name, int $progress, int $userId)
   {
      $this->id = $id;
      $this->name = $name;
      $this->progress = $progress;
      $this->userId = $userId;
   }

   public function setId(int $id)
   {
      $this->id = $id;
   }

   public function getId():int
   {
      return $this->id;
   }

   public function setName(int $name)
   {
      $this->name = $name;
   }

   public function getName(): string
   {
      return $this->name;
   }

   public function setUserId(int $userId)
   {
      $this->userId = $userId;
   }

   public function getUserId() :int
   {
      return $this->userId;
   }

}
