<!DOCTYPE html>
<html lang="hu">
    <title>Keresés - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>
<br><br><br><br><br><br><br><br><br><br>

<?php
$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';
?>

<p style="margin: 30px">Keresett szó: <?php echo $search_query; ?></p>

<?php
$search_results = [];

?>

<p style="margin: 30px">Találatok: <?php echo count($search_results); ?></p>

<?php
foreach ($search_results as $result) {
    echo "<p>$result</p>";
}
?>

</body>
</html>
