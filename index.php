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
        <?php 
          if ($items->num_rows > 0) {
            while ($item = $items->fetch_assoc()) {
              echo '<div class="product-card col-6 col-sm-3" id="'.$item['id'].'" href="product.php?id='.$item['id'].'">
                        <img src="imgs/amd.jpg" alt="'.$item['name'].'" title="'.$item['name'].'">
                        <h2>'.$item['name'].'</h2>
                        <h4>Ár: '.$item['price'].' Ft</h4>
            
                        <button><a href="#"><i class="fa-solid fa-heart-circle-plus"></i></a></button>
                        <button><a href="#"><i class="fa-solid fa-cart-plus"></i></a></button>
                    </div>';
            }
          } else {
            echo "Nincsenek termékek!";
          }
        ?>
      </div>
      
      <?php require_once("components/footer.php"); ?>

  </body>
</html>