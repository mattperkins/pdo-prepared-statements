<?php 
include_once('dbconnect.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $metaTitle ?></title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel='stylesheet' href='style.css'>
</head>
<body>
<header class="mb-2">
<nav class="mb-2">
  <a href="pdo_query.php">PDO raw query</a>
<a href="pdo_prepared_statements_positional.php">Positional</a>
<a href="pdo_prepared_statements_positional_all.php">All</a>
<a href="pdo_prepared_statements_named.php">Named</a>
<a href="pdo_prepared_statements_named_single.php">Single</a>
<a href="pdo_crud_and_search.php">CRUD/Search</a>
</nav>
<h4>PDO <?php echo $pageTitle ?></h4>
</header> 
<code>Database results:</code>
<main>

<?php echo $content; ?>

</main>
</body>
</html>

