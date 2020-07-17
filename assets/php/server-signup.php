<?php

// Connect to database
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=mail', 'root', '');
} catch (PDOException $e) {
    echo '<h1>Whoops, something went wrong</h1>';
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo '<br>';
    exit();
}

$customer = [
  'name' => isset($_POST['name']) ? $_POST['name'] : NULL,
  'email' => isset($_POST['email']) ? $_POST['email'] : NULL,
  'created_at' => date("d-m-y"), 
];

$db->prepare("
  INSERT INTO newsletters (name, email, created_at) VALUES (:name, :email, :created_at)
")->execute($customer);

// Redirect browser
header("Location: http://localhost/projects");
exit();