<?php 
// connect to db
include_once('../remote/dbconnect.php');

$sql = "DELETE FROM Users ORDER BY id DESC LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$dbo = null;

echo "New data successfully deleted from database <br />";

echo "<a href='pdo_prepared_select_all.php'>Back</a><br />";
?>