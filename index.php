<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>ZONA</title>
</head>
<body>
    <?php
        define('nav', TRUE);
        include 'inc/nav.php';
    ?>

    <section class="hero">
        <div class="wrapper">
            <div class="row">
                <div class="col-6">
                    <h1>Your home, your style. Begin your design adventure</h1>
                    <p>A fusion of modern aesthetics and classical precision,</br>capturing the essence of architectural excellence.</p>
                    <a href="./projects">Our projects<img src="./assets/btn-arrow.svg" /></a>
                </div>
                <div class="col-6 d-flex flex-column align-items-end">
                    <div class="hero_image">
                        <img src="./images/hero_image.jpg" class="hide-image" />
                    </div>
                    <p class="hero_image-desc">Architectural Excellence</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="wrapper">
            <div class="row">
                <div class="col-5 d-flex justify-content-start">
                    <div class="about-image">
                        <img src="./images/image_01.jpg" class="hide-image" />
                    </div>
                </div>
                <div class="col-7">
                    <div class="about-info">
                        <h2>From concept to creation how our dedication shapes architectural marvels</h2>
                        <div class="about-info-numbers">
                            <div>
                                Founded
                                <span>2008</span>
                            </div>
                            <div>
                                Projects
                                <span>194+</span>
                            </div>
                            <div>
                                Clients
                                <span>237</span>
                            </div>
                        </div>
                        <p>ZONA has been a trusted name in the architectural industry for over a decade. Our journey began with a vision to redefine spaces and create innovative designs that stand the test of time. Since our inception, we have been committed to delivering exceptional architectural solutions that blend functionality with aesthetics, shaping the skylines of tomorrow and leaving a lasting impact on the communities we serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />EXPLORE</h6>
                </div>
                <div class="col-12">
                    <h3>Our Projects</h3>
                </div>
            </div>
            <div class="row" style="margin-bottom:80px;">
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

    <section class="stats">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />FACTS</h6>
                </div>
                <div class="col-12">
                    <h3>Our Key Stats</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div class="stats_box">
                        <h2>194+</h2>
                        <span>Project Completed</span>
                        <p>From residential developments to commercial complexes.</p>
                    </div>
                    <div class="stats_box">
                        <h2>16</h2>
                        <span>Years of Experience</span>
                        <p>We have been dedicated to shaping spaces that inspire, innovate, and endure.</p>
                    </div>
                    <div class="stats_box">
                        <h2>98%</h2>
                        <span>Clients Satisfaction</span>
                        <p>Our ability to consistently deliver exceptional results that exceed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />WHAT WE DO</h6>
                </div>
                <div class="col-12">
                    <h3>Our Services</h3>
                </div>
            </div>
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
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="partners_logos">
                        <img src="./images/logos/boltshift.svg" />
                        <img src="./images/logos/featherdev.svg" />
                        <img src="./images/logos/globalbank.svg" />
                        <img src="./images/logos/lightbox.svg" />
                        <img src="./images/logos/nietzsche.svg" />
                        <img src="./images/logos/spherule.svg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />NEWS</h6>
                </div>
                <div class="col-12">
                    <h3>Latest Articles</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="news_box">
                        <div class="news_box-image">
                            <img src="./images/news_1-0.jpg" />
                        </div>
                        <div class="news_box-info">
                            <h5>The beauty of minimalism simplifying your space for a calm, clutter-free home</h5>
                            <p>This blog explores the profound impact of interior design on mental and emotional well-being. From creating spaces that promote relaxation and reduce stress to incorporating biophilic elements.</p>
                            <div class="news_box-info-date">
                                <p>5 min read</p>
                                <p>Feb 14, 2024</p>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-4">
                    <div class="news_box">
                        <div class="news_box-image">
                            <img src="./images/news_2-0.jpg" />
                        </div>
                        <div class="news_box-info">
                            <h5>The beauty of minimalism simplifying your space for a calm, clutter-free home</h5>
                            <p>This blog delves into the principles of minimalist design, offering practical tips and inspiration for decluttering your home, organizing your space, and embracing simplicity to cultivate a sense of peace.</p>
                            <div class="news_box-info-date">
                                <p>5 min read</p>
                                <p>Feb 06, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="news_box">
                        <div class="news_box-image">
                            <img src="./images/news_3-0.jpg" />
                        </div>
                        <div class="news_box-info">
                            <h5>The beauty of minimalism simplifying your space for a calm, clutter-free home</h5>
                            <p>Embark on a journey through the architectural design process, from initial concept development to final construction. This blog provides an in-depth exploration of each stage of the design journey.</p>
                            <div class="news_box-info-date">
                                <p>5 min read</p>
                                <p>Jan 26, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="wrapper">
            <div class="row">
                <div class="col-12">
                    <h6><img src="./assets/sub-icon.svg" />TESTIMONIALS</h6>
                </div>
                <div class="col-12">
                    <h3>Clients Review</h3>
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