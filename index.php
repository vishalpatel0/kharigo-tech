<?php
$page_tital = "Kharigo Tech - Your Partner in Web Development and Technology Solutions";
$page_description = "Kharigo Tech is your partner in web development and IT solutions. We specialize in creating cutting-edge websites, web applications, and more.";
?>

<?php include_once "head.php"; ?>
<?php include_once "nav.php"; ?>


<div class="content" id="content">
    <!-- Header Section -->
    <header class="header bg-light text-center ">
        <div class="container p-4">
            <h1>Welcome to Kharigo Tech</h1>
            <p>Your Partner in Web Development and Technology Solutions</p>
            <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>We specialize in creating cutting-edge websites, web applications, and content management systems using
                        technologies such as HTML, CSS, JavaScript, PHP, MySQL, and Python.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://media.istockphoto.com/id/1355087142/vector/vector-of-a-group-of-people-lifting-up-a-financial-graph-and-arrow.jpg?s=612x612&w=0&k=20&c=e29fRso0n4qSvkTKkb-c6cYVGmAqMT0MekvEtA1xS28=" alt="About Us Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Enquiry Form Section -->
    <section id="enquiry" class="bg-light py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center" data-aos="fade-right">
                    <h2 class="mb-4 mt-4">Let's Turn Your Ideas into Reality</h2>
                    <p class="lead mb-4">You've got a vision, and we have the expertise to bring it to life. Whether it's a cutting-edge website, a powerful web application, or a seamless content management system, we're here to turn your digital dreams into reality.</p>
                    <!-- <a href="#contact" class="btn btn-primary btn-lg">Get Started</a> -->
                </div>
                <div class="col-md-6 mx-auto " data-aos="fade-up">
                    <div class="enquiry-form mt-4">
                        <h3 class="text-center mb-4">Ready to Get Started?</h3>
                        <form id="enquiry-form" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Tell Us About Your Project" name="message" rows="4" required></textarea>
                            </div>
                            <h3 class="">
                                <div id="response" class="p-3 m-2"></div>
                            </h3>
                            <button type="submit" id="enquiry-btn" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    <section id="services" class=" py-5">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-laptop display-4 mb-3"></i>
                        <h3>Ecommerce Website</h3>
                        <p>We create stunning and functional ecommerce websites that drive sales and enhance user experiences.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-gear display-4 mb-3"></i>
                        <h3>Billing Software</h3>
                        <p>Our billing software solutions streamline financial operations and improve billing accuracy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-layers display-4 mb-3"></i>
                        <h3>Website SEO</h3>
                        <p>We optimize websites for search engines, improving visibility and driving organic traffic.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-database display-4 mb-3"></i>

                        <h3>Web Application Development</h3>
                        <p>We develop custom web applications tailored to your business processes and requirements.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-calendar-event display-4 mb-3"></i>
                        <h3>Scheduling System</h3>
                        <p>Our scheduling systems help manage appointments, bookings, and resource allocation efficiently.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item text-center" data-aos="zoom-in">
                        <i class="bi bi-file-earmark-code display-4 mb-3"></i>
                        <h3>Content Management</h3>
                        <p>We provide user-friendly content management systems for easy website updates and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problems We Solve Section -->
    <section id="problems" class=" bg-light py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center">Problems We Solve</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>We understand the challenges businesses face in the digital landscape. Our solutions address these issues head-on, enabling you to focus on growth and success.</p>
                    <ul>
                        <li><strong>Outdated Websites:</strong> We revitalize outdated websites, ensuring they're modern, responsive, and effective in engaging users.</li>
                        <li><strong>Lack of Online Presence:</strong> We build your online presence, helping you reach a wider audience and increase brand visibility.</li>
                        <li><strong>Complex Systems:</strong> Our user-friendly applications simplify complex processes, enhancing efficiency and productivity.</li>
                        <li><strong>Low Conversion Rates:</strong> We optimize websites for conversions, turning visitors into customers with compelling user experiences.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Future Advancements Section -->
    <section id="future" class=" py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center">Future Advancements</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <p>At Kharigo Tech, we are committed to continuous innovation to better serve our clients. We are excited about the future and these upcoming advancements:</p>
                    <ul>
                        <li><strong>AI-Powered Solutions:</strong> Incorporating artificial intelligence to create smarter, data-driven applications.</li>
                        <li><strong>Expanded Ecommerce:</strong> Enhancing our ecommerce offerings with cutting-edge features for an unparalleled shopping experience.</li>
                        <li><strong>Intuitive UX Design:</strong> Implementing intuitive user experience (UX) design principles for enhanced usability.</li>
                        <li><strong>Advanced Analytics:</strong> Providing in-depth analytics to help you make informed business decisions.</li>
                    </ul>
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






    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
            <h2 class="text-center">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>If you have any questions or inquiries, feel free to get in touch with us. We'd love to hear from
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


    <!-- Caribou Business Overview Section -->
    <section id="caribou" class="bg-light py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center">Kharigo Business Ventures</h2>
            <p class="text-center lead mb-4">Discover the diverse range of businesses under the Kharigo brand name.</p>
            <div class="row">
                <!-- Kharigo Wholesale Distributor -->
                <div class="col-md-4 mb-4">
                    <div class="card" data-aos="zoom-in-down">
                        <div class="card-body">
                            <h3 class="card-title">Kharigo Wholesale Distributor</h3>
                            <p class="card-text">Providing a wide range of quality products through wholesale distribution, ensuring efficient supply chains and client satisfaction.</p>
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

<?php include_once "footer.php"; ?>

<script>
    $(document).ready(function() {
        $('#enquiry-form').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Serialize form data
            var formData = $(this).serialize();
            $('#enquiry-btn').hide(300);
            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: 'submit_enquiry.php',
                data: formData,
                success: function(response) {
                    console.log(":- " + response);
                    // Display response in the 'response' div
                    $('#response').html(response);
                    setTimeout(function() {
                        $('#enquiry-btn').show(300);
                        $("#response").fadeOut();
                    }, 3000);
                    // Clear form fields after successful submission
                    $('#enquiry-form')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#response').html("An error occurred while submitting the form.");
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('#Contact-form').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission
            // Serialize form data
            var formData = $(this).serialize();
            $('#Contact-btn').hide(300);

            $.ajax({
                url: "contact_support.php",
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

</body>

</html>