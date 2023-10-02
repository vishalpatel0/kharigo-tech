<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg  ">
    <div class="container">
        <b>
            <a class="navbar-brand" href="<?= base_url() ?>"  >
                <img src="<?= base_url() ?>public/web_images/logo-name.png" alt="kharigo logo" class="nav-logo">
            </a>
        </b>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item" >
                    <a class="nav-link"    href="<?= base_url('about-us') ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= base_url('services') ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="<?= base_url('pricing-plans') ?>">Pricing & plans</a>
                </li>




                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tools
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="Tools/Image_compress/">Image compress</a></li>
                    </ul>
                </li> -->

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" target="_blank" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ventures
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" target="_blank" href="wholesale">Wholesale</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link"  href="<?= base_url('contact-us') ?>">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>