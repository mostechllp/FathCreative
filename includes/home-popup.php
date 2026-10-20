<?php
/**
 * Fath Creative - Home Page Lead Capture Modal
 * Delayed 2-second popup with Left Brand Content & Right Lead Form
 * Built with zero interference to existing SEO, headings hierarchy, or page schema.
 */
?>
<!-- Stylesheet for Homepage Popup (Non-blocking) -->
<link rel="stylesheet" href="assets/css/home-popup.css?v=22">

<!-- Home Lead Capture Modal (Accessible, Non-obstructive to SEO crawlers) -->
<div id="fathHomePopupOverlay" class="fath-popup-overlay" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="fathPopupTitle">
    <div id="fathHomePopupCard" class="fath-popup-card">
        <!-- Desktop Close Button: Positioned on the far top-right side of the modal card -->
        <button type="button" class="fath-popup-close fath-popup-close-desktop" id="fathPopupCloseBtn" aria-label="Close modal dialog">&times;</button>

        <div class="fath-popup-inner">
            <!-- Left Side: Brand Highlights & Action Button -->
            <div class="fath-popup-left">
                <div>
                    <div class="fath-popup-header-bar">
                        <div class="fath-popup-badge">Leading Agency • Saudi Arabia</div>
                        <!-- Mobile Close Button: Flows inside header bar; scrolls away naturally without sticking -->
                        <button type="button" class="fath-popup-close fath-popup-close-mobile" id="fathPopupCloseBtnMobile" aria-label="Close modal dialog">&times;</button>
                    </div>

                    <div class="fath-popup-title" id="fathPopupTitle">
                        Elevate Your Presence With <span class="gradient-text">Award-Winning Exhibitions</span>
                    </div>

                    <p class="fath-popup-desc">
                        From innovative 3D concepts to custom booth fabrication across Riyadh, Jeddah & Dammam — we bring visionary spaces to life.
                    </p>

                    <ul class="fath-popup-features">
                        <li>
                            <span class="feature-icon"><i class="fa-solid fa-check"></i></span>
                            <span>Bespoke Exhibition Stand Design & Fabrication</span>
                        </li>
                        <li>
                            <span class="feature-icon"><i class="fa-solid fa-check"></i></span>
                            <span>Photorealistic 3D Concepts & Visitor Experiences</span>
                        </li>
                        <li>
                            <span class="feature-icon"><i class="fa-solid fa-check"></i></span>
                            <span>Turnkey Event Management Across the Kingdom</span>
                        </li>
                    </ul>

                    <div class="fath-popup-btn-wrap">
                        <a href="services.php" class="fath-popup-action-btn">
                            <span>Explore Our Work</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Key Counter Stats at the bottom (Left-sided Icon for each Number) -->
                    <div class="fath-popup-stats">
                        <div class="fath-stat-item">
                            <div class="fath-stat-number-wrap">
                                <i class="fa-solid fa-handshake fath-stat-num-icon"></i>
                                <span class="fath-stat-number">70+</span>
                            </div>
                            <span class="fath-stat-label">Happy Clients</span>
                        </div>
                        <div class="fath-stat-item">
                            <div class="fath-stat-number-wrap">
                                <i class="fa-solid fa-calendar-check fath-stat-num-icon"></i>
                                <span class="fath-stat-number">120+</span>
                            </div>
                            <span class="fath-stat-label">Events Managed</span>
                        </div>
                        <div class="fath-stat-item">
                            <div class="fath-stat-number-wrap">
                                <i class="fa-solid fa-users fath-stat-num-icon"></i>
                                <span class="fath-stat-number">40+</span>
                            </div>
                            <span class="fath-stat-label">Team Members</span>
                        </div>
                        <div class="fath-stat-item">
                            <div class="fath-stat-number-wrap">
                                <i class="fa-solid fa-trophy fath-stat-num-icon"></i>
                                <span class="fath-stat-number">300+</span>
                            </div>
                            <span class="fath-stat-label">Project Experiences</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Lead Capture Form -->
            <div class="fath-popup-right">
                <div class="fath-popup-form-head">
                    <div class="fath-popup-form-title">Let's Discuss Your Project</div>
                    <p class="fath-popup-form-subtitle">Share your requirements and our specialists will connect with you.</p>
                </div>

                <form id="fathPopupForm" class="fath-popup-form" autocomplete="off">
                    <input type="hidden" name="source" value="Homepage Popup">
                    <div class="fath-input-group">
                        <i class="fa-solid fa-user fath-input-icon"></i>
                        <input type="text" name="name" class="fath-popup-input" placeholder="Full Name" required>
                    </div>

                    <div class="fath-input-group">
                        <i class="fa-solid fa-envelope fath-input-icon"></i>
                        <input type="email" name="email" class="fath-popup-input" placeholder="Business Email" required>
                    </div>

                    <div class="fath-input-group">
                        <i class="fa-solid fa-phone fath-input-icon"></i>
                        <input type="tel" name="phone" class="fath-popup-input" placeholder="Phone Number" required inputmode="tel" oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(?!^)\+/g, '')">
                    </div>

                    <div class="fath-input-group fath-textarea-group">
                        <i class="fa-solid fa-comment-dots fath-input-icon"></i>
                        <textarea name="message" class="fath-popup-input fath-popup-textarea" placeholder="Your Message" rows="3"></textarea>
                    </div>

                    <button type="submit" class="fath-popup-submit-btn" id="fathPopupSubmitBtn">
                        <span>Send Message</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>

                    <div id="fathPopupFeedback" class="fath-popup-feedback"></div>

                    <p class="fath-popup-privacy">
                        <i class="fa-solid fa-shield-halved"></i> Your information is secure. Prompt response guaranteed.
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Home Page Popup Script (Deferred, 2-second trigger, shows on every refresh) -->
<script src="assets/js/home-popup.js?v=7" defer></script>
