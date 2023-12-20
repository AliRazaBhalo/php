<?php
    $connection = ('localhost', 'root', '', 'page1');
    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      
?>