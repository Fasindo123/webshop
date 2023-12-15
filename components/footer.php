<footer class="footer">
    <div class="footer-container">
        <div class="row">
        <div class="footer-col">
            <h4><i class="fa-solid fa-folder-tree"></i> Kategóriák</h4>
            <ul>
            <?php 
                if ($categories->num_rows > 0) {
                    foreach($categories as $row) {
                        echo '<li><a href="#" id="'.$row['id'].'">'.$row['label'].'</a></li>';
                    }
                } else {
                    echo "Nincsenek kategóriák!";
                }
            ?>
            </ul>
        </div>
        <div class="footer-col">
            <h4><i class="fa-solid fa-envelope"></i> Kapcsolatfelvétel</h4>
                <ul>
                    <li><a href="contact.php"><i class="fa-solid fa-envelopes-bulk"></i> Kapcsolat</a></li>
                    <li><i class="fa-solid fa-location-dot"></i> 7400, Kaposvár Szent Imre u. 2.</li>
                    <li><i class="fa-solid fa-phone"></i> (+36) 30 123 4567</li>
                    <li><i class="fa-solid fa-envelope"></i> contact.ttrendstore@gmail.com</li>
                    <li><i class="fa-solid fa-clock"></i> Hétfő - Péntek 8:00 - 16:00</li>
                </ul>
        </div>
        <div class="footer-col">
            <h4><i class="fa-solid fa-scroll"></i> Ügyfélszolgálat</h4>
                <ul>
                    <li><a href="#">Gyik</a></li>
                    <li><a href="#">Adatvédelmi Nyilatkozat</a></li>
                </ul> <br>
            <h4><i class="fa-solid fa-credit-card"></i> Fizetési módok</h4>
            <img class="ms-img ms-img--fluid" src="//assets.mmsrg.com/isr/166325/c1/-/ms-cms-mmhu-l16446034/feecms_x_x_x" srcset="//assets.mmsrg.com/isr/166325/c1/-/ms-cms-mmhu-l16446034/feecms_x_x_x 1x" alt="Fizetési módok">
        </div>
        <div class="footer-col">
            <h4><i class="fa-solid fa-hashtag"></i> Közösségi Média</h4>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
        </div>
        </div>

        <div class="copyright">Copyright &copy; 2023 - TechTrendStore</div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angles-up"></i></button>
    <script src="script.js"></script>

</footer>