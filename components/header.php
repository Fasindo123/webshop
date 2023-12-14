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
<div class="nav-fixed">
  <nav class="custom-navbar">
      <div>
        <a href="index.php"><img src="imgs/tts.png" alt="logo" title="" class="logo"></a>
      </div>

      <form action="#" class="custom-search">
        <input type="text" placeholder="Keresés..." name="search" />
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>

      <div class="icons">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="favorite.php"><i class="fa-solid fa-heart"></i></a>
        <a href="contact.php"><i class="fa-solid fa-envelope"></i></a>
        <a href=""><i class="fa-solid fa-user"></i></a>
      </div>
  </nav>

  <nav class="category">
    <ul>
      <?php 
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '<li id="'.$row['id'].'"><a href="#">'.$row['label'].'</a></li>';
          }
        } else {
          echo "Nincsenek kategóriák!";
        }
      ?>
    </ul>
  </nav>
</div>