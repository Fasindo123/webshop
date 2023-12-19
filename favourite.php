<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="imgs/t_white.png">
    <title>Kedvencek - TechTrendStore</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script scr="script.js"></script>
    <script src="https://kit.fontawesome.com/535ee732fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <script src="../bootstrap.min.css" crossorigin="anonymous"></script>
</head>
<?php require_once('components/head.php'); ?>
<body>
<?php require_once('components/header.php'); ?>

<div class="cart_section">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cart_container">
                     <div class="cart_title"><i class="fa-regular fa-heart"></i> Kedvencek</div>
                     <div class="cart_items">
                         <ul class="cart_list">
                             <li class="cart_item clearfix">
                                 <div class="cart_item_image"><img src="imgs/amd.jpg" alt=""></div>
                                 <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                     <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Termék neve</div>
                                         <div class="cart_item_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt harum mollitia a</div>
                                     </div>
                                     <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Leírás</div>
                                         <div class="cart_item_text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, laborum quod? Totam nemo unde quibusdam amet ad autem repudiandae exercitationem atque er</p></div>
                                     </div>
                                     <div class="cart_item_price cart_info_col">
                                         <div class="cart_item_title">Ár:</div>
                                         <div class="cart_item_text">10Ft</div>
                                     </div>
                                 </div>
                             </li>
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