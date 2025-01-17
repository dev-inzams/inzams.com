@extends('layout.app')
@section('title', 'Services - Grow Up Your Position With Inzams')
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
                        <h2 class="title">Services</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="service-list.html">Service</a></li>
                            <li class="active" aria-current="page">Service List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->


 <!-- ...::: Start Service List Section :::... -->
 <div class="service-list-section section-gap-tb-165">
    <div class="container">
        <div class="row mb-n6">
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
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
                <!-- End Service Single Item -->
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
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
                <!-- End Service Single Item -->
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
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
                <!-- End Service Single Item -->
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
                    <div class="inner-shape inner-shape-top-right"></div>
                    <div class="icon"><img src="assets/images/icon/service-icon-4.webp" alt=""></div>
                    <h4 class="title"><a href="service-details.html">SEO Marketing</a></h4>
                    <ul class="list-item">
                        <li>White Hat SEO</li>
                        <li>Black Hat SEO</li>
                        <li>Grey Hat SEO</li>
                        <li> Negative SEO</li>
                        <li> On-Page SEO</li>
                    </ul>
                    <div class="inner-shape inner-shape-bottom-right"></div>
                </div>
                <!-- End Service Single Item -->
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
                    <div class="inner-shape inner-shape-top-right"></div>
                    <div class="icon"><img src="assets/images/icon/service-icon-5.webp" alt=""></div>
                    <h4 class="title"><a href="service-details.html">Data Analysis</a></h4>
                    <ul class="list-item">
                        <li>Diagnostic Analysis</li>
                        <li>Predictive Analysis</li>
                        <li>Prescriptive Analysis</li>
                        <li>Risk Assessment</li>
                        <li>Sales Forecasting</li>
                    </ul>
                    <div class="inner-shape inner-shape-bottom-right"></div>
                </div>
                <!-- End Service Single Item -->
            </div>
            <div class="col-xl-4 col-md-6 col-12 mb-6">
                <!-- Start Service Single Item -->
                <div class="service-box-single-item">
                    <div class="inner-shape inner-shape-top-right"></div>
                    <div class="icon"><img src="assets/images/icon/service-icon-6.webp" alt=""></div>
                    <h4 class="title"><a href="service-details.html">Brand Identity</a></h4>
                    <ul class="list-item">
                        <li>Brand Architecture</li>
                        <li> Brand Authenticity</li>
                        <li>Brand Awareness</li>
                        <li>Brand Management</li>
                        <li>Brand Metrics</li>
                    </ul>
                    <div class="inner-shape inner-shape-bottom-right"></div>
                </div>
                <!-- End Service Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Service List Section :::... -->



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
