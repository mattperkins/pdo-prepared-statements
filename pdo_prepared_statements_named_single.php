<?php 
$pageTitle = "Prepared Statements - Named:Single";
  ob_start();

 
// connect to db
include_once('dbconnect.php');


// Prepared Statements (prepare and execute)
// Seperates instruction from data

// unsafe approach <- never use the following:
// $sql = "SELECT * FROM Users WHERE author = '$author'";
  
// fetch Users with prepared statements approach:
// positional parameters or named parameters

// User input 
$id = 3;

  // Named Parameters ( method using : )
$sql = "SELECT * FROM Users WHERE id = :id";
$stmt = $pdo->prepare($sql);
  // array variable replaces the ? above
$stmt->execute(['id' => $id]);
$user = $stmt->fetch();


  // display all raw db data to screen
// var_dump($users);

  echo '<p />' . $user->title . '<br />';


$content = ob_get_clean();
include "master.php"; 
