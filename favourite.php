<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
<?php require_once('components/header.php'); ?>
<?php
    if (isset($_SESSION['webshopuser_data']) && isset($_SESSION['webshopuser_data']['id'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webshop";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $favorites = $conn->query("SELECT * FROM favorites WHERE user_id = ".$_SESSION['webshopuser_data']['id']);

        $conn->close();
    } else {
        header('Location: dashboard/account');
    }
?>

<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title"><i class="fa-regular fa-heart"></i> Kedvencek</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <?php
                                while ($item = $favorites->fetch_assoc()) {
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
                            
                                    $item_data = $conn->query("SELECT * FROM items WHERE id = ".$item['item_id']." LIMIT 1");
                            
                                    if ($item_data) {
                                        $item_data = $item_data->fetch_assoc();
                                    } else {
                                        echo "Error: " . $conn->error;
                                    }
                            
                                    $conn->close();
            
                                    if (!$item_data['cover_img']) { $item_data['cover_img'] = "imgs/empty-photo.jpg"; } else { $item_data['cover_img'] = "dashboard/".$item_data['cover_img']; }
                                    
                                    echo '
                                    <li class="cart_item clearfix">
                                        <div class="cart_item_image col-2"><img src="'.$item_data["cover_img"].'" alt=""></div>
                                        <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                            <div class="cart_item_name col-1">
                                                <div class="cart_item_title">Termék neve</div>
                                                <div class="cart_item_text">'.$item_data["name"].'</div>
                                            </div>
                                            <div class="cart_item_name col-6">
                                                <div class="cart_item_title">Leírás</div>
                                                <div class="cart_item_text"><p class="favorite">'.$item_data["description"].'</p></div>
                                            </div>
                                            <div class="cart_item_price col-2">
                                                <div class="cart_item_title">Ár:</div>
                                                <div class="cart_item_text">'.$item_data["price"].' Ft</div>
                                            </div>

                                            <div class="cart_item_price col-1">
                                                <div class="cart_item_text"><i class="fa-solid fa-trash text-danger"></i>
                                            </div>

                                        </div>
                                    </li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>
</body>
</html>