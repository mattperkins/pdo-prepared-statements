<?php 
$pageTitle = "Prepared Statements - Positional:All";
  ob_start();

 
// connect to db
include_once('../remote/dbconnect.php');

// Prepared Statements (prepare and execute)
// Seperates instruction from data

// unsafe approach <- never use the following:
// $sql = "SELECT * FROM Users WHERE author = '$author'";
  
// fetch Users with prepared statements approach:
// positional parameters or named parameters

$author = "Sandy";

  // Positional Parameters ( method using a ? ) 
$sql = "SELECT * FROM Users";
$stmt = $pdo->prepare($sql);
  // array variable replaces the ? above
$stmt->execute([$sql]);
$users = $stmt->fetchAll();

// display all raw db data to screen
// var_dump($users);

// render all posts to screen;
  foreach($users as $user):
?>
    <h3><?php echo '<p />' . $user->title . '<br />'; ?></h3>  
    <p><?php echo '<p />' . $user->body . '<br />'; ?></p>
<?php 
  endforeach;


// get db Table row count using 'Positional' method
$stmt = $pdo->prepare("SELECT * FROM Users WHERE author = ?");
$stmt->execute([$author]);
$postCount = $stmt->rowCount();

?>

<code>
  Post count for author <?php echo $author . " = " . $postCount; ?>
</code>

<?php 
$content = ob_get_clean();
include "master.php"; 

 ?>
