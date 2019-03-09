<?php 
// connect to db
include_once('dbconfig.php');
if(!$conn){
  echo "connection error: " . mysqli_connect_error();
}

//  set data source name (DSN)
$dsn = 'mysql:host='. $DBHOST .';dbname=' . $DBNAME;

// create PDO instance
try {
  $pdo = new PDO($dsn, $DBUSER, $DBPASS);
  // var_dump($pdo);
} catch(Exception $e) {
  // echo $e->getMessage();
  echo "<p>An error has occurred</p>";
}

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

 ?>