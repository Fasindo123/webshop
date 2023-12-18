<?php 
if (!isset($_GET['id']) || !$_GET['id']) {
  header("Location: index.php");
} else {
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

  $sql = "SELECT * FROM items WHERE id=" . $_GET['id'] . " LIMIT 1";
  $result = $conn->query($sql);

  if ($result) {
    $selected_item = $result->fetch_assoc();
  } else {
    echo "Error: " . $conn->error;
  }

  $conn->close();

  if (!$selected_item['images']) { 
    $selected_item['images'] = array("imgs/empty-photo.jpg", "imgs/empty-photo.jpg", "imgs/empty-photo.jpg", "imgs/empty-photo.jpg", "imgs/empty-photo.jpg");
  } else { 
    $selected_item['images'] = explode(",", $selected_item['images']);
    for ($i=0; $i<count($selected_item['images']); $i++) {
      $selected_item['images'][$i] = "dashboard/".$selected_item['images'][$i];
    }
  }
}
?>
<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
      <?php require_once('components/header.php'); ?>

      <div class="container product mx-auto">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-5 col-lg-4">
        <div class="slider-container">
          <div class="slider">
            <?php 
              foreach($selected_item['images'] as $image) {
                echo '<div class="slide"><img src="'.$image.'" alt="'.$image.'" title = "Kép a termékről"></div>';
              }
            ?>
          </div>
        </div>

        <div class="thumbnail-container">
          <?php 
            for ($i=0; $i < count($selected_item['images']); $i++) {
              echo '<img class="thumbnail" src="'.$selected_item['images'][$i].'" alt="'.$selected_item['images'][$i].'" title="Kép a termékről" onclick="showSlide('.$i.')">';
            }
          ?>
        </div>

  <script>
      let currentIndex = 0;
      const slides = document.querySelectorAll('.slide');
      const totalSlides = slides.length;

      function showSlide(index) {
        if (index < 0) {
          currentIndex = totalSlides - 1;
        } else if (index >= totalSlides) {
          currentIndex = 0;
        } else {
          currentIndex = index;
        }

        const transformValue = -currentIndex * 100 + '%';
        document.querySelector('.slider').style.transform = 'translateX(' + transformValue + ')';
      }

      function nextSlide() {
        showSlide(currentIndex + 1);
      }

      // Automatic sliding
      setInterval(() => {
        nextSlide();
      }, 4000);
  </script>
</div>

    <div class="col-12 col-sm-12 col-md-7 col-lg-8">
      <h1 class="text-center"><?php echo $selected_item['name'] ?></h1>
      
      <div class="product-bottom">
          <h2 style="color: red"><?php echo $selected_item['price'] ?> Ft</h2>
          <h2><?php echo $selected_item['stock'] ?> DB</h2>
          <div style="float: right;">
            <button class="productBtn"><a href=""><i class="fa-solid fa-heart-circle-plus"></i></a></button>
            <button class="productBtn"><a href=""><i class="fa-solid fa-cart-plus"></i></a></button>
          </div>
        </div>

      <h2>Termékleírás</h2>
        <p class="description"><?php echo $selected_item['description'] ?></p>
    </div>
  </div>
</div>
      <?php require_once("components/footer.php"); ?>
  </body>
</html>