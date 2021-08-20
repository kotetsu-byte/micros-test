<?php
function Delete()
{
  $server = "localhost";
  $username = "jalol";
  $password = "rootroot";
  $database = "accountDB";

  $conn = new mysqli($server, $username, $password);
  
  $sql = "CREATE TABLE account (";
  $sql .= "type VARCHAR(50)";
  $sql .= "category VARCHAR(50),";
  $sql .= "sum INT,";
  $sql .= "total INT),";
  $sql .= "comment VARCHAR(100));";
  
  mysqli_query($conn, $sql);
  
  
  $type = $_POST["atype"];
  $category = $_POST["acategory"];
  $sum = $_POST["asum"];
  $total = $_POST["atotal"];
  $comment = $_POST["acomment"];
  
  $sql = "DELETE FROM account WHERE";
  $sql .= "type = {$type}, category = {$category},"; 
  $sql .= "sum = {$sum},";
  $sql .= "total = {$total},comment = {$comment});";
  mysqli_query($conn, $sql);
  
  mysql_close($conn);
}

Delete();