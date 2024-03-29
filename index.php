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
                    <h1>Your home, your style. Begin your design adventure.</h1>
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
                        <a href="./about-us">Get to know us better<img src="./assets/btn-arrow.svg" /></a>
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
                    <a class="projects_box" href="./project/harmony-park-residence">
                        <div class="projects_box-image">
                            <img src="./images/project_1.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Las Vegas, USA / 2019</span>
                        <p>Harmony Park Residence</p>
                    </a>
                </div>
                <div class="col-6">
                    <a class="projects_box" href="./project/azure-waters-apartments">
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
                    <a class="projects_box" href="./project/serenity-skies-home">
                        <div class="projects_box-image">
                            <img src="./images/project_3.jpg" />
                            <button><div class="dot"></div>View project</button>
                        </div>
                        <span>Alicante, Spain / 2023</span>
                        <p>Serenity Skies Home</p>
                    </a>
                </div>
                <div class="col-6">
                    <a class="projects_box" href="./project/tranquil-haven-residences">
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
                <div class="col-12 mb-30 d-flex align-items-center justify-content-between">
                    <h3>Our Services</h3>
                    <a href="./services">View all<img src="./assets/btn-arrow.svg" /></a>
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
                <div class="col-12 mb-30 d-flex align-items-center justify-content-between">
                    <h3>Clients Review</h3>
                    <div class="d-flex gap-3">
                        <div class="swiper-button-prev-unique">
                            <img src="./assets/arrow-left.svg" />
                        </div>
                        <div class="swiper-button-next-unique">
                            <img src="./assets/arrow-right.svg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper testimonialsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials_box">
                                    <div class="testimonials_box-left">
                                        <img src="./images/allison.jpg" />
                                    </div>
                                    <div class="testimonials_box-right">
                                        <p>Their landscape design team is incredibly talented and brought my backyard vision to life in ways I never thought possible. Thank you for creating a beautiful sanctuary for me to enjoy!</p>
                                        <div class="testimonials_box-info">
                                            <p>Darlene Robertson</p>
                                            <span>Las Vegas, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials_box">
                                    <div class="testimonials_box-left">
                                        <img src="./images/juan.jpg" />
                                    </div>
                                    <div class="testimonials_box-right">
                                        <p>Working with ZONA was a pleasure from start to finish. Their professionalism, creativity, and commitment to excellence are unmatched. I highly recommend them to anyone looking for top-notch architectural services.</p>
                                        <div class="testimonials_box-info">
                                            <p>Cameron Williamson</p>
                                            <span>Los Angeles, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials_box">
                                    <div class="testimonials_box-left">
                                        <img src="./images/lucy.jpg" />
                                    </div>
                                    <div class="testimonials_box-right"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials_box">
                                    <div class="testimonials_box-left">
                                        <img src="./images/peter.jpg" />
                                    </div>
                                    <div class="testimonials_box-right"></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials_box">
                                    <div class="testimonials_box-left">
                                        <img src="./images/christina.jpg" />
                                    </div>
                                    <div class="testimonials_box-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

        var swiper = new Swiper(".testimonialsSwiper", {
            slidesPerView: 2,
            spaceBetween: 50,
            navigation: {
                nextEl: '.swiper-button-next-unique',
                prevEl: '.swiper-button-prev-unique'
            },
        });
    </script>
</body>
</html>