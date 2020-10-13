    <nav class="nav">

            <div class="logo">
            <a href="index.php"><img src="img/allure_logo.gif" width="auto" height="55"></a>
            </div>

            <div class="sadalas">
                <a href="index.php" class=<?php echo (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>>Par Allure</a>
                <a href="pasutijumi.php" class=<?php echo (basename($_SERVER['PHP_SELF']) == "pasutijumi.php")?"active":"";?>>Pasūtījumi</a>
                <a href="galerija.php" class=<?php echo (basename($_SERVER['PHP_SELF']) == "galerija.php")?"active":"";?>>Galerija</a>
                <a href="atsauksmes.php" class=<?php echo (basename($_SERVER['PHP_SELF']) == "atsauksmes.php")?"active":"";?>>Atsauksmes</a>
                <a href="kontakti.php" class=<?php echo (basename($_SERVER['PHP_SELF']) == "kontakti.php")?"active":"";?>>E-paskaste</a>
            </div>       
                
            <div>
                <a class="soctikli" href="https://www.facebook.com/allure.lv/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="soctikli" href="https://www.instagram.com/allure_ielugumi/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="soctikli" href="https://twitter.com/ielugumiallure" target="_blank"><i class="fab fa-twitter"></i></a>                                
            </div>

    </nav>