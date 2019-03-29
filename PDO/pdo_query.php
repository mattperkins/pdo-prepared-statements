<?php 
$pageTitle = "PDO Raw Queries";
  ob_start();

 
// connect to db
include_once('../remote/dbconnect.php');


  // PDO query variable
$stmt = $pdo->query('SELECT * FROM Users');


  // PDO query as foreach loop rendering db data as object
foreach ($stmt as $row){
  echo $row->title . '<br />';
}



  // fetch as an array rendering data from db with no PDO params
// while($row = $stmt->fetch()){
//   echo $row['body'] . '<br />';
// }


// fetch as an array rendering data from db with PDO params
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//   echo $row['title'] . '<br />';
// }
  
  // fetch as an object rendering data from db with PDO params
// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//   echo $row->title . '<br />';
// }

 // fetch using setAttribute/configured in dbconnect.php (as FETCH_OBJ)
// while($row = $stmt->fetch()){
//   echo $row->title . '<br />';
// }


  // fetch all with column number with no PDO params
// $results = $stmt->fetchAll();
// foreach($results as $row) {
//   $title = htmlentities($row['1']);
//   echo $title . " " . "<br />";
// }

  // fetch all with column name with no PDO params
// $results = $stmt->fetchAll();
// foreach($results as $row) {
//   $title = htmlentities($row['title']);
//   echo $title . " " . "<br />";
// }

  // fetch all with specified PDO parameters (column numbers)
// $results = $stmt->fetchAll(PDO::FETCH_NUM);
// foreach($results as $row) {
//   $title = htmlentities($row['1']);
//   echo $title . " " . "<br />";
// }

  // fetch all with specified PDO parameters (column names)
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach($results as $row) {
//   $title = htmlentities($row['title']);
//   echo $title . " " . "<br />";
// }




// fetch performs a new query for every row requested using less memory but requires more queries
// fetchAll maps all db data to an array which uses more memory but only requires a single query
// also can use PDO::FETCH_NUM and PDO::FETCH_BOTH

$content = ob_get_clean();
include "master.php"; 

?>


