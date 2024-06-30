@extends('layout.app')
@section('title', 'Developer InZamS')
@section('description', 'Hi there, I am Inzams, and I am an experienced WordPress Web Font end Developer, with 2+ years of
experience. My first goal is to satisfy the client 100%. I will work according to all your requirements.')
@section('main')



    <!-- ...::: Start Hero Section :::... -->
    <div class="hero-section section-dark-blue-bg">
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="hero-content">
                            <h3 class="title-big">Hello! I’m</h3>
                            <h2 class="title-large">Mirta <span class="shape-mark">Akins</span></h2>
                            <p>UI/UX Designer specializing in Shopify & Webflow.</p>

                            <a href="#" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i class="fa-solid fa-file"></i></a>

                            <div class="video-link">
                                <a class="wave-btn" href="https://youtu.be/MKjhBO2xQzg" data-autoplay="true" data-vbtype="video">

                                    <div class="ripple"><i class="fa-solid fa-video"></i></div>
                                </a>

                                <span class="video-text"> Watch Video</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-shape hero-top-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="hero-shape hero-bottom-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="hero-portrait">
                <div class="image">
                    <img class="img-fluid" src="{{asset('assets/images/portrait-hero.webp')}}" alt="">

                    <div class="image-half-round-shape"></div>
                    <div class="social-link">
                        <a href="https://www.example.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.example.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.example.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.example.com" target="_blank"><i class="fa-solid fa-user"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ...::: End Hero Section :::... -->

    <!-- ...::: Start Service Display Section :::... -->
    <div class="service-display-section section-gap-tb-165 pos-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Content -->
                    <div class="section-content">
                        <span class="section-tag">My Services</span>
                        <h2 class="section-title">Service Provide For My Clients.</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>
        </div>

        <!-- Start Service Section Wrapper -->
        <div class="service-display-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="service-display-slider">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img src="assets/images/icon/service-icon-1.webp" alt=""></div>
                                        <h4 class="title"><a href="service-details.html">UI/UX Design</a></h4>
                                        <ul class="list-item">
                                            <li>Landing Pages</li>
                                            <li>User Flow</li>
                                            <li>Wireframing</li>
                                            <li>Prototyping</li>
                                            <li>Mobile App Design</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->
                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img src="assets/images/icon/service-icon-2.webp" alt=""></div>
                                        <h4 class="title"><a href="service-details.html">Development</a></h4>
                                        <ul class="list-item">
                                            <li>HTML/CSS</li>
                                            <li>JavaScript</li>
                                            <li>Animation</li>
                                            <li>WordPress</li>
                                            <li>React</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->
                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img src="assets/images/icon/service-icon-3.webp" alt=""></div>
                                        <h4 class="title"><a href="service-details.html">Illustration</a></h4>
                                        <ul class="list-item">
                                            <li>Character Design</li>
                                            <li>Icon Set</li>
                                            <li> Illustration Guide</li>
                                            <li>Illustration Set</li>
                                            <li>Motion Graphic</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="service-display-dots">
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- End Service Section Wrapper -->
    </div>
    <!-- ...::: End Service Display Section :::... -->

    <!-- ...::: Start Skill Display Section :::... -->
    <div class="skill-display-section section-gap-tb-165 section-bg pos-relative">
        <div class="skill-display-section-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-xxl-5">
                        <!-- Start Section Content -->
                        <div class="section-content">
                            <span class="section-tag">Special Skills</span>
                            <h2 class="section-title">My Special Skill Field Here.</h2>

                            <a href="#" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i class="fa-solid fa-download"></i></a>
                        </div>
                        <!-- End Section Content -->
                    </div>

                    <div class="col-xl-6 col-xxl-6 offset-xxl-1">
                        <!-- Start Skill Display Wrapper -->
                        <div class="skill-display-wrapper">
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Communication</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="75">
                                        <span class="skill-percentage">75%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Leadership</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="70">
                                        <span class="skill-percentage">70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Teamwork</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="90">
                                        <span class="skill-percentage">90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Flexibility</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="80">
                                        <span class="skill-percentage">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                        </div>
                        <!-- End Skill Display Wrapper -->
                    </div>
                </div>
            </div>
        </div>
        <div class="skill-display-shape"></div>
    </div>
    <!-- ...::: End Skill Display Section :::... -->

    <!-- ...::: Start Counter Display Section :::... -->
    <div class="counter-display-section section-gap-tb-165 section-bg-2">
        <div class="counter-display-wrapper">
            <div class="container">
                <div class="row justify-content-center justify-content-sm-start">
                    <div class="d-block d-md-flex justify-content-md-start col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="assets/images/icon/counterup-icon-1.webp" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">2,58</span>+</h2>
                                <span class="text">Happy Clients</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                    <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="assets/images/icon/counterup-icon-2.webp" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">590</span>K</h2>
                                <span class="text">Project Complete</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                    <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="assets/images/icon/counterup-icon-3.webp" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">28</span>+</h2>
                                <span class="text">Years of Experience</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Counter Display Section :::... -->

    <!-- ...::: Start Project Display Section :::... -->
    <div class="project-display-section section-gap-tb-165">
        <div class="project-display-box">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12 d-block d-md-flex justify-content-between">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative">
                            <span class="section-tag">Awesome Portfolio</span>
                            <h2 class="section-title">My Complete Projects</h2>
                        </div>
                        <!-- End Section Content -->

                        <div class="default-nav-style mt-6 mb-6 mb-md-0 ">
                            <!-- If we need navigation buttons -->
                            <div class="slider-button button-prev"><i class="fa-solid fa-angles-left"></i></div>
                            <div class="slider-button button-next"><i class="fa-solid fa-angles-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-display-wrapper">
                <div class="project-display-slider">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="assets/images/project/project-slider-img-1.webp" alt="">
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/project/project-slider-img-1.webp" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Givest - Non Profit PSD Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="">Chairty</a></li>
                                        <li><a href="">Fund Rising</a></li>
                                        <li><a href="">Non Profit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="assets/images/project/project-slider-img-2.webp" alt="">
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/project/project-slider-img-2.webp" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Musion - Gardening Website Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="">Gardeining</a></li>
                                        <li><a href="">Landscaping</a></li>
                                        <li><a href="">Greem</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="assets/images/project/project-slider-img-3.webp" alt="">
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/project/project-slider-img-3.webp" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">SEOLLY - SEO Marketing & Digital Agency</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="">Chairty</a></li>
                                        <li><a href="">Fund Rising</a></li>
                                        <li><a href="">Non Profit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="assets/images/project/project-slider-img-4.webp" alt="">
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/project/project-slider-img-4.webp" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Virtuf - Creative Agency Bootstrap 5 Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="">Gardeining</a></li>
                                        <li><a href="">Landscaping</a></li>
                                        <li><a href="">Greem</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ...::: End Project Display Section :::... -->

    <!-- ...::: Start Testimonial Display Section :::... -->
    <div class="testimonial-display-section section-gap-tb-165 section-bg">
        <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col d-xl-flex justify-content-xl-end">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative">
                            <span class="section-tag">Testimonial</span>
                            <h2 class="section-title">Satisfied Clients Say</h2>
                        </div>
                        <!-- End Section Content -->
                    </div>
                </div>

                <div class="testimonial-display-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-display-slider">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Start testimonial Slider Single Item -->
                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">Lorem Ipsum simpy dummy
                                                    text of the printing and types
                                                    industry has been the industr
                                                    standard dummy.</p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Raleigh Friend</h4>
                                                        <span class="designation">CEO, Seoly</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="blank"><i class="fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End testimonial Slider Single Item -->
                                        <!-- Start testimonial Slider Single Item -->
                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">Lorem Ipsum simpy dummy
                                                    text of the printing and types
                                                    industry has been the industr
                                                    standard dummy.</p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Raleigh Friend</h4>
                                                        <span class="designation">CEO, Seoly</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="blank"><i class="fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End testimonial Slider Single Item -->
                                        <!-- Start testimonial Slider Single Item -->
                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">Lorem Ipsum simpy dummy
                                                    text of the printing and types
                                                    industry has been the industr
                                                    standard dummy.</p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Raleigh Friend</h4>
                                                        <span class="designation">CEO, Seoly</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="fill"><i class="fa-solid fa-star"></i></li>
                                                        <li class="blank"><i class="fa-regular fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End testimonial Slider Single Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-nav-style mt-5 mt-xl-0">
                <!-- If we need navigation buttons -->
                <div class="slider-button button-prev"><i class="fa-solid fa-angles-left"></i></div>
                <div class="slider-button button-next"><i class="fa-solid fa-angles-right"></i></div>
            </div>
        </div>
    </div>
    <!-- ...::: End Testimonial Display Section :::... -->

    <!-- ...::: Start Company Logo Display Section :::... -->
    <div class="company-logo-display section-mt-165 ">
        <div class="company-logo-display-box">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative">
                            <span class="section-tag">Favourite Clients</span>
                            <h2 class="section-title">Work With Trusted Comapny.</h2>
                        </div>
                        <!-- End Section Content -->
                    </div>
                </div>

                <div class="company-logo-display-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="company-logo-display-slider">
                                <!-- Slider main container -->
                                <div class="swiper-container">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Start Company Logo Slider Single Item -->
                                        <div class="company-logo-single-item swiper-slide">
                                            <a href="#" class="image">
                                                <img src="assets/images/company-logo/1.webp" alt="">
                                                <img src="assets/images/company-logo/1.webp" alt="">
                                            </a>
                                        </div>
                                        <!-- End Company Logo Slider Single Item -->
                                        <!-- Start Company Logo Slider Single Item -->
                                        <div class="company-logo-single-item swiper-slide">
                                            <a href="#" class="image">
                                                <img src="assets/images/company-logo/2.webp" alt="">
                                                <img src="assets/images/company-logo/2.webp" alt="">
                                            </a>
                                        </div>
                                        <!-- End Company Logo Slider Single Item -->
                                        <!-- Start Company Logo Slider Single Item -->
                                        <div class="company-logo-single-item swiper-slide">
                                            <a href="#" class="image">
                                                <img src="assets/images/company-logo/3.webp" alt="">
                                                <img src="assets/images/company-logo/3.webp" alt="">
                                            </a>
                                        </div>
                                        <!-- End Company Logo Slider Single Item -->
                                        <!-- Start Company Logo Slider Single Item -->
                                        <div class="company-logo-single-item swiper-slide">
                                            <a href="#" class="image">
                                                <img src="assets/images/company-logo/4.webp" alt="">
                                                <img src="assets/images/company-logo/4.webp" alt="">
                                            </a>
                                        </div>
                                        <!-- End Company Logo Slider Single Item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Company Logo Display Section :::... -->

    <!-- ...::: Start Blog Feed Display Section :::... -->
    <div class="blog-feed-display-section section-gap-tb-165">
        <div class="blog-feed-display-box">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative text-center">
                            <span class="section-tag">Blog Post</span>
                            <h2 class="section-title">Latest Tips & Tricks</h2>
                        </div>
                        <!-- End Section Content -->
                    </div>
                </div>

                <div class="blog-feed-display-wrapper">
                    <div class="row mb-n5">
                        <div class="col-12 mb-5">
                            <!-- Start Blog Feed Single Item -->
                            <div class="blog-feed-single-item">
                                <div class="inner-shape inner-shape-top-right"></div>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/blog-feed-img-1.webp" alt="">
                                </a>
                                <div class="content-box">
                                    <div class="content">
                                        <div class="post-meta">
                                            <a href="#" class="catagory">Business</a>
                                            <a href="#" class="date">07 February, 2021</a>
                                        </div>
                                        <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                business to line these up.</a></h4>
                                    </div>
                                    <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>
                            <!-- End Blog Feed Single Item -->
                        </div>
                        <div class="col-12 mb-5">
                            <!-- Start Blog Feed Single Item -->
                            <div class="blog-feed-single-item">
                                <div class="inner-shape inner-shape-top-right"></div>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/blog-feed-img-2.webp" alt="">
                                </a>
                                <div class="content-box">
                                    <div class="content">
                                        <div class="post-meta">
                                            <a href="#" class="catagory">Business</a>
                                            <a href="#" class="date">07 February, 2021</a>
                                        </div>
                                        <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                business to line these up.</a></h4>
                                    </div>
                                    <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>
                            <!-- End Blog Feed Single Item -->
                        </div>
                        <div class="col-12 mb-5">
                            <!-- Start Blog Feed Single Item -->
                            <div class="blog-feed-single-item">
                                <div class="inner-shape inner-shape-top-right"></div>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/blog-feed-img-3.webp" alt="">
                                </a>
                                <div class="content-box">
                                    <div class="content">
                                        <div class="post-meta">
                                            <a href="#" class="catagory">Business</a>
                                            <a href="#" class="date">07 February, 2021</a>
                                        </div>
                                        <h4 class="title"><a href="blog-details-sidebar-left.html">Don't wait until you officially started
                                                business to line these up.</a></h4>
                                    </div>
                                    <a href="blog-details-sidebar-left.html" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>
                            <!-- End Blog Feed Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Blog Feed Display Section :::... -->




@endsection