@extends('layout.app')
@section('title', $project->title. '- Grow Up Your Position With Inzams')
@section('description', $project->meta_description)
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
                        <h2 class="title">{{ __($project->title) }}</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="{{ route('projects') }}">Projects</a></li>
                            <li class="active" aria-current="page">{{ __($project->slug) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- .....:::::: Start Project Details Section :::::.... -->
<div class="project-details-section section-gap-tb-165">
    <div class="project-details-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Project Content Section -->
                    <div class="project-content-section pos-relative">
                        <div class="project-hero-image">
                            <img src="{{ asset('uploads/projects/').'/'.$project->image }}" alt="{{  __($project->meta_title)  }}">
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Start Section Content -->
                                <div class="default-content-style pos-relative">
                                    <span class="section-tag">{{  __($project->title)  }}</span>
                                    <h2 class="title">Givest is a non profit and fund rising website.</h2>
                                    <p>{{__($project->description)}}</p>
                                    <img src="{{ asset('uploads/projects/').'/'.$project->full_image }}" alt="">
                                    <h3 class="sub-title">Project result and summery</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it typesetting, remaining essentially unchanged.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indust standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it typesetting, remaining essentially unchanged.</p>
                                </div>
                                <!-- End Section Content -->
                            </div>
                            <div class="col-xl-3 col-lg-4 offset-xl-1">
                                <div class="project-sidebar">
                                    <h3 class="title">Information</h3>
                                    <!-- Start Project Sidebar Item -->
                                    <ul class="project-sidebar-list-item">
                                        <!-- Start Project Single Box -->
                                        <li class="project-sidebar-single-box">
                                            <h6 class="title-text">Project Type:</h6>
                                            <span class="text">{{__($project->projectCategory->title)}}</span>
                                        </li>
                                        <!-- End Project Single Box -->
                                        <!-- Start Project Single Box -->
                                        <li class="project-sidebar-single-box">
                                            <h6 class="title-text">Clients:</h6>
                                            <span class="text">{{__($project->clients)}}</span>
                                        </li>
                                        <!-- End Project Single Box -->
                                        <!-- Start Project Single Box -->
                                        <li class="project-sidebar-single-box">
                                            <h6 class="title-text">Budget:</h6>
                                            <span class="text">{{__($project->budget)}}</span>
                                        </li>
                                        <!-- End Project Single Box -->
                                        <!-- Start Project Single Box -->
                                        <li class="project-sidebar-single-box">
                                            <h6 class="title-text">Duration:</h6>
                                            <span class="text">{{__($project->duration)}}</span>
                                        </li>
                                        <!-- End Project Single Box -->
                                        <!-- Start Project Single Box -->
                                        <li class="project-sidebar-single-box">
                                            <h6 class="title-text">Date:</h6>
                                            <span class="text">{{__($project->delivery_date)}}</span>
                                        </li>
                                        <!-- End Project Single Box -->
                                    </ul>
                                    <!-- End Project Sidebar Item -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Project Content Section -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .....:::::: End Project Details Section :::::.... -->


@endsection
