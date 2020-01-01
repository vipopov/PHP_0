<?php
 // https://prowebmastering.ru/php-pdo-start.html
try {
  $db = new PDO('mysql:host=localhost;dbname='.$cf::$DB_NAME, $cf::$DB_USER, $cf::$DB_PASSWORD);
} catch (PDOException $e) {
  print "Database PDO Error!: " . $e->getMessage();
  die();
}