<?php

try {
  $dbh = new PDO('mysql:host=localhost;dbname=admin_test', 'admin_g', '0000147');
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}
