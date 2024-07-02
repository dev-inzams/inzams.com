@extends('layout.app')
@section('title', 'Projects - Grow Up Your Position With Inzams')
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
                        <h2 class="title">Projects</h2>
                        <ul class="breadcrumb-link">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li class="active" aria-current="page">Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...::: End Breadcrumb Section :::... -->

<!-- .....:::::: Start Project Section :::::.... -->
<div class="project-section section-gap-tb-165">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="projects-gallery-filter-nav">
                    <button class="btn btn-outline-secondary active" data-filter="*">All</button>
                    @foreach ($projectsCategories as $projectCategory)
                      <button class="btn btn-outline-secondary" data-filter=".{{__($projectCategory->title)}}">{{__($projectCategory->title)}}</button>
                    @endforeach

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="projects-wrapper-gallery-content">
                    <div class="row">
                        @foreach ($projects as $project )

                        <div class="col-md-6 filter-item {{__($project->projectCategory->title)}}">
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{ asset('uploads/projects/').'/'.$project->full_image }}" alt="{{__($project->title)}}">
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('uploads/projects/').'/'.$project->full_image }}" alt="{{__($project->title)}}">
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
                            <!-- End Project Box Single Item -->
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- .....:::::: End Project Section :::::.... -->


@endsection
