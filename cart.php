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

            $sql = "SELECT * FROM in_cart_items WHERE user_id = ".$_SESSION['webshopuser_data']['id'];
            $result = $conn->query($sql);

            $conn->close();
        } else {
            header('Location: dashboard');
        }
    ?>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    <h4 class="shopping-title"><i class="fa-solid fa-cart-shopping"></i> Kosár</h4>
                </div>
                <?php
                    while ($item = $result->fetch_assoc()) {
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
                
                        $sql = "SELECT * FROM items WHERE id = ".$item['item_id']." LIMIT 1";
                        $item_data = $conn->query($sql);
                
                        if ($item_data) {
                            $item_data = $item_data->fetch_assoc();
                        } else {
                            echo "Error: " . $conn->error;
                        }
                
                        $conn->close();

                        if (!$item_data['cover_img']) { $item_data['cover_img'] = "imgs/empty-photo.jpg"; } else { $item_data['cover_img'] = "dashboard/".$item_data['cover_img']; }
                        
                        echo '
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                            <div class="mr-1"><img class="rounded" src="'.$item_data['cover_img'].'" width="70"></div>
                            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">'.$item_data['name'].'</span></div>
                            <div class="d-flex flex-row align-items-center qty"><a href="deleteProductFromList.php?list=cart&item='.$item_data['id'].'&single=true"><i class="fa fa-minus text-danger"></i></a>
                                <h5 class="text-grey mt-1 mr-1 ml-1">'.$item['qty'].'</h5><a href="addProductToList.php?list=cart&item='.$item_data['id'].'"><i class="fa fa-plus text-success"></i></a></div>
                            <div>
                                <h5 class="text-grey">'.$item_data['price'].' Ft</h5>
                            </div>
                            <div class="d-flex align-items-center"><a href="deleteProductFromList.php?list=cart&item='.$item_data["id"].'"><i class="fa-solid fa-trash text-danger"></i></i></a></div>
                        </div>';
                    }
                    if ($result->num_rows > 0) {
                        echo '<div class="d-flex flex-row align-items-center mt-3 p-2"><button class="btn buy btn-block btn-lg ml-2 pay-button" type="button"><i class="fa-solid fa-basket-shopping"></i> Tovább a fizetéshez</button></div>';
                    } else {
                        echo ('
                        <div class="mt">
                        <h1 class="mt">Üres a kosarad! <i class="fa-regular fa-face-frown"></i></h1>
                        
                        <h2 class="mt"><a href="index.php"><i class="fa-solid fa-angles-left"></i> Vissza a főoldalra...</a></h2>
                        </div>');
                    }
                ?>
            </div>
        </div>
    </div>

    <?php require_once('components/footer.php'); ?>
</body>
</html>