<?php 
$pageTitle = "Prepared Statements - Positional:Single";
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
$author = 'Fred Cruis';

  // Positional Parameters ( method using a ? ) 
$sql = "SELECT * FROM Users WHERE author = ?";
$stmt = $pdo->prepare($sql);
  // array variable replaces the ? above
$stmt->execute([$author]);
$users = $stmt->fetchAll();

  // display all raw db data to screen
// var_dump($users);

foreach($users as $user){
  echo '<p />' . $user->title . '<br />';
}

$content = ob_get_clean();
include "master.php"; 

?>

