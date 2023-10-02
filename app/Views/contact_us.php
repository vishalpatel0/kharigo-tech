<!-- app/Views/home.php -->
<?php $this->extend('assets/template'); ?>
<?php $this->section('content'); ?>


<div class="content" id="content">
    <!-- Header Section -->
    <header class="header bg-light text-center ">
        <div class="container p-4">
            <h1>Contect Us</h1>
            <!-- <h2 style="font-size:150%">
                Let's Create Your Space in the Digital World
            </h2> -->
            <!--<h3 style="font-size:130%"></h3>-->
        </div>
    </header>



    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <div class="row">
                <div class="col-md-6">
                    <p>If you have any questions or inquiries, feel free to get in touch with us.<br> We'd love to hear from
                        you!</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> kharigo, Nehru Chowk, Gadge Maharaj Pool, <br>near Dahipul, Somwar Peth, Nashik, Maharashtra 422001</li>
                        <li><i class="bi bi-envelope-fill"></i> info@kharigo.com</li>
                        <li><i class="bi bi-phone-fill"></i> +91 8796 96 5393</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form id="Contact-form">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <h3 class="">
                            <div id="Contact-response" style="display: none; "></div>
                        </h3>
                        <button type="submit" id="Contact-btn" class="btn btn-primary">Send Message</button>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <section id="faq" class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="row">
                <div class="accordion mt-4 col-md-6 text-center" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item" data-aos="zoom-in">
                        <h3 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                What services does Kharigo Tech offer?
                            </button>
                        </h3>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kharigo Tech specializes in a range of services including web development, web application development, ecommerce website creation, content management systems, and more.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                How long does it take to develop a website?
                            </button>
                        </h3>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The timeline for web development varies based on the complexity of the project. We work closely with clients to provide realistic timelines and deliver high-quality results within the agreed-upon timeframe.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                What technologies do you use for web development?
                            </button>
                        </h3>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We utilize a combination of HTML, CSS, JavaScript, PHP, MySQL, Python, and other cutting-edge technologies to create robust and user-friendly websites and applications.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                Do you offer custom web application development?
                            </button>
                        </h3>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we specialize in creating tailored web applications that align with your unique business processes and requirements. Our solutions are designed to enhance efficiency and productivity.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                Can you optimize my website for search engines?
                            </button>
                        </h3>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! Our team is skilled in implementing SEO best practices to improve your website's visibility on search engines, driving organic traffic and enhancing online presence.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion mt-4 col-md-6 text-center" id="faqAccordion_2">
                    <!-- FAQ Item 6 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="true" aria-controls="faqCollapse6">
                                How do I request a quote for my project?
                            </button>
                        </h3>
                        <div id="faqCollapse6" class="accordion-collapse collapse show" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion_2">
                            <div class="accordion-body">
                                Simply visit our contact section and provide us with some details about your project. We'll get in touch with you to discuss your requirements and provide a tailored quote.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                                How do I know if my project's information will be kept confidential?
                            </button>
                        </h3>
                        <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion_2">
                            <div class="accordion-body">
                                Your project's confidentiality is of utmost importance to us. We have strict security measures in place to protect your information, and we're committed to maintaining your trust.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                                Do you offer ongoing support after the project is completed?
                            </button>
                        </h3>
                        <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion_2">
                            <div class="accordion-body">
                                Yes, we provide post-project support to ensure your website or application continues to function smoothly. We're here to address any issues and provide updates as needed.
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="faqHeading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                                Can you redesign my existing outdated website?
                            </button>
                        </h3>
                        <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion_2">
                            <div class="accordion-body">
                                Absolutely! We specialize in website redesigns to modernize outdated sites, improve user experience, and enhance engagement.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- Caribou Business Overview Section -->
    <section id="caribou" class=" py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-2">
                <img src="https://www.kharigo.com/wholesale/public/web_images/favicon_128px.ico" class="my_logo">
            </div>
            <h2 class="text-center">Kharigo Business Ventures</h2>
            <p class="text-center lead mb-4">Discover the diverse range of businesses under the Kharigo brand name.</p>
            <div class="row">
                <!-- Kharigo Wholesale Distributor -->
                <div class="col-md-4 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">

                            <h3 class="card-title">Kharigo Wholesale Distributor</h3>
                            <p class="card-text">Providing a wide range of quality products through wholesale distribution, ensuring efficient supply chains and client satisfaction.</p>
                            <!-- <a class="btn btn-primary" href="https://www.kharigo.com/wholesale/">
                                Explore
                            </a> -->

                        </div>
                    </div>
                </div>
                <!-- Kharigo Ecstatic Manufacturing -->
                <div class="col-md-4 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h3 class="card-title">Kharigo Ecstatic Manufacturing</h3>
                            <p class="card-text">Crafting innovative and high-quality products that spark joy and excitement, bringing smiles to people's faces.</p>
                            <p class="card-text">With expertise in Incense Stick Manufacturing (Agarbatti), we create fragrant experiences that elevate spiritual and sensory well-being.</p>
                        </div>
                    </div>
                </div>

                <!-- Kharigo NGO -->
                <div class="col-md-4 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h3 class="card-title">Kharigo NGO</h3>
                            <p class="card-text">Dedicated to making a positive impact in the community through various social initiatives, creating meaningful change and empowerment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Kharigo Classes -->
                <div class="col-md-6 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h3 class="card-title">Kharigo Classes</h3>
                            <p class="card-text">Offering educational opportunities that empower individuals with knowledge and skills for personal and professional growth.</p>
                        </div>
                    </div>
                </div>
                <!-- Kharigo Tech -->
                <div class="col-md-6 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h3 class="card-title">Kharigo Tech</h3>
                            <p class="card-text">Your partner in web development and technology solutions, creating innovative digital solutions that drive business success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<?php $this->endSection(); ?>


<?php $this->section('script'); ?>

<script>
    $(document).ready(function() {

        $('#Contact-form').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            // Serialize form data
            var formData = $(this).serialize();
            $('#Contact-btn').hide(300);

            $.ajax({
                url: "contact_support",
                type: "POST",
                data: formData,
                success: function(response) {
                    console.log(":- " + response);
                    $("#Contact-response").html(response).fadeIn();
                    // Clear form fields after successful submission
                    $('#Contact-form')[0].reset();
                    setTimeout(function() {
                        $('#Contact-btn').show(300);

                        $("#Contact-response").fadeOut();
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

<?php $this->endSection(); ?>