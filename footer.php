 <!-- footer-area-start -->
    <footer>
        
        <div class="td-footer-area bg-position pt-130" style="background-image: url('assets/img/footer/bg.jpg');">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-4 col-md-5">
                        <div class="td-footer-widget mb-40">
                            <div class="td-footer-logo mb-20">
                                <a href="index.php"><img src="assets/img/logo/fath-logo.png" alt="logo" style="width:200px;"></a>
                            </div>
                            <p class="text mb-10">Jeddah | Riyadh | Dammam</p>
                            <a class="number mb-10 d-inline-block" href="tel:+966500082828">+966 5000 82828</a>
                            <a class="email" href="mailto:info@fathcreative.com ">info@fathcreative.com </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="td-footer-widget space ml-90 mb-40">
                            <h3 class="td-footer-title mb-20">Quick links</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-2">
                                    <div class="td-footer-links">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="projects.php">Projects</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="td-footer-widget td-footer-subscribe mb-40">
                            <h3 class="td-footer-title mb-20">About Us</h3>
                            <p class="text mb-0" align="justify">Fath Creative is a forward-thinking agency redefining how brands connect with audiences across the Middle East. </p>
                            <!-- <div class="td-footer-form p-relative">
                                <input type="text" placeholder="E-mail Address">
                                <button type="submit" class="td-footer-form-btn">
                                    <svg width="21" height="17" viewBox="0 0 21 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.03931 8.9707H19.0393M19.0393 8.9707L12.0393 1.9707M19.0393 8.9707L12.0393 15.9707"
                                            stroke="#F248B4" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="td-footer-bottom pt-40 pb-15">
                            <div class="row align-items-center">
                                <div class="col-md-9">
                                    <div class="td-footer-bottom-copyright mb-30">
                                        <p>Copyright © 2026. All rights reserved.</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="td-footer-bottom-social text-right mb-30">
                                        <span><a href="https://www.linkedin.com/company/fath-creative/"><i class="fa-brands fa-linkedin"></i></a></span>
                                        <span><a href="https://www.instagram.com/fathadvertising?igsh=MTJjNDR4NjMydHo4eg=="><i class="fa-brands fa-instagram"></i></a></span>
                                        <span><a href="https://www.facebook.com/share/1NaqhxGxwg/?mibextid=wwXIfr"><i class="fa-brands fa-facebook"></i></a></span>
                                        <span><a href="https://wa.me/00966500082828"><i class="fa-brands fa-whatsapp"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.odometer.min.js"></script>
    <script src="assets/js/jquery-appear.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/Jarallax.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentPage = window.location.pathname.split("/").pop();
    
        // If URL ends with "/" → treat as index.php
        if (currentPage === "") {
            currentPage = "index.php";
        }
    
        let menuLinks = document.querySelectorAll(".navigation a");
    
        menuLinks.forEach(link => {
            let linkPage = link.getAttribute("href");
    
            if (linkPage === currentPage) {
                link.parentElement.classList.add("active");
    
                // If inside submenu → activate parent also
                let parentMenu = link.closest(".menu-item-has-children");
                if (parentMenu) {
                    parentMenu.classList.add("active");
                }
            }
        });
    });
    </script>
</body>


<!-- Mirrored from html.themegenix.com/evente/# by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2026 07:25:19 GMT -->

</html>