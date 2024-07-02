@extends('layouts.app')
@section('title', 'Project')
@section('main')
@include('auth.components.sidebar')
@include('auth.components.navbar')

<div class="container-fluid pt-4 px-4">
    {{-- error message get from controller  --}}
    <p> {{ session('success') }} </p>
    {{-- add project modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-secondary rounded p-4">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Project</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title" class="col-form-label">Title:</label>
                  <input name="title" type="text" class="form-control" id="title">
                </div>

                <div class="mb-3">
                  <label for="meta_title" class="col-form-label">Meta Title:</label>
                  <input name="meta_title" type="text" class="form-control" id="meta_title">
                </div>

                <div class="mb-3">
                  <label for="slug" class="col-form-label">Slug:</label>
                  <input name="slug" type="text" class="form-control" id="slug">
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="clients" class="col-form-label">Clients:</label>
                            <input name="clients" type="text" class="form-control" id="clients">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="budget" class="col-form-label">Budget:</label>
                            <input name="budget" type="text" class="form-control" id="budget">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="duration" class="col-form-label">Duration:</label>
                            <input name="duration" type="text" class="form-control" id="duration">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="delivery_date" class="col-form-label">Delivery Date:</label>
                            <input name="delivery_date" type="date" class="form-control" id="delivery_date">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label">Image:</label>
                  <input name="image" type="file" class="form-control bg-dark" id="image">
                </div>

                <div class="mb-3">
                  <label for="full_image" class="col-form-label">Full Image:</label>
                  <input name="full_image" type="file" class="form-control bg-dark" id="full_image">
                </div>

                <div class="mb-3">
                  <label for="description" class="col-form-label">Description:</label>
                  <textarea name="description" class="form-control" id="description"></textarea>
                </div>

                <div class="mb-3">
                  <label for="meta_description" class="col-form-label">Meta Description:</label>
                  <textarea name="meta_description" class="form-control" id="meta_description"></textarea>
                </div>

                <div class="mb-3">
                  <label for="keywords" class="col-form-label">Meta keywords:</label>
                  <textarea name="keywords" class="form-control" id="keywords"></textarea>
                </div>

                <div class="mb-3">
                  <label for="project_category_id" class="col-form-label">Category:</label>
                  <select id="project_category_id" name="project_category_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Category</option>
                    @foreach ($projectsCategories as $projectCategory)
                      <option value="{{ $projectCategory->id }}">{{ $projectCategory->title }}</option>
                    @endforeach
                  </select>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Save changes">
            </div>
          </form>
          </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded p-4">
                <div class="align-items-center justify-content-between mb-4">
                    <h2>{{__('All Projects')}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded p-4 text-end">
                <div class="align-items-center justify-content-between mb-4 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{__('Add New Project')}}</button>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-secondary rounded h-100 p-4">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project )

                    <tr>
                        <th scope="row">1</th>
                        <td>{{__($project->title)}}</td>
                        <td>{{__($project->ProjectCategory->title)}}</td>
                        <td>{{$project->updated_at}}</td>
                        <td>{{__($project->user->name)}}</td>
                        <td><a href="{{ route('project.delete', $project->id) }}" class="btn btn-danger">{{__('Delete')}}</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@include('auth.components.footer')
@endsection
