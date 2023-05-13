<?php

abstract class open 
{
   
   public $conn;
   public $servername ="localhost";
   public $username="root";
   public $password="";
   public $dbname="ant";

   public function _construct()
   {
      
    $this->conn= new mysqli($this->servername,$this->username,$this->password);
    
    
    
   }
   abstract public function dbname(): string;

   
   
}

class database extends open
{
   public function dbname(): string;
   {
      $db= "CREATE DATABASE IF NOT EXISTS $this->dbname";
      return $this->conn->query($db);
      
   }
   
}

$d= new open();
$d->dbname();
