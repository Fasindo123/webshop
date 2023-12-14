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

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

$conn->close();
?>
<div class="fixed-top">
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="imgs/tts.png" alt="TechTrendStore Logó" title="TechTrendStore Logó" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse custom-search" id="navbarSupportedContent">
      <form class="d-flex justify-content-center" role="search" style="width: 60%; margin: 0 auto;">
        <input class="form-control me-2 custom-search-input" type="search" placeholder="Keresés..." aria-label="Search" style="border-radius: 15px; font-weight: 600;">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="favourite.php"><i class="fa-solid fa-heart"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><i class="fa-solid fa-envelope"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <nav class="category">
    <ul>
      <?php 
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '<li><a href="#" id="'.$row['id'].'">'.$row['label'].'</a></li>';
          }
        } else {
          echo "Nincsenek kategóriák!";
        }
      ?>
    </ul>
  </nav>
</div>