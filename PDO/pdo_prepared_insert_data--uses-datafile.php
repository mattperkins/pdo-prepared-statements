<!-- load this page in browser and refresh db table -->
<?php 
// connect to db
include_once('../remote/dbconnect.php');

// adds string data / content for sql query
// include_once('datafile.php');

$sql = "INSERT INTO Users(title, body, author, is_published)
SELECT :title, :body, :author, :is_published FROM DUAL WHERE NOT EXISTS(SELECT title FROM Users WHERE title=:title AND body=:body)";

$stmt = $pdo->prepare($sql);
$stmt->execute(array(
  "title" => $title,
  "body" => $body,
  "author" => $author,
  "is_published" => $is_published,
));

$dbo = null;
echo "New data successfully inserted to database <br />";

echo "<a href='pdo_prepared_select_all.php'>Back</a> <br />";
?>
