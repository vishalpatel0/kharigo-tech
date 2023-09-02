<div class="floating-btn">
    <a title="Go To Top" href="#content">
        <i class="bi bi-arrow-up-circle"></i>
    </a>
</div>

<div class="floating-btn_whatsapp">
    <a title="whatsapp" href="https://api.whatsapp.com/message/YPO3F6D6RPLUJ1" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
</div>


<!-- Footer Section -->
<footer class="footer text-center py-3">
    <hr>
    <div class="container">

        <div class="social-icons mt-3">
            <!-- <a href="#" class="social-icon" title="facebook"><i class="bi bi-facebook"></i></a> -->
            <a href="https://api.whatsapp.com/message/YPO3F6D6RPLUJ1" target="_blank" class="social-icon" title="whatsapp"> <i class="bi bi-whatsapp"></i> </a>
            <a href="https://twitter.com/kharigoIND" class="social-icon" title="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.linkedin.com/company/kharigo" target="_blank" class="social-icon" title="linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com/vishalpatel0" target="_blank" class="social-icon" title="github"><i class="bi bi-github"></i></a>
        </div>

        <p>&copy; <?= date('Y') ?> Kharigo. All rights reserved.</p>

    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Initialize AOS -->
<script>
    AOS.init();

    // You can also pass an optional settings object
    // below listed default settings
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>