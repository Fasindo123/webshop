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
$categories = $conn->query($sql);

$conn->close();
?>
<div class="fixed-top">
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="imgs/tts.png" alt="TechTrendStore Logó" title="TechTrendStore Logó" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars" style="color: #fff;"></i>
    </button>

    <div class="collapse navbar-collapse custom-search" id="navbarSupportedContent" id="search">
      <form class="d-flex justify-content-center pt-3 pt-lg-0 w-100 mx-lg-5" role="search" style="margin: 0;" method="get" action="search.php">
        <input class="form-control me-2 custom-search-input" name="s" id="search-text" type="search" placeholder="Keresés..." aria-label="Search" style="border-radius: 5px; font-weight: 600;">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-3 pt-lg-0 flex-row justify-content-center align-items-center gap-4 gap-lg-3">
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="favourite.php"><i class="fa-solid fa-heart"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><i class="fa-solid fa-envelope"></i></a>
        </li>
        <div class="dropdown" style="float:right;">
          <a class="nav-link" href="dashboard/account"><i class="fa-solid fa-user"></i></a>
            <div class="dropdown-content">
              <li><a href="#">asd</a></li>
              <li><a href="#">asd</a></li>
            </div>
        </div>
      </ul>
    </div>
  </div>
</nav>

  <nav class="category">
    <ul>
      <li><a href="#" cat_id="all">Összes</a></li>
      <?php 
        if ($categories->num_rows > 0) {
          while($row = $categories->fetch_assoc()) {
            echo '<li><a href="#" cat_id="'.$row['id'].'">'.$row['label'].'</a></li>';
          }
        } else {
          echo "Nincsenek kategóriák!";
        }
      ?>
    </ul>
  </nav>
</div>