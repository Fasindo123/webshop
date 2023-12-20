<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
    <?php
    require_once('components/header.php');

    if (isset($_SESSION['webshopuser_data']) && isset($_SESSION['webshopuser_data']['id'])) {
        if (isset($_GET['list']) && isset($_GET['item']) && $_GET['list'] && $_GET['item'] ) {
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
                $checksql = $conn->query("SELECT qty FROM in_cart_items WHERE user_id = ".$_SESSION['webshopuser_data']['id']." AND item_id = ".$_GET['item']." LIMIT 1");
                if ($checksql->num_rows > 0) {
                    $checksql = $checksql->fetch_assoc();
                    $x = $checksql['qty']+1;
                    $conn->query("UPDATE `in_cart_items` SET `qty`=".$x." WHERE user_id = ".$_SESSION['webshopuser_data']['id']." AND item_id = ".$_GET['item']." LIMIT 1");
                } else {
                    $conn->query("INSERT INTO `in_cart_items` (`user_id`, `item_id`, `qty`) VALUES (".$_SESSION['webshopuser_data']['id'].", ".$_GET['item'].", 1)");
                }
                header('Location: cart.php');
            } else {
                $checksql = $conn->query("SELECT id FROM favorites WHERE user_id = ".$_SESSION['webshopuser_data']['id']." AND item_id = ".$_GET['item']." LIMIT 1");
                if ($checksql->num_rows === 0) {
                    $conn->query("INSERT INTO `favorites` (`user_id`, `item_id`) VALUES (".$_SESSION['webshopuser_data']['id'].", ".$_GET['item'].")");
                }
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