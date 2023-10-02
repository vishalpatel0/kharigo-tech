<!-- app/Views/home.php -->
<?php $this->extend('assets/template'); ?>
<?php $this->section('content'); ?>


<div class="content" id="content">
    <!-- Header Section -->
    <header class="header bg-light text-center ">
        <div class="container p-4">
            <h1> About Us</h1>
            <!-- <h2 style="font-size:150%">
                Let's Create Your Space in the Digital World
            </h2> -->
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-self-center ">
                    <!-- <h2>About Us</h2> -->
                    <div>
                        <h2> About Kharigo </h2>
                        <p class="text-justify">
                            At Kharigo, we are passionate about crafting exceptional web solutions that empower businesses and individuals in the digital world. With a dedicated team of skilled developers, designers, and digital strategists, we specialize in creating customized web applications, websites, and e-commerce platforms tailored to your unique needs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-self-center">
                    <img src="https://media.istockphoto.com/id/1355087142/vector/vector-of-a-group-of-people-lifting-up-a-financial-graph-and-arrow.jpg?s=612x612&w=0&k=20&c=e29fRso0n4qSvkTKkb-c6cYVGmAqMT0MekvEtA1xS28=" alt="About Us Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission -->
    <section id="about" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Vision</h2>
                    <p>
                        Our vision is to empower businesses and individuals with cutting-edge web solutions that drive innovation, growth, and online success."
                    </p>
                </div>
                <div class="col-lg-6">
                    <h2>Mission</h2>
                    <p>
                        Our mission is to provide exceptional web development services to businesses of all sizes, delivering high-quality, user-centric websites and applications that leverage the latest technologies. We prioritize integrity, creativity, and client satisfaction in everything we do.
                    </p>
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


<?php $this->endSection(); ?>