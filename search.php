<?php
function searchAllPages($search_query) {
    $all_pages = [
        'components/footer.php',
        'components/head.php',
        'components/header.php',
        'index.php',
        'contact.php',
        'checkout.php',
        'cart.php',
        'product.php',
        'favourite.php',
        'sendContact.php',
    ];

    $search_results = [];

    foreach ($all_pages as $page) {
        $content = file_get_contents($page);
        if (stripos($content, $search_query) !== false) {
            $search_results[] = $page;
        }
    }

    return $search_results;
}

$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';

$search_results = searchAllPages($search_query);
?>

<!DOCTYPE html>
<html lang="hu">
    <title>Keresés - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>
  <br><br><br><br><br><br><br><br><br><br>

<p style="margin: 30px">Keresett szó: <?php echo $search_query; ?></p>

<p style="margin: 30px">Találatok: <?php echo count($search_results); ?></p>

<?php
foreach ($search_results as $result) {
    echo "<p>$result</p>";
}
?>

</body>
</html>
