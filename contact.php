<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'meta.php'; ?>
    <?php include 'cdn.php'; ?>
    <title>Contact Us | Longwell Group Ghana - Marketing & Distribution </title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/contact.css">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide">
                    <img src="./images/hero_one.jpg" alt="">
                    <div class="swiper-text">
                        <h1>Contact Us</h1>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section>
        <div class="our-story-all">
            <div class="our-story-title">
                <h1> Contact <span>Info :</span></h1>
                <p><sub></sub></p>
            </div>

        </div>

    </section>

    <section>
        <div class="contact-grid">
            <div class="contact-box">
            
                <h1><i class="fa-solid fa-location-dot"></i></h1>
                <p> Opp she’ll station, Ashtown high street, Mbrom Rd, Kumasi</p>
            </div>
            <div class="contact-box">
              
                <h1><i class="fa-solid fa-envelope"></i></h1>
                <p>info@longwellgroupghana.com</p>
                <p>prince@longwellgroupghana.com</p>
                <p>kobby@longwellgroupghana.com</p>
            </div>
            <div class="contact-box">
             
                <h1><i class="fa-solid fa-phone"></i> </h1>
                <p> +233 59 6002 220</p>
                <p> +233 54 1722 873</p>
            </div>
        </div>
    </section>

    <section>
        <div class="contact">
            <div class="contact-form">
                <div class="contact-title">
                    <h1>Get in Touch with Us!</h1>
                    <p>
                        Feel free to reach out if you have any questions, suggestions, or just want to say hello. Our team is here and ready to assist you. Contact us for a seamless and enjoyable experience.
                    </p>
                </div>
                <div class="forms-all">
                    <form id="contactForm">
                        <div class="forms">
                            <input type="text" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="forms">
                            <input type="text" id="subject" name="subject" placeholder="Enter your subject">
                        </div>
                        <div class="forms">
                            <input type="text" id="number" name="number" min="0" placeholder="Enter your phone number">
                        </div>
                        <div class="forms">
                            <input type="text" id="email" name="email" placeholder="Enter your email address">
                        </div>
                        <div class="forms">
                            <textarea id="message" name="message" placeholder="Enter your message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="forms">
                            <button type="button" id="submitButton" onclick="sendEmail()">Send Message <i class="fa-solid fa-location-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16192597.16721736!2d-9.068097963235653!3d7.761079785684149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb97f7cc8ecbff%3A0xf4b88c2c39474b16!2sIvorychem%20company%20ltd!5e0!3m2!1sen!2sgh!4v1703258015220!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="./js/products.js"></script>
    <script src="./js/hero.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>