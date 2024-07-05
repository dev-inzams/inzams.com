@extends('layouts.app')
@section('title', 'Blog - Grow Up Your Position With Inzams')
@section('main')
@include('auth.components.sidebar')
@include('auth.components.navbar')

<div class="container-fluid pt-4 px-4">
    {{-- error message get from controller  --}}
    <p> {{ session('success') }} </p>
    <p> {{ session('error') }} </p>
    {{-- add project modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-secondary rounded p-4">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Blog</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
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
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="resources" class="col-form-label">Resources:</label>
                            <input name="resources" type="text" class="form-control" id="resources">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="heart" class="col-form-label">Custom Heart:</label>
                            <input name="heart" type="number" class="form-control" id="heart">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label">Image:</label>
                  <input name="image" type="file" class="form-control bg-dark" id="image">
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
                  <label for="blog_category_id" class="col-form-label">Category:</label>
                  <select id="blog_category_id" name="blog_category_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Category</option>
                    @foreach ($blogsCategories as $blogCategory)
                      <option value="{{ $blogCategory->id }}">{{ $blogCategory->title }}</option>
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


    {{-- add category modal --}}
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-secondary rounded p-4">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('blog.category.store') }}" enctype="multipart/form-data">
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


                <div class="mb-3">
                  <label for="image" class="col-form-label">Image:</label>
                  <input name="image" type="file" class="form-control bg-dark" id="image">
                </div>


                <div class="mb-3">
                  <label for="description" class="col-form-label">Description:</label>
                  <textarea name="description" class="form-control" id="description"></textarea>
                </div>

                <div class="mb-3">
                  <label for="meta_description" class="col-form-label">Meta Description:</label>
                  <textarea name="meta_description" class="form-control" id="meta_description"></textarea>
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
                    <h2>{{__('All Blog')}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded p-4 text-end">
                <div class="align-items-center justify-content-between mb-4 text-end">
                    <button type="button" class="btn btn-primary ml-3" data-bs-toggle="modal" data-bs-target="#addCategory" data-bs-whatever="@mdo">{{__('Add Category')}}</button>
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
                    @foreach ($blogs as $blog )

                    <tr>
                        <th scope="row">1</th>
                        <td>{{__($blog->title)}}</td>
                        <td>{{__($blog->BlogCategory->title)}}</td>
                        <td>{{$blog->updated_at}}</td>
                        <td>{{__($blog->user->name)}}</td>
                        <td><a href="{{ route('blog.delete', $blog->id) }}" class="btn btn-danger">{{__('Delete')}}</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@include('auth.components.footer')
@endsection
