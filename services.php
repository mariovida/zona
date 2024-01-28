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
                    <h2>Our services</h2>
                    <hr/>
                    <p>Our comprehensive range of architectural services is designed to meet the diverse needs of our clients. From concept development to project completion, we offer a full suite of services to ensure that every project is a success. Whether you're looking for architectural design, project management, or sustainability consulting, our team of experts is here to help.</p>
                    <p>Explore our services below and discover how we can bring your vision to life.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services all_services">
        <div class="wrapper">
            <div class="row">
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-interior.svg" />
                        <div>
                            <span>Interior Design</span>
                            <p>From concept to completion, we'll transform your vision into reality, creating beautiful, functional interiors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-architecture.svg" />
                        <div>
                            <span>Architecture</span>
                            <p>Innovative designs to meticulous planning, we'll craft spaces that inspire and endure, tailored to your vision.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-landscape.svg" />
                        <div>
                            <span>Landscape Design</span>
                            <p>Lush gardens to serene retreats, we'll create environments that harmonize with nature and enhance your lifestyle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-investment.svg" />
                        <div>
                            <span>Consultation</span>
                            <p>Our consultation services offer personalized guidance & expertise to help you navigate the complexities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-design.svg" />
                        <div>
                            <span>Design & Planning</span>
                            <p>We'll transform your ideas into a cohesive plan that sets the stage for a seamless and successful execution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="services_box">
                        <img src="./assets/ic-exterior.svg" />
                        <div>
                            <span>Exterior Design</span>
                            <p>Elevate the curb appeal and functionality of your property with our exterior design services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />GET IN TOUCH</h6>
                </div>
                <div class="col-12">
                    <h3>Let’s Disscuss</h3>
                </div>
            </div>
            <div class="row" style="--bs-gutter-x:4rem">
                <div class="col-5">
                    <div class="contact-image">
                        <img src="./images/consultation.jpg" class="hide-image" />
                    </div>
                </div>
                <div class="col-7 d-flex flex-column justify-content-center">
                    <div class="contact-form">
                        <p>We'll explore design possibilities and discuss potential challenges,<br/>and outline a strategic plan to move forward.</p>
                        <form action="" method="POST">
                            <div class="d-flex justify-content-between gap-5">
                                <div>
                                    <label for="fname">First name</label><br>
                                    <input type="text" id="fname" placeholder="Enter your first name"><br>
                                </div>
                                <div>
                                    <label for="lname">Last name</label><br>
                                    <input type="text" id="lname" placeholder="Enter your last name"><br>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5">
                                <div>
                                    <label for="email">Email Address</label><br>
                                    <input type="text" id="email" placeholder="Enter your email address"><br>
                                </div>
                                <div>
                                    <label for="phone">Phone number</label><br>
                                    <input type="text" id="phone" placeholder="Enter your phone number"><br>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5">
                                <div>
                                    <label for="message">Text message</label><br>
                                    <textarea id="message" rows="4" placeholder="Enter your message"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-5 mb-0">
                                <div>
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="banner_block">
                        <img src="./images/banner.jpg" />
                        <h3>Enhance your property's curb appeal with stunning landscape design.</h3>
                        <p>Contact us today for expert design solutions that elevate your interiors, enhance your landscape, and bring your vision to life.</p>
                        <a href="./contact">Get in touch</a>
                        <a href="./contact">Online consultations</a>
                    </div>
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