<!DOCTYPE html>
<html lang="hu">
    <title>Kosár - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
<?php require_once('components/header.php'); ?>
<br>
        <div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>Kosár</h4>
                        <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Rendezés:</span><span class="mr-1 font-weight-bold">Ár szerint növekvő</span><i class="fa fa-angle-down"></i></div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">Ft</h5>
                        </div>
                        <div class="d-flex align-items-center"><i class="fa-solid fa-trash text-danger"></i></i></div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">Ft</h5>
                        </div>
                        <div class="d-flex align-items-center"><i class="fa-solid fa-trash text-danger"></i></i></div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">Ft</h5>
                        </div>
                        <div class="d-flex align-items-center"><i class="fa-solid fa-trash text-danger"></i></i></div>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                            <div class="d-flex flex-row product-desc">
                                <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                                <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">Ft</h5>
                        </div>
                        <div class="d-flex align-items-center"><i class="fa-solid fa-trash text-danger"></i></i></div>
                    </div>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="Kupon/Ajándékkártya"><button class="btn buy btn-sm ml-2" type="button">Alkalmaz</button></div>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn buy btn-block btn-lg ml-2 pay-button" type="button"><i class="fa-solid fa-basket-shopping"></i> Tovább a fizetéshez</button></div>
                </div>
            </div>
        </div>

        <?php require_once('components/footer.php'); ?>
</body>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const increaseButtons = document.querySelectorAll('.fa-plus');
            const decreaseButtons = document.querySelectorAll('.fa-minus');

            increaseButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    handleQuantityChange(button, 1);
                });
            });

            decreaseButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    handleQuantityChange(button, -1);
                });
            });
        });

        function handleQuantityChange(button, change) {
            const quantityElement = button.parentElement.querySelector('.text-grey');
            let currentQuantity = parseInt(quantityElement.textContent, 10);

            if (!isNaN(currentQuantity)) {
                currentQuantity += change;
                if (currentQuantity < 0) {
                    currentQuantity = 0;
                }
                quantityElement.textContent = currentQuantity;
            }
        }
        </script>
</html>