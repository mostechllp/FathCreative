/**
 * Home Page Lead Capture Popup - Fath Creative
 * Handles 2-second delay trigger, sessionStorage persistence, modal accessibility & form interaction.
 */
(function () {
    'use strict';

    const POPUP_DELAY_MS = 2000; // 2 seconds

    function initPopup() {
        const overlay = document.getElementById('fathHomePopupOverlay');
        const card = document.getElementById('fathHomePopupCard');
        const closeBtn = document.getElementById('fathPopupCloseBtn');
        const form = document.getElementById('fathPopupForm');
        const feedback = document.getElementById('fathPopupFeedback');
        const submitBtn = document.getElementById('fathPopupSubmitBtn');

        if (!overlay || !card) return;

        // Clear any previous session suppression so popup shows on every refresh
        try {
            sessionStorage.removeItem('fath_lead_popup_viewed');
            localStorage.removeItem('fath_lead_popup_viewed');
        } catch (e) { }

        let isOpened = false;

        function openModal() {
            if (isOpened) return;
            isOpened = true;
            overlay.classList.add('active');
            overlay.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        }

        function closeModal() {
            overlay.classList.remove('active');
            overlay.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = ''; // Restore background scrolling
        }

        // Trigger after exactly 2 seconds on every refresh
        setTimeout(openModal, POPUP_DELAY_MS);

        // Close button click (handles both desktop & mobile close buttons)
        const closeBtns = card.querySelectorAll('.fath-popup-close');
        closeBtns.forEach(function (btn) {
            btn.addEventListener('click', closeModal);
        });

        // Backdrop click (click outside card)
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                closeModal();
            }
        });

        // Escape key listener
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closeModal();
            }
        });

        // Restrict phone input to numbers only (prevent typing characters)
        const phoneField = form ? form.querySelector('[name="phone"]') : null;
        if (phoneField) {
            phoneField.addEventListener('input', function () {
                // Allow only digits and optional leading plus sign
                this.value = this.value.replace(/[^\d+]/g, '').replace(/(?!^)\+/g, '');
            });
            phoneField.addEventListener('keypress', function (e) {
                // Prevent typing anything other than digits (and '+' at the start)
                if (!/[\d+]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'ArrowLeft' && e.key !== 'ArrowRight' && e.key !== 'Tab') {
                    e.preventDefault();
                }
                if (e.key === '+' && (this.selectionStart !== 0 || this.value.includes('+'))) {
                    e.preventDefault();
                }
            });
        }

        // Form submission handling (same reliable AJAX pattern as contact.php)
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const nameInput = form.querySelector('[name="name"]');
                const emailInput = form.querySelector('[name="email"]');
                const phoneInput = form.querySelector('[name="phone"]');
                const messageInput = form.querySelector('[name="message"]');

                const name = nameInput ? nameInput.value.trim() : '';
                const email = emailInput ? emailInput.value.trim() : '';
                const phone = phoneInput ? phoneInput.value.trim() : '';
                const message = messageInput ? messageInput.value.trim() : '';

                // Client-side validation
                if (!name || name.length < 2) {
                    showFeedback('Please enter your full name.', 'error');
                    if (nameInput) nameInput.focus();
                    return;
                }

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !emailRegex.test(email)) {
                    showFeedback('Please enter a valid email address.', 'error');
                    if (emailInput) emailInput.focus();
                    return;
                }

                if (!phone || phone.length < 7) {
                    showFeedback('Please enter a valid contact phone number.', 'error');
                    if (phoneInput) phoneInput.focus();
                    return;
                }

                // Show loading state
                if (submitBtn) {
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span>Sending...</span>';
                }

                function handleSuccess(msg) {
                    showFeedback(msg || 'Thank you! Your inquiry has been submitted successfully.', 'success');
                    form.reset();
                    setTimeout(closeModal, 3000);
                }

                function handleError(msg) {
                    showFeedback(msg || 'Server error. Please try again!', 'error');
                }

                function handleComplete() {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Send Message</span> <i class="fa-solid fa-paper-plane"></i>';
                    }
                }

                // Preferred jQuery $.ajax (same as contact.php) if jQuery is loaded
                if (window.jQuery) {
                    window.jQuery.ajax({
                        type: 'POST',
                        url: 'send-mail.php',
                        data: window.jQuery(form).serialize(),
                        dataType: 'json',
                        success: function (response) {
                            if (response && response.status === 'success') {
                                handleSuccess(response.message);
                            } else {
                                handleError(response && response.message ? response.message : 'Something went wrong. Please try again.');
                            }
                        },
                        error: function () {
                            handleError('Server error. Please try again!');
                        },
                        complete: function () {
                            handleComplete();
                        }
                    });
                } else {
                    // Fallback to fetch with URLSearchParams
                    const formData = new FormData(form);
                    const params = new URLSearchParams(formData);

                    fetch('send-mail.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: params.toString()
                    })
                        .then(function (res) {
                            return res.json();
                        })
                        .then(function (response) {
                            if (response && response.status === 'success') {
                                handleSuccess(response.message);
                            } else {
                                handleError(response && response.message ? response.message : 'Something went wrong. Please try again.');
                            }
                        })
                        .catch(function () {
                            handleError('Server error. Please try again!');
                        })
                        .finally(function () {
                            handleComplete();
                        });
                }
            });
        }

        function showFeedback(msg, type) {
            if (!feedback) return;
            feedback.textContent = msg;
            feedback.className = 'fath-popup-feedback ' + type;
            feedback.style.display = 'block';
        }
    }

    if (document.readyState === 'complete') {
        initPopup();
    } else {
        window.addEventListener('load', initPopup);
    }
})();
