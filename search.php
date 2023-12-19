<?php
function searchAllPages($search_query) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM items WHERE name LIKE '%$search_query%'";
    $result = $conn->query($sql);

    $search_results = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row; // Teljes termékadatokat adjuk hozzá a tömbhöz
        }
    }

    $conn->close();

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

<div class="search-txt">
    <p>Keresett szó: <?php echo $search_query; ?></p>
    <p>Találatok: <?php echo count($search_results); ?></p>
</div>

<div class="container" id ="termekek">
      <div class="row">
        <?php
        foreach ($search_results as $result) {
            echo '<div class="product-card col-6 col-sm-6 col-md-6 col-lg-4" id="'.$result['id'].'">
                    <a href="product.php?id='.$result['id'].'">
                    <img src="'.$result['cover_img'].' imgs/empty-photo.jpg" class="img-fluid" alt="' . $result['cover_img'] . '" title="' . $result['name'] . '">
                    <h2>' . $result['name'] . '</h2>
                    </a>

                    <div class="product-card-bottom">
                    <h4>' . $result['price'] . ' Ft</h4>

                    <div class="button-container">
                      <button><a href="#"><i class="fas fa-heart-circle-plus"></i></a></button>
                      <button><a href="#"><i class="fas fa-cart-plus"></i></a></button>
                    </div>

                  </div>
                </div>';
        }
        ?>
      </div>
</div>

<?php require_once("components/footer.php"); ?>

</body>
</html>
