<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Projects | ZONA</title>
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
                    <h2>Our projects</h2>
                    <hr/>
                    <p>Here, you'll find a curated selection of our most innovative and inspiring architectural designs. Each project represents our dedication to creativity, functionality, and sustainability, as well as our commitment to exceeding our clients' expectations.</p>
                    <p>Explore our portfolio below and discover how we're shaping the future of architecture one project at a time.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects all_projects">
        <div class="wrapper">
            <div class="row mb-60">
                <div class="col-6">
                    <a class="projects_box" href="">
                        <div class="projects_box-image">
                            <img src="./images/project_1.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Las Vegas, USA / 2019</span>
                        <p>Harmony Park Residence</p>
                    </a>
                </div>
                <div class="col-6">
                    <a class="projects_box" href="">
                        <div class="projects_box-image">
                            <img src="./images/project_2.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Liverpool, United Kingdom / 2021</span>
                        <p>Azure Waters Apartments</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <a class="projects_box" href="">
                        <div class="projects_box-image">
                            <img src="./images/project_3.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Alicante, Spain / 2023</span>
                        <p>Serenity Skies Home</p>
                    </a>
                </div>
                <div class="col-6">
                    <a class="projects_box" href="">
                        <div class="projects_box-image">
                            <img src="./images/project_4.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Quito, Ecuador / 2020</span>
                        <p>Tranquil Haven Residences</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
        define('footer', TRUE);
        include 'inc/footer.php';
    ?>
</body>
</html>