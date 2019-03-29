<?php 
$pageTitle = "Crud/Search";
  ob_start();

 
// connect to db
include_once('../remote/dbconnect.php');


// required when using LIMIT in SQL query (see bottom)
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


// CRUD

// Create
$title = "Faith equation";
$body = "From whence the glory came and until the mount is once again populated";
$author = "JC";
//$sql = "INSERT INTO Users(title, body, author) VALUES(:title, :body, :author)";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
  // echo 'User added';


// Read
$sql = "SELECT * FROM Users";
$stmt = $pdo->prepare($sql);
$stmt->execute([$sql]);
$users = $stmt->fetchAll();

foreach($users as $user){
  echo "<p />" . $user->title;
}


// Update
$id = 1;
$title = 'Updating the title of post id 1';
//$sql = "UPDATE Users SET title = :title WHERE id = :id";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'id' => $id]);
  // echo 'Post Updated';


// Delete
$id = 8;
//$sql = "DELETE FROM Users WHERE id = :id";
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post deleted';


// Search    (using the LIKE operator)
$search = "%faith%";
// $sql = "SELECT * FROM Users WHERE title LIKE ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//   echo $user->title . "<br />";
// }


// Limit
// $limit = 1;
// $sql = "SELECT * FROM Users WHERE author = ? LIMIT ?";
// // $sql = "SELECT * FROM Users";
// $stmt = $pdo->prepare($sql);
// // $stmt->execute([$sql]);
// $stmt->execute([$author, $limit]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//   echo $user->title . "<br />";
// }


$content = ob_get_clean();
include "master.php"; 
