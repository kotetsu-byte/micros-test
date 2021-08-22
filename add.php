<?php
function Add()
{
  $type = $_GET["type"];
  $category = $_GET["category"];
  $sum = $_GET["sum"];
  $total = $_GET["total"];
  $comment = $_GET["comment"];
  
  $server = "localhost";
  $username = "jalol";
  $password = "rootroot";
  $database = "accountdb";

  $conn = new mysqli($server, $username, $password, $database);

  $sql = "INSERT INTO account VALUES(
        {$type}, {$category}, {$sum},
        {$total}, {$comment});";
  
  mysqli_query($conn, $sql);
}

Add();