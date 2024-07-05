@extends('layout.app')
@section('title', $blog->title .'- Grow Up Your Position With Inzams')
@section('description', $blog->meta_description)
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
                        <h2 class="title">{{__($blog->title)}}</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li class="active" aria-current="page">{{__($blog->slug)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- ...::: Start Blog List Section :::... -->
<div class="blog-details-section section-gap-tb-165">
    <div class="blog-details-box">
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
                            @foreach ($blogCategories as $blogCategory)
                              <li><a href="#"><span class="text">{{__($blogCategory->title)}}</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            @endforeach
                          </ul>
                      </div>
                      <!-- End Sidebar Widget Single Item - Catagory Widgets -->

                      <!-- Start Sidebar Widget Single Item - Resume Widgets -->
                      <div class="sidebar-widget-single-area resume-widgets">
                          <h3 class="title">Resources</h3>
                          <ul class="widget-nav-list resume-item-list">
                              <li><a href="{{ $blog->resources }}"><span class="text">Download</span><span class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></span></a></li>
                          </ul>
                      </div>
                      <!-- End Sidebar Widget Single Item - Resume Widgets -->

                      <!-- Start Sidebar Widget Single Item - Recent Post Widgets -->
                      <div class="sidebar-widget-single-area recentpost-widget">
                          <h3 class="title">Recent Post</h3>
                          <ul class="recent-blog-item-list">
                            @foreach ($recentBlogs as $recentBlog)

                              <li>
                                  <a href="blog-details-sidebar-left.html" class="image">
                                      <img src="{{ asset('uploads/blogs/').'/'.$recentBlog->image }}" alt="">
                                  </a>
                                  <div class="content">
                                      <h4 class="title"><a href="blog-details-sidebar-left.html">{{__($recentBlog->title)}}</a></h4>
                                      <div class="post-meta">
                                          <a href="#" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i>{{$recentBlog->created_at}}</a>
                                      </div>
                                  </div>
                              </li>

                            @endforeach
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
                <div class="col-xl-7 col-lg-7 offset-xl-1">
                    <!-- Start Blog Content Area -->
                    <div class="blog-content-area">
                        <!-- Start Section Content -->
                        <div class="default-content-style pos-relative">
                            <div class="content-meta">
                                <span class="section-tag">{{__($blog->BlogCategory->title)}}</span>
                                <div class="post-meta-2">
                                  <span class="icon-space-right"><i class="fa-solid fa-user"></i>by {{__($blog->user->name)}}</span>
                                  <span class="icon-space-right"><i class="fa-solid fa-calendar-days"></i>{{$blog->created_at}}</span>
                                </div>
                            </div>
                            <h2 class="title">{{__($blog->title)}}.</h2>
                            <p>{{__($blog->description)}}</p>

                        </div>
                        <!-- End Section Content -->
                    </div>
                    <!-- End Blog Content Area -->
                    <div class="react mt-4">

                        <button class="react-btn" onclick="event.preventDefault(); document.getElementById('like-form-{{ $blog->id }}').submit();">
                            {{-- check cookie --}}

                            <i class="fa-regular fa-heart"></i>Like
                        </button>
                        <span>If this blog helps you, then like for inspiratiom</span>
                        <form id="like-form-{{ $blog->id }}" action="{{ route('posts.like', $blog->id) }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                    <!-- Start Tag Area  -->
                    <div class="tag-area section-mt-75">
                        <!-- Start Tag Box -->
                        <div class="tag-box">
                            <div class="left">
                                <div class="tag-list">
                                    <h5 class="title">Tags:</h5>
                                    <ul class="list-item">
                                        <li><a href="#">portfolio</a></li>
                                        <li><a href="#">charity</a></li>
                                        <li><a href="#">personal</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right">
                                <ul class="social-link">
                                    <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.example.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Tag Box -->
                    </div>
                    <!--  End Tag Area  -->

                    <!--  Start Comment Area  -->
                    <div class="comment-area section-mt-75">
                        <!-- Start Comment Box-->
                        <div class="comment-box">
                            <h3 class="title">Comment:</h3>
                            <ul class="comment-list-item">
                                <!-- Start Comment Single Item -->
                                <li>
                                    <div class="comment-single-item">
                                        <div class="image"><img src="assets/images/users/user-1.jpg" alt=""></div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="author-meta">
                                                    <h4 class="name">Felix Myers</h4>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                                <button class="replay-btn icon-space-right"> <i class="icofont-reply"></i> Reply</button>
                                            </div>
                                            <div class="bottom">
                                                <div class="text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting and
                                                        has been the industry's standard dummy text ever since the 1500s, whe
                                                        took a galley of type and scrambled.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Comment Single Item -->
                                <!-- Start Comment Single Item -->
                                <li>
                                    <div class="comment-single-item">
                                        <div class="image"><img src="assets/images/users/user-2.jpg" alt=""></div>
                                        <div class="content">
                                            <div class="top">
                                                <div class="author-meta">
                                                    <h4 class="name">Francisco Bond</h4>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                                <button class="replay-btn icon-space-right"> <i class="icofont-reply"></i> Reply</button>
                                            </div>
                                            <div class="bottom">
                                                <div class="text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting and
                                                        has been the industry's standard dummy text ever since the 1500s, whe
                                                        took a galley of type and scrambled.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- has Reply -->
                                    <div class="has-reply">
                                        <div class="comment-single-item">
                                            <div class="image"><img src="assets/images/users/user-3.jpg" alt=""></div>
                                            <div class="content">
                                                <div class="top">
                                                    <div class="author-meta">
                                                        <h4 class="name">Rochell Duckett</h4>
                                                        <span class="designation">Web Developer</span>
                                                    </div>
                                                    <button class="replay-btn icon-space-right"> <i class="icofont-reply"></i> Reply</button>
                                                </div>
                                                <div class="bottom">
                                                    <div class="text">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting and
                                                            has been the industry's standard dummy text ever since the 1500s, whe
                                                            took a galley of type and scrambled.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Comment Single Item -->
                            </ul>
                        </div>
                        <!-- End Comment Box-->
                    </div>
                    <!-- ...::: End Comment Area :::... -->

                    <!-- Start Comment Form Area -->
                    <div class="comment-form-area section-mt-75">
                        <!-- Start Comment Form Box -->
                        <div class="comment-form-box">
                            <h3 class="title">Leave a comment:</h3>
                            <form class="default-form" action="#" method="post">
                                <div class="row mb-n6">
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input type="text" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-6">
                                        <div class="default-form-group">
                                            <input type="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 mb-6">
                                        <div class="default-form-group">
                                            <textarea placeholder="Comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-6">
                                        <div class="default-form-group">
                                            <button type="submit" class="btn btn-lg btn-outline-one">Submit Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Comment Form Box -->
                    </div>
                    <!--  End Comment Form Area  -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Blog List Section :::... -->


@endsection
