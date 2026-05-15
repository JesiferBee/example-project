<section class="hero bg-subtle-light py-5 overflow-hidden">
    <div class="container py-5">
        
        <!-- align-items-center perfectly centers the text vertically with the image -->
        <!-- g-5 adds a nice large gap between the columns -->
        <div class="row align-items-center g-5">
            
            <!-- Hero Text Column -->
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-4 fw-bold mb-3 tracking-tight">
                    Meet the new <br>
                    <span class="text-gradient">IPhone 17 Pro Max</span>
                </h1>

                <p class="lead text-muted mb-4 pe-lg-4">
                    Powered by the Apple A19 Pro chip, featuring a stunning
                    titanium design, advanced AI capabilities, professional
                    camera system, and all-day battery life.
                </p>

                <!-- Button Group: d-flex and gap-3 keep them spaced beautifully -->
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3 mt-4">
                    <a href="#" class="btn btn-dark-custom btn-lg rounded-pill px-5 py-2 shadow-sm fw-medium">
                        Buy Now
                    </a>
                    <a href="#" class="btn btn-outline-dark btn-lg rounded-pill px-5 py-2 fw-medium d-flex align-items-center justify-content-center gap-2">
                        Learn More <i class="bi bi-chevron-right small"></i>
                    </a>
                </div>
            </div>

            <!-- Hero Image Column -->
            <div class="col-lg-6">
                <div class="hero-img-wrapper position-relative">
                    <!-- img-fluid ensures the image never overflows its container -->
                    <!-- rounded-4 and shadow-lg give it a framed, premium look -->
                    <img src="https://www.apple.com/my/iphone-17-pro/images/meta/iphone-17-pro_specs__dmh6t574x92e_og.png" 
                         alt="iPhone 16 Pro" 
                         class="img-fluid rounded-4 shadow-lg w-100 object-fit-cover"
                         style="max-height: 600px;">
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Subtle styling for a premium Apple-like feel */
    .bg-subtle-light {
        background-color: #fbfbfd;
        /* Very soft gray/white */
    }

    /* Gradient text effect for the product name */
    .text-gradient {
        background: linear-gradient(90deg, #434343 0%, #8d8d8d 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Custom Dark Button (Apple style) */
    .btn-dark-custom {
        background-color: #1d1d1f;
        border-color: #1d1d1f;
        color: #fff;
        transition: all 0.3s ease;
    }

    .btn-dark-custom:hover {
        background-color: #424245;
        border-color: #424245;
        color: #fff;
    }

    /* Image hover effect */
    .hero-img-wrapper img {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .hero-img-wrapper img:hover {
        transform: translateY(-5px) scale(1.01);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }
</style>