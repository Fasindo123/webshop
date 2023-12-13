<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
      <?php require_once('components/header.php'); ?>

  <div class="container product">
    <div class="row">
      <div class="col-sm-4">
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




  <div class="col-sm-8">
      <h1 class="text-center">Termék neve</h1>
      <h2>Termékleírás</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex culpa architecto totam molestias blanditiis consectetur minus libero deserunt? Deleniti iusto iure minus laboriosam laborum qui voluptates? Excepturi sit rem vel?</p>
      <h2>Ár: 74 000 Ft</h2>
      <h2>Elérhető: XY DB</h2>
      <button class="productBtn"><a href=""><i class="fa-solid fa-heart-circle-plus"></i></a></button>
      <button class="productBtn"><a href=""><i class="fa-solid fa-cart-plus"></i></a></button>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <?php require_once("components/footer.php"); ?>
  </body>
</html>