@extends('layout.app')
@section('title', 'Developer InZamS')
@section('description', 'Hi there, I am Inzams, and I am an experienced WordPress Web Font end Developer, with 2+ years of
experience. My first goal is to satisfy the client 100%. I will work according to all your requirements.')
@section('keywords', 'wordpress developer, laravel developer, best fiverr wordpress expert, best freelancer in bangladesh, best wordpress experts')
@section('main')


    <!-- ...::: Start Hero Section :::... -->
    <div class="hero-section section-dark-blue-bg">
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="hero-content">
                            <h3 class="title-big">Hello! I’m Developer</h3>
                            <h2 class="title-large"><span class="shape-mark">InZam'S</span></h2>
                            <p>Wordpress And Laravel Developer.</p>

                            <a href="#" class="btn btn-xl btn-outline-one icon-space-left">Get Resume <i class="fa-solid fa-file"></i></a>

                            <div class="video-link">
                                <a class="wave-btn" href="https://youtu.be/9sY242MOqm8?si=sflJh735lRJ9-Tm2" data-autoplay="true" data-vbtype="video">

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
                    <img class="img-fluid" src="{{asset('assets/images/inzams-main.png')}}" alt="">

                    <div class="image-half-round-shape"></div>
                    <div class="social-link">
                        <a href="https://www.facebook.com/developerinzams" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.youtube.com/c/developerinzams" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/in/inzams/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.inzams.com" target="_blank"><i class="fa-solid fa-user"></i></a>
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
                                <img src="{{asset('assets/images/icon/counterup-icon-1.webp')}}" alt="">
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
                                <img src="{{asset('assets/images/icon/counterup-icon-2.webp')}}" alt="">
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
                                <img src="{{asset('assets/images/icon/counterup-icon-3.webp')}}" alt="">
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
                            @foreach ($projects as $project )

                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{ asset('uploads/projects/').'/'.$project->full_image }}" alt="{{__($project->title)}}}">
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('uploads/projects/').'/'.$project->full_image }}" alt="{{__($project->title)}}}">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="{{route('project-details', $project->slug)}}">{{__($project->title)}}</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li>{{__($project->clients)}}</li>
                                        <li>{{__($project->projectCategory->title)}}</li>
                                        <li>{{__($project->duration)}}</li>
                                    </ul>
                                </div>
                            </div>

                            @endforeach
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
                        @foreach ( $blogs as $blog)
                        <div class="col-12 mb-5">
                            <!-- Start Blog Feed Single Item -->
                            <div class="blog-feed-single-item">
                                <div class="inner-shape inner-shape-top-right"></div>
                                <a href="{{route('blog-details',$blog->slug)}}" class="image">
                                    <img src="{{ asset('uploads/blogs/').'/'.$blog->image }}" alt="{{__($blog->title)}}">
                                </a>
                                <div class="content-box">
                                    <div class="content">
                                        <div class="post-meta">
                                            <a href="{{route('blog-archive',$blog->blogCategory->id)}}" class="catagory">{{__($blog->blogCategory->title)}}</a>
                                            <span class="date">{{ $blog->created_at }}</span>
                                        </div>
                                        <h4 class="title"><a href="{{route('blog-details',$blog->slug)}}">{{__($blog->title)}}</a></h4>
                                    </div>
                                    <a href="{{route('blog-details',$blog->slug)}}" class="btn btn-md btn-outline-one icon-space-left">Read More<i class="fa-solid fa-arrow-right"></i></a>
                                </div>

                            </div>
                            <!-- End Blog Feed Single Item -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Blog Feed Display Section :::... -->


  <!-- Modal -->
  <div style="{{ session()->has('success') ? 'display: block' : '' }}" class="modal fade {{ session()->has('success') ? 'show' : '' }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <img src="{{asset('images/subscribe-done.webp')}}" alt="Bangladeshi best freelancer is Developer Inzams">
        </div>
        <div class="modal-footer">
          <button id="done" type="button" class="btn btn-danger" data-bs-dismiss="modal">Done</button>
        </div>
      </div>
    </div>
  </div>

<script>
    const done = document.getElementById('done');
    done.addEventListener('click', () => {
        window.location.reload();
    });
</script>

@endsection
