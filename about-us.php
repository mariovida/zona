<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Services | ZONA</title>
</head>
<body>
    <?php
        define('nav', TRUE);
        include 'inc/nav.php';
    ?>

    <section class="page_title">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h2>About us</h2>
                    <hr/>
                    <p>Welcome to <b>ZONA</b>, where innovation and creativity meet. As a leading architectural firm, we have been shaping the skylines of tomorrow since our inception in 2008. Our team of talented architects and designers is committed to delivering exceptional results that exceed our clients' expectations. With a focus on sustainability and cutting-edge design, we are dedicated to creating spaces that are not only beautiful but also functional and environmentally friendly.</p>
                    <p>Learn more about our story, our team, and our values below.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="page_title-image">
                        <img src="./images/team_1.jpg" class="hide-image" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="page_title-image">
                        <img src="./images/team_2.jpg" class="hide-image" style="transition-delay: 0.4s;" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experties">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />WHAT WE DO</h6>
                </div>
                <div class="col-12">
                    <h3>Our Experties</h3>
                </div>
            </div>
        </div>
    </section>

    <?php
        define('footer', TRUE);
        include 'inc/footer.php';
    ?>
    
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        });

        const hiddenElements = document.querySelectorAll('.hide-image');
        hiddenElements.forEach((el) => observer.observe(el));
    </script>
</body>
</html>