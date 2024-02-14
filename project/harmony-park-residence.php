<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Harmony Park Residence | ZONA</title>
</head>
<body>
    <?php
        define('nav', TRUE);
        include 'inc/nav.php';
    ?>

    <section class="project_title">
        <div class="wrapper">
            <div class="row">
                <div class="col-12 d-flex align-items-end justify-content-between">
                    <h2>Harmony Park Residence</h2>
                    <p><span>Client:</span> Blueprint Construction</p>
                </div>
            </div>
        </div>
    </section>

    <section class="project_hero">
        <img src="../images/project_1.jpg" />
    </section>

    <section class="project_info">
        <div class="wrapper">
            <div class="row" style="--bs-gutter-x:4rem">
                <div class="col-4">
                    <table>
                        <tr>
                            <td class="pt-0">Location</td>
                            <td class="pt-0 light-color">Las Vegas, USA</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td class="light-color">2019</td>
                        </tr>
                        <tr>
                            <td>Value</td>
                            <td class="light-color">€ 35.000</td>
                        </tr>
                        <tr>
                            <td>Service</td>
                            <td class="light-color">Design & Planning</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td class="light-color">227 m<sup>2</sup></td>
                        </tr>
                    </table>
                </div>
                <div class="col-8">B</div>
            </div>
        </div>
    </section>

    <?php
        define('footer', TRUE);
        include 'inc/footer.php';
    ?>
</body>
</html>