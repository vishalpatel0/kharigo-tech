<!-- app/Views/home.php -->
<?php $this->extend('assets/template'); ?>
<?php $this->section('content'); ?>


<div class="content" id="content">
    <!-- Header Section -->
    <header class="header bg-light text-center ">
        <div class="container p-4">
            <h1>Welcome to Kharigo Tech</h1>
            <h2 style="font-size:150%">
                Let's Create Your Space in the Digital World
            </h2>
            <!--<h3 style="font-size:130%"></h3>-->
            <br>
            <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-self-center">
                    <div>
                        <h2> Our Expertise</h2>
                        <p>
                            We excel in a wide range of web development technologies, including HTML, CSS, JavaScript, Python, PHP, SQL, java, dart and more. Our front-end and back-end developers work collaboratively to deliver responsive, user-friendly, and feature-rich web experiences.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-self-center">
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

            </div>
        </div>
    </section>




    <!-- Services We Offer -->
    <section id="about" class="py-5 " data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2> Services We Offer</h2>
                    <ul>
                        <li>
                            <b> Custom Web Development:</b> Tailored web solutions designed to meet your unique requirements.
                        </li>
                        <li>
                            <b> E-commerce Development:</b> Powerful online stores optimized for user experience and conversion.
                        </li>
                        <li>
                            <b> Web Design:</b> Visually appealing, user-friendly designs that make a lasting impression.
                        </li>
                        <li>
                            <b> Content Management Systems (CMS):</b> Easy-to-manage websites to keep your content fresh.
                        </li>
                        <li>
                            <b> Digital Marketing: </b>Comprehensive digital marketing strategies to boost your online presence, engage your audience, and drive growth
                        </li>
                        <li>
                            <b> Web Maintenance: </b>Ongoing support, updates, and security enhancements to keep your site running smoothly.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h2>What Sets Us Apart</h2>
                    <ul>
                        <li>
                            <b> Client-Centric Approach:</b> We prioritize your goals and objectives, ensuring that every project aligns with your vision.
                        </li>
                        <li>
                            <b> Innovation: </b> We stay at the forefront of industry trends, embracing the latest technologies to keep your web presence modern and competitive.
                        </li>
                        <li>
                            <b> Quality Assurance: </b> Rigorous testing and quality assurance processes guarantee seamless performance, security, and reliability.
                        </li>
                        <li>
                            <b>Transparency:</b> We believe in open communication and keeping you informed throughout the development process.
                        </li>
                        <li>
                            <b> Timely Delivery:</b> We meet deadlines consistently to ensure your project goes live when you need it.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Get in Touch -->
    <section id="about" class="py-5  bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 d-flex align-self-center">
                    <div>
                        <h2> Get in Touch</h2>
                        <p>
                            Ready to embark on your next web development and digital marketing journey? Contact us today to discuss your ideas, and let's bring them to life!
                        </p>
                        <p>
                            We look forward to partnering with you to achieve your digital goals, create a dynamic online presence for your brand, and drive success through effective digital marketing strategies.
                        </p>
                    </div>
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

</div>


<?php $this->endSection(); ?>


<?php $this->section('script'); ?>

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
                url: 'submit_enquiry',
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

<?php $this->endSection(); ?>