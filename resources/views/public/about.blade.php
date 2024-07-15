@extends('layout.app')
@section('title', 'About - Grow Up Your Position With Inzams')
@section('description', 'Hi there, I am Inzams, and I am an experienced WordPress Web Font end Developer, with 2+ years of
experience. My first goal is to satisfy the client 100%. I will work according to all your requirements.')
@section('main')

<!-- ...::: Start Breadcrumb Section :::... -->
<div class="breadcrumb-section section-bg overflow-hidden pos-relative">
    <div class="breadcrumb-shape-top-left"></div>
    <div class="breadcrumb-shape-bottom-right"></div>
    <div class="breadcrumb-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About Us</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li class="active" aria-current="page">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...::: Start Vider Info Display Section :::... -->
<div class="video-info-display-section section-gap-tb-165">
    <div class="video-info-display-box">
        <div class="container">
            <div class="video-info-display-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-8 col-10 offset-1 offset-sm-2 offset-md-3 offset-lg-0">
                        <div class="video-card">
                            <a class="wave-btn" href="https://youtu.be/xJLq9rVLLwM?si=uOpQZFh_zkRNKZhF" data-autoplay="true" data-vbtype="video">
                                <div class="ripple"><i class="fa-solid fa-video"></i></div>
                            </a>

                            <a href="#" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i class="fa-solid fa-file"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 offset-md-2 offset-lg-0 offset-xl-1">
                        <div class="video-info-content">
                            <h2 class="title">I’m InZam'S</h2>

                            <h3 class="sub-title">
                                Wordpress And Laravel Developer.
                            </h3>

                            <p>I am an experienced WordPress Web Font end Developer, with 2+ years of experience. My first goal is to satisfy the client 100%. I will work according to all your requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Vider Info Display Section :::... -->

<!-- ...::: Start Resume Info Display Section :::... -->
<div class="resume-info-display-section  section-gap-tb-165 section-bg">
    <div class="resume-info-display-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="resume-tab nav">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#education-tab">Education</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#experience-tab">Experience</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="resume-info-display-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="education-tab" role="tabpanel">
                                <ul class="resume-list">
                                    <!-- Start Resume Tab List Single Item -->
                                    <li class="resume-tab-list-single-item">
                                        <div class="content">
                                            <div class="left">
                                                <span class="year">2020 - Present</span>
                                            </div>
                                            <div class="right">
                                                <h3 class="title">Bachelor of Arts </h3>
                                                <span class="institute-name">Rajshahi Collage, Rajshahi</span>
                                                <p>I am currently studying Philosophy subject under National University of Rajshahi College. I am currently studying in second year, and trying to make a living by freelancing along with my studies.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Resume Tab List Single Item -->
                                    <!-- Start Resume Tab List Single Item -->
                                    <li class="resume-tab-list-single-item">
                                        <div class="content">
                                            <div class="left">
                                                <span class="year">2020 - 2021</span>
                                            </div>
                                            <div class="right">
                                                <h3 class="title">Advanced WordPress Development</h3>
                                                <span class="institute-name">Sorobindu, Dinajpur</span>
                                                <p>By completing a course on advanced wordpress from Sorobindu through Germ I can create any type of website with wordpress like e-commerce blog news paper etc.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Resume Tab List Single Item -->
                                    <!-- Start Resume Tab List Single Item -->
                                    <li class="resume-tab-list-single-item">
                                        <div class="content">
                                            <div class="left">
                                                <span class="year">2023 - 2024</span>
                                            </div>
                                            <div class="right">
                                                <h3 class="title">Advanced Laravel</h3>
                                                <span class="institute-name">Ostad, Dhaka</span>
                                                <p>From Ustad, I completed the course of Lagban language on programming, now I can create any type of website through Laravel and I am working in Technuxt company with Laravel.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Resume Tab List Single Item -->
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="experience-tab" role="tabpanel">
                                <ul class="resume-list">
                                    <!-- Start Resume Tab List Single Item -->
                                    <li class="resume-tab-list-single-item">
                                        <div class="content">
                                            <div class="left">
                                                <span class="year">2021 - At Present</span>
                                            </div>
                                            <div class="right">
                                                <h3 class="title">Web Designer</h3>
                                                <span class="institute-name">Fiverr</span>
                                                <p>As a web designer I have been working in fiber since 2021 till now I have about three years of experience here</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Resume Tab List Single Item -->
                                    <!-- Start Resume Tab List Single Item -->
                                    <li class="resume-tab-list-single-item">
                                        <div class="content">
                                            <div class="left">
                                                <span class="year">2024 - At Present</span>
                                            </div>
                                            <div class="right">
                                                <h3 class="title">Laravel Web Developer</h3>
                                                <span class="institute-name">Technuxt</span>
                                                <p>At TEchnuxt I am engaged as a Laravel developer and I am the chip executive officer there</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End Resume Tab List Single Item -->

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Resume Info Display Section :::... -->

<!-- ...::: Start Counter Display Section :::... -->
<div class="counter-display-section section-gap-tb-165 section-bg-2">
    <div class="counter-display-wrapper">
        <div class="container">
            <div class="row justify-content-center justify-content-sm-start">
                <div class="d-block d-md-flex justify-content-md-start col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icon/counterup-icon-1.webp')}}" alt="Best web developer in Bangladesh">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">20</span>+</h2>
                            <span class="text">Happy Clients</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icon/counterup-icon-2.webp')}}" alt="Best laravel developer">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">200</span>H</h2>
                            <span class="text">Project Complete</span>
                        </div>
                    </div>
                    <!-- End Counterup Single Item -->
                </div>
                <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                    <!-- Start Counterup Single Item -->
                    <div class="counterup-single-item">
                        <div class="icon">
                            <img src="{{asset('assets/images/icon/counterup-icon-3.webp')}}" alt="Laravel developer">
                        </div>
                        <div class="content">
                            <h2 class="number"><span class="counter">3</span>+</h2>
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

<!-- ...::: Start Testimonial Display Section :::... -->
<div class="testimonial-display-section section-gap-tb-165 section-bg">
    <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">
        <div class="container overflow-hidden">

            <div class="testimonial-display-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-display-slider">
                            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                            <div class="elfsight-app-2fb3124c-c231-4e8f-998d-2fc8d29d45b4" data-elfsight-app-lazy></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ...::: End Testimonial Display Section :::... -->

<!-- ...::: Start Company Logo Display Section :::... -->
<div class="company-logo-display section-mt-165 mb-5">
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
                                    @foreach ($companies as  $company )
                                         <div class="company-logo-single-item swiper-slide">
                                            <a href="{{ $company->url }}" class="image">
                                                <img src="{{ asset('uploads/companies/').'/'.$company->image }}" alt="Wordpress expert">
                                                <img src="{{ asset('uploads/companies/').'/'.$company->image }}" alt="wordpress expert">
                                                <h2 class="section-tag">{{ $company->name }}</h2>
                                            </a>
                                        </div>
                                        @endforeach
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


@endsection
