<?php $this->extend('assets/template'); ?>
<?php $this->section('content'); ?>
<style>
    del {
        color: #f006;
        font-size: 80%;
    }

    .card {
        box-shadow: 0 8px 10px rgba(0, 0, 0, 0.1)
    }

    .brst_plan {
        border: 4px solid var(--secondary-color);
    }
</style>
<div class="content" id="content">
    <header class="header bg-light text-center ">
        <div class="container p-4">
            <h1> Pricing & plans </h1>
            <h2 style="font-size:150%">
                Select best plan with best price for your business.
            </h2>
            <!--<h3 style="font-size:130%"></h3>-->
        </div>
    </header>

    <!-- Website Development Plan. -->
    <div class="container my-2 ">
        <div class="tital">
            <h2>Website Development.</h2>
        </div>
        <div class="row">
            <!-- Plan 1: Basic -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h3>Basic Plan</h3>
                        <h2>
                            ₹14,999* <del> ₹20,000</del>
                        </h2>
                        <h4>
                            Small Business
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>5-7 page website</li>
                            <li>Responsive design (mobile-friendly)</li>
                            <li>Contact form</li>
                            <li>Basic SEO optimization</li>
                            <li>Integration with social media profiles</li>
                            <li>Google Maps integration (if applicable)</li>
                            <li>Content management system (CMS) for easy updates</li>
                        </ul>
                        <a href="<?= base_url('contact-us') ?>" class="w-100 btn btn-primary btn-lg">Get Started</a>

                    </div>
                </div>
            </div>

            <!-- Plan 2: Standard -->
            <div class="col-lg-4 mb-4">
                <div class="card brst_plan">
                    <div class="card-header">
                        <h3>Standard Plan</h3>
                        <h2> ₹24,999* <del> ₹40,000 </del> </h2>
                        <h4>Medium Business</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>10-15 page website</li>
                            <li>Enhanced design and branding</li>
                            <li>Advanced SEO optimization</li>
                            <li>Blog or news section</li>
                            <li>Image gallery or portfolio</li>
                            <li>Integration with e-commerce platforms (if applicable)</li>
                            <li>Integration with mailing list services</li>
                            <li>CMS with more customization options</li>
                        </ul>
                        <a href="<?= base_url('contact-us') ?>" class="w-100 btn btn-primary btn-lg">Get Started</a>

                    </div>
                </div>
            </div>

            <!-- Plan 3: Premium -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h3>Premium Plan</h3>
                        <h2> ₹44,999* <del>₹80,000</del></h2>
                        <h4>Large Business</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Custom-designed website</li>
                            <li>Unlimited pages and sections</li>
                            <li>Advanced features like interactive elements and animations</li>
                            <li>E-commerce capabilities with advanced product management</li>
                            <li>Membership or user registration functionality</li>
                            <li>Integration with third-party APIs and services</li>
                            <li>Advanced security features</li>
                            <li>Ongoing maintenance and updates</li>
                        </ul>
                        <a href="<?= base_url('contact-us') ?>" class="w-100 btn btn-primary btn-lg">Get Started</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Maintenance and Service Plans -->
    <div class="container my-5 ">

        <div class="tital">
            <h2>Maintenance and Service Plans</h2>
        </div>
        <div class="row">
            <!-- Plan 4: Basic Maintenance -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h3>Basic Maintenance</h3>
                        <h5>
                            <p>Starting from
                            <h2>₹3,000*/month</h2>
                            </p>
                        </h5>

                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Regular software updates</li>
                            <li>Security monitoring and patches</li>
                            <li>Backup and restoration</li>
                            <li>Email support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Plan 5: Standard Maintenance -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h3>Standard Maintenance</h3>
                        <h5>
                            <p>Starting from
                            <h2>
                                ₹6,000*/month
                            </h2>
                            </p>
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>All features from Basic Maintenance</li>
                            <li>Performance optimization</li>
                            <li>Content updates</li>
                            <li>Priority email and chat support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Plan 6: Premium Maintenance -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h3>Premium Maintenance</h3>
                        <h5>
                            <p>Starting from
                            <h2>
                                ₹10,000* /month
                            </h2>
                            </p>
                        </h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>All features from Standard Maintenance</li>
                            <li>24/7 monitoring</li>
                            <li>Emergency support</li>
                            <li>Monthly performance reports</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- SEO & Marketing -->
    <div class="container my-5">
        <div class="tital">
            <h2> SEO & Marketing </h2>
        </div>
        <div class="row">
            <!-- Social Media Marketing Plan -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h2>Social Media Marketing</h2>
                        <p>Starting from ₹8,000* /month</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Creation and management of social media profiles</li>
                            <li>Content creation and scheduling</li>
                            <li>Engagement with followers</li>
                            <li>Ad campaigns and promotions</li>
                            <li>Performance analytics</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing Plan -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h2>Digital Marketing</h2>
                        <p>Starting from ₹15,000* /month</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Social media marketing</li>
                            <li>Email marketing campaigns</li>
                            <li>Search engine marketing (SEM)</li>
                            <li>Conversion rate optimization</li>
                            <li>Analytics and reporting</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- SEO Plan -->
            <div class="col-lg-4 mb-4">
                <div class="card" data-aos="fade-up">
                    <div class="card-header">
                        <h2>SEO (Search Engine Optimization)</h2>
                        <p>Starting from ₹12,000* /month</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Keyword research and optimization</li>
                            <li>On-page and off-page SEO</li>
                            <li>Technical SEO audit</li>
                            <li>Link building strategies</li>
                            <li>Regular performance tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Plans -->
    <div class="container my-5 d-flex justify-content-center">
        <!-- Custom Plans -->
        <div class="col-sm-8 mb-4">
            <div class="accordion" id="customPlansAccordion">
                <!-- Content Creation Add-On -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="contentCreationHeader">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#contentCreationCollapse" aria-expanded="true" aria-controls="contentCreationCollapse">
                            Content Creation Add-On
                        </button>
                    </h2>
                    <div id="contentCreationCollapse" class="accordion-collapse collapse show" aria-labelledby="contentCreationHeader">
                        <div class="accordion-body">
                            <p>Elevate your website with captivating content that resonates with your audience. Our Content Creation Add-On, starting from ₹5,000, includes expertly crafted text and engaging visuals that tell your brand's story effectively.</p>
                        </div>
                    </div>
                </div>

                <!-- Branding Boost -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="brandingBoostHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#brandingBoostCollapse" aria-expanded="false" aria-controls="brandingBoostCollapse">
                            Branding Boost
                        </button>
                    </h2>
                    <div id="brandingBoostCollapse" class="accordion-collapse collapse" aria-labelledby="brandingBoostHeader">
                        <div class="accordion-body">
                            <p>Transform your online identity with our Branding Boost package, starting from ₹7,500. This plan includes a basic logo design and branding elements that create a consistent and memorable image for your business.</p>
                        </div>
                    </div>
                </div>

                <!-- Training and Support -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="trainingSupportHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#trainingSupportCollapse" aria-expanded="false" aria-controls="trainingSupportCollapse">
                            Training and Support
                        </button>
                    </h2>
                    <div id="trainingSupportCollapse" class="accordion-collapse collapse" aria-labelledby="trainingSupportHeader">
                        <div class="accordion-body">
                            <p>Empower yourself with the knowledge to manage your website. Our Training and Support package, available from ₹2,500, offers personalized sessions to guide you through content updates, platform usage, and basic troubleshooting.</p>
                        </div>
                    </div>
                </div>

                <!-- Domain and Hosting Assistance -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="domainHostingHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#domainHostingCollapse" aria-expanded="false" aria-controls="domainHostingCollapse">
                            Domain and Hosting Assistance
                        </button>
                    </h2>
                    <div id="domainHostingCollapse" class="accordion-collapse collapse" aria-labelledby="domainHostingHeader">
                        <div class="accordion-body">
                            <p>Secure your unique online address effortlessly with our Domain and Hosting Assistance service, priced at ₹1,500. We'll help you choose the perfect domain name and recommend hosting options that suit your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php $this->endSection(); ?>


<?php $this->section('script'); ?>


<?php $this->endSection(); ?>