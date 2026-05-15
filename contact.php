<?php 
$pageTitle = "Contact Us | Get in Touch with Fath Creative | Saudi Arabia";
$pageDescription = "Contact Fath Creative for your exhibition and branding needs in Jeddah, Riyadh, and Dammam. We are here to help your brand stand out.";
$pageKeywords = "Contact Fath Creative, Exhibition Company Phone Number, Branding Agency Address Saudi Arabia";
include('header.php'); 
?>
<style>
    .td-contact-form-box .td-input {
        text-transform: none !important;
    }
</style>
<!-- main-area -->
<main>

    <!-- td-breadcrumb-area-start -->
    <div class="td-breadcrumb-area td-breadcrumb-spacing bg-position" style="background-image: linear-gradient(rgb(0 0 0 / 54%), rgba(0, 0, 0, 0.7)), url(assets/img/banner/banner4.jpg)">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="td-breadcrumb-title-wrap">
                        <h2 class="td-breadcrumb-title mb-10 wow td-animetion-left" data-wow-duration="1.5s" data-wow-delay="0.3s">Contact Us</h2>
                        <div class="td-breadcrumb-list wow td-animetion-right" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa-sharp fa-solid fa-angle-right fa-fw"></i></li>
                                <li class="pages">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-breadcrumb-area-end -->


    <!-- td-contact-area-start -->
     <div class="td-contact-area pt-140 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="td-contact-map pb-40">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14848.88091006748!2d39.174611!3d21.49909215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cf74d50f3d01%3A0x2c6a947d9e7e5320!2sAl-Baghdadiyah%20Al-Gharbiyah%2C%20Jeddah%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1773474883090!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="td-contact-info grey-bg mb-40">
                        <h3 class="td-contact-info-title mb-15">Contact details</h3>
                        <p class="mb-30">Have questions or planning an event or branding project? <br>Get in touch with Fath Creative. Our team is ready to help bring your ideas to life.</p>
                        <div class="td-contact-info-list">
                            <ul>
                                <li>
                                    <span class="icons"><i class="flaticon-gps"></i></span>
                                    <div class="address">
                                        <span>Address</span>
                                        <a href="https://www.google.com/maps/search/Jeddah+Saudi+Arabia" target="_blank">Jeddah | Riyadh | Dammam</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="icons"><i class="flaticon-phone"></i></span>
                                    <div class="address">
                                        <span>Phone</span>
                                        <a href="tel:+966500082828">+966 5000 82828</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="icons"><i class="flaticon-mail"></i></span>
                                    <div class="address">
                                        <span>E-mail</span>
                                        <a href="mailto:info@fathcreative.com">info@fathcreative.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="td-contact-info-social">
                            <a href="https://www.linkedin.com/company/fath-creative/" aria-label="Visit our LinkedIn page"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/fathadvertising?igsh=MTJjNDR4NjMydHo4eg==" aria-label="Visit our Instagram page"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/share/1NaqhxGxwg/?mibextid=wwXIfr" aria-label="Visit our Facebook page"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://wa.me/00966500082828" aria-label="Contact us on WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-contact-area-end -->
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo "<p style='color: green;'>Your message has been sent successfully!</p>";
        } elseif ($_GET['status'] == 'error') {
            echo "<p style='color: red;'>Something went wrong. Please try again.</p>";
        }
    }
    ?>
    <!-- td-contact-form-area-start -->
    <div class="td-contact-form-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="td-contact-form-wrap">
                        <form id="contact-form">
                            <div class="td-contact-form-box">
                                <h3 class="td-postbox-form-title mb-15">Send Us Message</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mb-20">
                                        <input class="td-input" name="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-20">
                                        <input class="td-input" name="email" type="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-4 col-12 mb-20">
                                        <input class="td-input" name="phone" type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-md-12 mb-15">
                                        <textarea class="td-input message" name="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="td-btn">Submit Your Message</button>
                                    </div>
                                    <p class="ajax-form-response pt-20"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- td-contact-form-area-end -->

</main>
<!-- main-area-end -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contact-form").submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: "POST",
                url: "send-mail.php",
                data: formData,
                dataType: "json", // 👈 IMPORTANT
                success: function(response) {

                    if (response.status === "success") {
                        $(".ajax-form-response").html(
                            "<span style='color:green;'>" + response.message + "</span>"
                        );
                        $("#contact-form")[0].reset();
                    } else {
                        $(".ajax-form-response").html(
                            "<span style='color:red;'>" + response.message + "</span>"
                        );
                    }
                },
                error: function() {
                    $(".ajax-form-response").html(
                        "<span style='color:red;'>Server error. Try again!</span>"
                    );
                }
            });
        });
    });
</script>
<?php include('footer.php') ?>