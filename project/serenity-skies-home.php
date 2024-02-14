<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Serenity Skies Home | ZONA</title>
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
                    <h2>Serenity Skies Home</h2>
                    <p><span>Client:</span> Lauren Taylor</p>
                </div>
            </div>
        </div>
    </section>

    <section class="project_hero">
        <img src="../images/project_3.jpg" style="object-position:bottom" />
    </section>

     <section class="project_info">
        <div class="wrapper">
            <div class="row" style="--bs-gutter-x:4rem">
                <div class="col-4">
                    <table>
                        <tr>
                            <td class="pt-0">Location</td>
                            <td class="pt-0 light-color">Alicante, Spain</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td class="light-color">2023</td>
                        </tr>
                        <tr>
                            <td>Value</td>
                            <td class="light-color">€ 29.000</td>
                        </tr>
                        <tr>
                            <td>Service</td>
                            <td class="light-color">Exterior Design</td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td class="light-color">160 m<sup>2</sup></td>
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