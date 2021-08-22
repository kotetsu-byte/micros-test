<?php
function Delete()
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
  
  $sql = "DELETE FROM account WHERE
          type = {$type}, category = {$category}, 
          sm = {$sum},
          total = {$total},comment = {$comment});";
  mysqli_query($conn, $sql);
  
}

Delete();