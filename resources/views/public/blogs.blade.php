@extends('layout.app')
@section('title', 'Blog - Grow Up Your Position With Inzams')
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
                        <h2 class="title">Blog List Right Sidebar</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="blog-list.html">Blog</a></li>
                            <li class="active" aria-current="page">Blog List Right Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...::: Start Blog List Section :::... -->
<div class="blog-list-section section-mt-165">
    <div class="blog-list-box">
        <div class="container">
            <div class="row flex-lg-row-reverse flex-column-reverse">
                <div class="col-xl-4 col-lg-5">
                  <!-- Start Sidebar Widget Area-->
                  <div class="sidebar-widget-area">

                    <!-- Start Sidebar Widget Single Item - Search Widgets -->
                    <div class="sidebar-widget-single-area search-widgets">
                        <form class="search-widgets-box" action="#" method="post">
                            <input type="search" placeholder="Search here">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <!-- End Sidebar Widget Single Item - Search Widgets -->

                    <!-- Start Sidebar Widget Single Item - Catagory Widgets -->
                    <div class="sidebar-widget-single-area catagory-widgets">
                        <h3 class="title">Category</h3>
                        <ul class="widget-nav-list catagory-item-list">
                            <li><a href="#"><span class="text">UI/UX Design</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            <li><a href="#"><span class="text">Web Development</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            <li><a href="#"><span class="text">Brand Identity</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            <li><a href="#"><span class="text">Digital Marketing</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Widget Single Item - Catagory Widgets -->

                    <!-- Start Sidebar Widget Single Item - Resume Widgets -->
                    <div class="sidebar-widget-single-area resume-widgets">
                        <h3 class="title">Resume</h3>
                        <ul class="widget-nav-list resume-item-list">
                            <li><a href="#"><span class="text">Get Resume.pdf</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            <li><a href="#"><span class="text">Get Resume.doc</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            <li><a href="#"><span class="text">Get Resume.ppt</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Widget Single Item - Resume Widgets -->

                    <!-- Start Sidebar Widget Single Item - Recent Post Widgets -->
                    <div class="sidebar-widget-single-area recentpost-widget">
                        <h3 class="title">Recent Post</h3>
                        <ul class="recent-blog-item-list">
                            <li>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/recent-blog-img-1.webp" alt="">
                                </a>
                                <div class="content">
                                    <h4 class="title"><a href="blog-details-sidebar-left.html">Mistakes You Can Easily Avoid. </a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i> 09 Apr, 2021</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/recent-blog-img-2.webp" alt="">
                                </a>
                                <div class="content">
                                    <h4 class="title"><a href="blog-details-sidebar-left.html">We take your amazing journey.</a> </h4>
                                    <div class="post-meta">
                                        <a href="#" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i> 10 Apr, 2021</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/recent-blog-img-3.webp" alt="">
                                </a>
                                <div class="content">
                                    <h4 class="title"><a href="blog-details-sidebar-left.html">Things About Portfolio.</a> </h4>
                                    <div class="post-meta">
                                        <a href="#" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i> 13 Apr, 2021</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="blog-details-sidebar-left.html" class="image">
                                    <img src="assets/images/blog/recent-blog-img-4.webp" alt="">
                                </a>
                                <div class="content">
                                    <h4 class="title"><a href="blog-details-sidebar-left.html">Everyone Should Know .</a> </h4>
                                    <div class="post-meta">
                                        <a href="#" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i> 15 Apr, 2021</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar Widget Single Item - Recent Post Widgets -->

                    <!-- Start Sidebar Widget Single Item - Social Widgets -->
                    <div class="sidebar-widget-single-area ">
                        <h3 class="title">Follow Me</h3>
                        <ul class="social-link">
                            <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Widget Single Item - Social Widgets -->
                  </div>
                  <!-- End Sidebar Widget Area-->
                </div>
                <div class="col-xl-8 col-lg-7">
                    <!--  Start Blog List  -->
                    <div class="blog-list">
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-1.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-2.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-3.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-4.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-5.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-6.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                        <!-- Start Blog List  Single Item-->
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="blog-details-sidebar-left.html" class="image">
                                <img src="assets/images/blog/blog-feed-img-7.webp" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">Business</a>
                                    <a href="#" class="date">07 February, 2021</a>
                                </div>
                                <h4 class="title"><a href="#">Don't wait until you officially started business.</a></h4>

                                <div class="post-meta-2">
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-user"></i>Rolland Abell</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-heart"></i>5,678</a>
                                    <a href="#" class="icon-space-right"><i class="fa-solid fa-comment"></i>2,567</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog List  Single Item-->
                    </div>
                    <!--  End Blog List   -->

                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!--  Start Pagination  -->
                        <div class="pagination">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination-nav-list">
                                        <li class="prev"><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--  Start Pagination  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Blog List Section :::... -->

@endsection
