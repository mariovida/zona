<!DOCTYPE html>
<html>
<head>
    <?php
        define('meta', TRUE);
        include 'inc/head.php';
    ?>
    <title>Contact | ZONA</title>
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
                    <h2>Get in touch</h2>
                    <hr/>
                    <p>We look forward to hearing from you and are here to help with any questions or inquiries you may have. Whether you're interested in learning more about our services, have a project in mind, or would like to join our team, we're here to help.</p>
                    <p>Please don't hesitate to get in touch using the contact information below, or <b>fill out the form</b> and we'll get back to you as soon as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="wrapper">
            <div class="row" style="--bs-gutter-x:4rem">
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
                <div class="col-5">
                    <div class="contact-image">
                        <img src="./images/consultation.jpg" />
                    </div>
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