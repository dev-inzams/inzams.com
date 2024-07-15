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
                        <h2 class="title">{{__($key)}}</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="{{ route('blogs') }}">Blog List</a></li>
                            <li class="active" aria-current="page">{{__($key)}}</li>
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
                        <form class="search-widgets-box" action="{{ route('blog-search') }}" method="post">
                            @csrf
                            <input name="key" type="search" placeholder="Search here">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <!-- End Sidebar Widget Single Item - Search Widgets -->

                    <!-- Start Sidebar Widget Single Item - Catagory Widgets -->
                    <div class="sidebar-widget-single-area catagory-widgets">
                        <h3 class="title">Category</h3>
                        <ul class="widget-nav-list catagory-item-list">
                            @foreach ($blogsCategories as $blogCategory)
                            <li><a href="{{route('blog-archive', $blogCategory->id)}}"><span class="text">{{__($blogCategory->title)}}</span><span class="icon"><i class="fa-solid fa-angles-right"></i></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- End Sidebar Widget Single Item - Catagory Widgets -->



                    <!-- Start Sidebar Widget Single Item - Recent Post Widgets -->
                    <div class="sidebar-widget-single-area recentpost-widget">
                        <h3 class="title">Recent Post</h3>
                        <ul class="recent-blog-item-list">
                            @foreach ($recentPosts as $recentPost)
                            <li>

                                    <img class="image" src="{{ asset('uploads/blogs/').'/'.$recentPost->image }}" alt="{{__($recentPost->title)}}">
                                </a>
                                <div class="content">
                                    <h4 class="title"><a href="{{route('blog-details',$recentPost->slug)}}">{{__($recentPost->title)}} </a></h4>
                                    <div class="post-meta">
                                        <a href="{{route('blog-details',$recentPost->slug)}}" class="date icon-space-right"><i class="fa-solid fa-calendar-days"></i> {{ $recentPost->created_at }}</a>
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
                            <li><a href="https://www.facebook.com/developerinzams" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/c/developerinzams" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/inzams/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
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
                        @foreach ($blogs as $blog)
                        <div class="blog-list-single-item">
                            <div class="inner-shape inner-shape-top-right"></div>
                            <a href="{{route('blog-details',$blog->slug)}}" class="image">
                                <img src="{{ asset('uploads/blogs/').'/'.$blog->image }}" alt="">
                            </a>
                            <div class="content">
                                <div class="post-meta-1">
                                    <a href="#" class="catagory">{{__($blog->blogCategory->title)}}</a>
                                    <a href="#" class="date">{{ $blog->created_at }}</a>
                                </div>
                                <h4 class="title"><a href="{{route('blog-details',$blog->slug)}}">{{__($blog->title)}}</a></h4>

                                <div class="post-meta-2">
                                    <span class="icon-space-right"><i class="fa-solid fa-user"></i>{{__($blog->user->name)}}</span>
                                    <span class="icon-space-right"><i class="fa-regular fa-eye"></i>{{$blog->heart}}</span>
                                    <span class="icon-space-right"><i class="fa-solid fa-comment"></i>{{$blog->comments}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End Blog List  Single Item-->



                    </div>
                    <!--  End Blog List   -->

                    <div style="margin-bottom: 15px" class="d-flex justify-content-center justify-content-lg-start">
                        <!--  Start Pagination  -->
                        <div class="pagination">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination-nav-list">
                                        <li class="prev"><a href="{{$blogs->previousPageUrl()}}"><i class="fa-solid fa-angles-left"></i></a></li>
                                        <li class="next"><a href="{{$blogs->nextPageUrl()}}"><i class="fa-solid fa-angles-right"></i></a></li>
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
