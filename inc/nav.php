<?php
    defined('nav') or header('Location: ../');   
?>
<nav id="navigation" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {echo "class='main-nav'";} ?>>
    <div class="wrapper d-flex justify-content-between">
        <div class="nav-logo d-flex align-items-center">
            <a href="./"><img src="./assets/logo.svg" /></a>
        </div>
        <div class="nav-buttons d-flex align-items-center gap-4">
            <a href="">About</a>
            <a href="">Projects</a>
            <a href="">Services</a>
            <a href="">Reviews</a>
            <a href="">Contact us</a>
        </div>
    </div>
</nav>