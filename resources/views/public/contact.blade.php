@extends('layout.app')
@section('title', 'Contact - Grow Up Your Position With Inzams')
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
                        <h2 class="title">Contact Me</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active" aria-current="page">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...::: Start Contact Section :::... -->
<div class="contact-section section-gap-tb-165">
    <div class="contact-box pos-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Map Area-->
                    <div class="map">
                        <div class="gmap-box">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <!-- End Map Area -->
                </div>
            </div>
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-4">
                    <div class="contact-sidebar-wapper">
                        <div class="contact-sidebar">
                            <!-- Start Project Sidebar Item -->
                            <ul class="contact-sidebar-list-item">
                                <!-- Start contact Single Box -->
                                <li class="contact-sidebar-single-box">
                                    <h6 class="title-text">Phone:</h6>
                                    <a href="tel:+0123456789" class="link">0123456789</a>
                                </li>
                                <!-- End contact Single Box -->
                                <!-- Start contact Single Box -->
                                <li class="contact-sidebar-single-box">
                                    <h6 class="title-text">Email:</h6>
                                    <a href="mailto:demo@example.com" class="link">demo@example.com</a>
                                </li>
                                <!-- End contact Single Box -->
                                <!-- Start contact Single Box -->
                                <li class="contact-sidebar-single-box">
                                    <h6 class="title-text">Website:</h6>
                                    <a href="https://www.example.com" class="link">www.example.com</a>
                                </li>
                                <!-- End contact Single Box -->
                                <!-- Start contact Single Box -->
                                <li class="contact-sidebar-single-box">
                                    <h6 class="title-text">Address:</h6>
                                    <span class="text"> Your address goes here.</span>
                                </li>
                                <!-- End contact Single Box -->
                            </ul>
                            <!-- End Project Sidebar Item -->
                        </div>
                        <!-- Start Sidebar Widget Single Item - Social Widgets -->
                        <div class="sidebar-widget-single-area ">
                            <h3 class="title">Follow Me</h3>
                            <ul class="social-link">
                                <li><a href="https://www.facebook.com/developerinzams" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/c/developerinzams" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/inzams/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Sidebar Widget Single Item - Social Widgets -->
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="contact-form-wrapper section-mt-165">
                        <!-- Start Section Content -->
                        <div class="content">
                            <span class="section-tag">Get In Touch</span>
                            <h2 class="title">If you have any porject or need help. Contact me</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting emndustry lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown print
                                only five centuries, but also the leap into electronic.</p>
                        </div>
                        <!-- End Section Content -->

                        <!-- Start Contact Form Box -->
                        <div class="contact-form-box">
                            <form class="default-form contact-form" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="row mb-n6">
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input name="name" type="text" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input name="email" type="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input name="phone" type="tel" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input name="subject" type="text" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-6">
                                        <div class="default-form-group">
                                            <textarea name="message" placeholder="Comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-6">
                                        <div class="default-form-group">
                                            <div class="g-recaptcha" data-sitekey="6LeN0A8qAAAAAAc8OgEofs_l0b1QvqE-3ZDo0Z4e"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-6">
                                        <div class="default-form-group tex-center">
                                            <button type="submit" class="btn btn-lg btn-outline-one">Submit Message</button>
                                        </div>
                                    </div>

                                    <p class="form-messege"> {{ session('message') }} </p>
                                </div>
                            </form>

                        </div>

                        <!-- End Contact Form Box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Contact Section :::... -->

@endsection
