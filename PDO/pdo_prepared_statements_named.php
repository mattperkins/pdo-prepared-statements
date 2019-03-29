<?php 
$pageTitle = "Prepared Statements - Named:All";
  ob_start();

 
// connect to db
include_once('../remote/dbconnect.php');

// Prepared Statements (prepare and execute)
// Seperates instruction from data

// unsafe approach <- never use the following:
// $sql = "SELECT * FROM Users WHERE author = '$author'";
  
// fetch Users with prepared statements approach:
// positional parameters or named parameters

// User input 
$id = 2;
$is_published = true;

  // Named Parameters ( method using : )
$sql = "SELECT * FROM Users WHERE id = :id && $is_published = :is_published";
$stmt = $pdo->prepare($sql);
  // array variable replaces the ? above
$stmt->execute(['id' => $id, 'is_published' => $is_published]);
$users = $stmt->fetchAll();


  // display all raw db data to screen
// var_dump($users);

foreach($users as $user){
  echo '<p />' . $user->title . '<br />';
}

$content = ob_get_clean();
include "master.php"; 

?>

