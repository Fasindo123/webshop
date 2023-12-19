<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
    <?php
    require_once('components/header.php');

    if (isset($_SESSION['webshopuser_data']) || isset($_SESSION['webshopuser_data']['id'])) {
        if (isset($_POST['list']) && isset($_POST['item']) && $_POST['list'] && $_POST['item'] ) {
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
    
            if ($_POST['list'] == 'cart') {
                $sql = "INSERT INTO `in_cart_items` (`user_id`, `item_id`, `qty`) VALUES (".$_SESSION['webshopuser_data']['id'].", ".$_POST['item'].", 1)";
            } else {
                $sql = "INSERT INTO `favorites` (`user_id`, `item_id`) VALUES (".$_SESSION['webshopuser_data']['id'].", ".$_POST['item'].")";
            }
            
            $categories = $conn->query($sql);
    
            $conn->close();
        }
    } else {
        header('Location: dashboard/account');
    }

    require_once("components/footer.php");
    ?>
</body>
</html>