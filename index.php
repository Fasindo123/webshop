<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM items";
$items = $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
      <?php require_once('components/header.php'); ?>

      <div class="container" id ="termekek">
      <div class="row">
      <?php 
        if ($items->num_rows > 0) {
            while ($item = $items->fetch_assoc()) {
                if (!$item['cover_img']) { $item['cover_img'] = "imgs/empty-photo.jpg"; } else { $item['cover_img'] = "dashboard/".$item['cover_img']; }
                echo '<div class="product-card col-6 col-sm-6 col-md-6 col-lg-4" id="'.$item['id'].'">
                      <a href="product.php?id='.$item['id'].'">
                        <img src="'.$item['cover_img'].'" class="img-fluid" alt="Kép: ' . $item['name'] . '" title="' . $item['name'] . '">
                        <h2>' . $item['name'] . '</h2>
                        <h4>Ár: ' . $item['price'] . ' Ft</h4>
                      </a>
                        <button><a href="#"><i class="fas fa-heart-circle-plus"></i></a></button>
                        <button><a href="#"><i class="fas fa-cart-plus"></i></a></button>
                      </div>';
            }
        } else {
            echo "Nincsenek termékek!";
        }
      ?>
      </div>
</div>

      
      <?php require_once("components/footer.php"); ?>

  </body>
</html>