<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
    <?php
    require_once('components/header.php');

    if (isset($_SESSION['webshopuser_data']) && isset($_SESSION['webshopuser_data']['id'])) {
        if (isset($_GET['list']) && isset($_GET['item']) && isset($_GET['single']) && $_GET['list'] && $_GET['item'] && $_GET['single']) {
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
    
            $qty = $conn->query("SELECT qty FROM in_cart_items WHERE user_id = ".$_SESSION['webshopuser_data']['id']." AND item_id = ".$_GET['item']." LIMIT 1")->fetch_assoc();
            $x = $qty['qty']-1;
            if ($x > 0) {
                $conn->query("UPDATE `in_cart_items` SET `qty`=".$x." WHERE user_id = ".$_SESSION['webshopuser_data']['id']." AND item_id = ".$_GET['item']." LIMIT 1");
            }
            header('Location: cart.php');
    
            $conn->close();
        } elseif (isset($_GET['list']) && isset($_GET['item']) && $_GET['list'] && $_GET['item'] ) {
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
    
            if ($_GET['list'] == 'cart') {
                $conn->query("DELETE FROM `in_cart_items` WHERE user_id = ".$_SESSION["webshopuser_data"]["id"]." AND item_id = ".$_GET["item"]." LIMIT 1");
                header('Location: cart.php');
            } else {
                $conn->query("DELETE FROM `favorites` WHERE user_id = ".$_SESSION["webshopuser_data"]["id"]." AND item_id = ".$_GET["item"]." LIMIT 1");
                header('Location: favourite.php');
            }
    
            $conn->close();
        }
    } else {
        header('Location: dashboard');
    }

    require_once("components/footer.php");
    ?>
</body>
</html>