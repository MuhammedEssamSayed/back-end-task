<?php


class MyPdo
{
  private $server ; //localhost
  private $dbname ; //shopping
  private $username ; //root
  private $userpswd ;//''

  function  connect()
  {
      $this->server = "localhost";
      $this->dbname = "shopping";
      $this->username = "root";
      $this->userpswd = "";
      try 
      {
        $db = "mysql:host=$this->server;dbname=$this->dbname;port=3306";
        $conn = new PDO($db , $this->username , $this->userpswd );
        return $conn;
        // echo "connected";
      }
      catch(PDOException $e)
      {
          echo "connection failed ". $e->getMessage();
      }

    //  $db = "mysql:"
  }


     
}
