<!DOCTYPE html>
<html lang="hu">
    <title>Keresés - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>
<br><br><br><br><br><br><br><br><br><br>

<?php
// Retrieve the search query parameter from the URL
$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';
?>

<p style="margin: 30px">Keresett szó: <?php echo $search_query; ?></p>

<p style="margin: 30px">Találatok:</p>
<?php
// Add your search logic here and display the search results accordingly
// For example, you can query your database or perform any other search operation
// and then display the results in this section
?>
</body>
</html>
