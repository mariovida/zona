<?php
    defined('nav') or header('Location: ../');   
?>
<nav id="navigation" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {echo "class='main-nav'";} ?>>
    <div class="wrapper d-flex justify-content-between">
        <div class="nav-logo d-flex align-items-center">
            <a href="./"><img src="../assets/logo.svg" /></a>
        </div>
        <div class="nav-buttons d-flex align-items-center gap-4">
            <a href="../about-us">About</a>
            <a href="../projects">Projects</a>
            <a href="../services">Services</a>
            <a href="../contact">Contact us</a>
        </div>
    </div>
</nav>