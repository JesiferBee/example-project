@extends('layouts.app')

@section('main')
    <!-- Services Section -->
    <div class="container py-5">

        <!-- Page Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h1 class="fw-bolder display-4 mb-3">Our Services</h1>
                <p class="text-muted lead">
                    We offer a comprehensive suite of digital services designed to help your business grow, innovate, and
                    thrive in the modern world.
                </p>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="row g-4 mb-5">

            <!-- Service 1: Web Development -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <!-- Soft Background Icon Wrapper -->
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Web Development</h4>
                        <p class="text-muted mb-4">
                            Custom, responsive, and high-performance websites tailored to your specific business needs using
                            the latest technologies.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2: UI/UX Design -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479L12.258 3z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">UI/UX Design</h4>
                        <p class="text-muted mb-4">
                            Intuitive and stunning user interfaces that enhance user experience, increase engagement, and
                            drive conversions.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3: Digital Marketing -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.501c-.465.227-.954.37-1.46.425V14.5a1.5 1.5 0 0 1-3 0v-1.121c-.465-.121-.925-.296-1.368-.521l-.736 1.472a1.5 1.5 0 0 1-2.684-1.342l.718-1.436C3.125 10.665 2 9.43 2 8c0-1.43.5-2.665 1.47-3.498l-.718-1.436a1.5 1.5 0 0 1 2.684-1.342l.736 1.472c.443-.225.903-.4 1.368-.521V1.5a1.5 1.5 0 0 1 3 0v.501c.506.055.995.198 1.46.425V2.5zm-5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Digital Marketing</h4>
                        <p class="text-muted mb-4">
                            Data-driven marketing strategies, social media management, and ad campaigns to maximize your
                            brand reach.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4: Cloud Hosting -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">Cloud Hosting</h4>
                        <p class="text-muted mb-4">
                            Secure, scalable, and reliable cloud hosting solutions ensuring your applications are always
                            fast and available.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 5: SEO Optimization -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">SEO Optimization</h4>
                        <p class="text-muted mb-4">
                            Improve your visibility on Google. We optimize your website architecture and content to rank
                            higher in searches.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 6: 24/7 Support -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-lift">
                    <div class="card-body p-0">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 text-primary mb-4"
                            style="width: 70px; height: 70px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                            </svg>
                        </div>
                        <h4 class="fw-bold mb-3">24/7 Tech Support</h4>
                        <p class="text-muted mb-4">
                            Round-the-clock technical support and maintenance ensuring your business operations never face
                            downtime.
                        </p>
                        <a href="#" class="text-primary text-decoration-none fw-bold">
                            Learn more &rarr;
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Call to Action (CTA) - Unified Split Card -->
        <!-- This mirrors the exact layout logic of your Contact map/form card -->
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden mt-5">
            <div class="row g-0">

                <!-- Left Side: Image / Graphic -->
                <div class="col-lg-5 position-relative" style="min-height: 350px;">
                    <!-- Using a stock placeholder image from Unsplash to represent teamwork/services -->
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Team collaborating" class="position-absolute top-0 start-0 w-100 h-100"
                        style="object-fit: cover;">
                </div>

                <!-- Right Side: Content & Button -->
                <div class="col-lg-7 p-4 p-md-5 bg-primary text-white d-flex flex-column justify-content-center">
                    <h2 class="fw-bold mb-3">Ready to start your project?</h2>
                    <p class="mb-4 lead opacity-75">
                        Whether you need a complete digital transformation or just a simple website tweak, our team is ready
                        to bring your ideas to life. Let's build something amazing together.
                    </p>

                    <div>
                        <!-- Links back to your contact page -->
                        <a href="/contact" class="btn btn-light btn-lg fw-bold px-4 rounded-pill">
                            Get a Free Quote
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="ms-2 mb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Optional: Add a subtle hover effect via inline CSS just for the service cards -->
    <style>
        .hover-lift {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }
    </style>
@endsection