<?php 
if (isset($_GET['id'])) {
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
            <div class="slide"><img src="imgs/amd.jpg" alt="Image 1"></div>
            <div class="slide"><img src="imgs/amd.jpg" alt="Image 2"></div>
            <div class="slide"><img src="imgs/amd.jpg" alt="Image 3"></div>
            <div class="slide"><img src="imgs/amd.jpg" alt="Image 4"></div>
            <div class="slide"><img src="imgs/amd.jpg" alt="Image 5"></div>
          </div>
        </div>

        <div class="thumbnail-container">
          <img class="thumbnail" src="imgs/amd.jpg" alt="Thumbnail 1" onclick="showSlide(0)">
          <img class="thumbnail" src="imgs/amd.jpg" alt="Thumbnail 2" onclick="showSlide(1)">
          <img class="thumbnail" src="imgs/amd.jpg" alt="Thumbnail 3" onclick="showSlide(2)">
          <img class="thumbnail" src="imgs/amd.jpg" alt="Thumbnail 4" onclick="showSlide(3)">
          <img class="thumbnail" src="imgs/amd.jpg" alt="Thumbnail 5" onclick="showSlide(4)">
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
      <h2>Termékleírás</h2>
        <p class="description"><?php echo $selected_item['description'] ?></p>

        <div class="product-bottom">
          <h2 style="color: red"><?php echo $selected_item['price'] ?> Ft</h2>
          <h2><?php echo $selected_item['stock'] ?> DB</h2>
          <div style="float: right;">
            <button class="productBtn"><a href=""><i class="fa-solid fa-heart-circle-plus"></i></a></button>
            <button class="productBtn"><a href=""><i class="fa-solid fa-cart-plus"></i></a></button>
          </div>
        </div>
    </div>
  </div>
</div>
      <?php require_once("components/footer.php"); ?>
  </body>
</html>