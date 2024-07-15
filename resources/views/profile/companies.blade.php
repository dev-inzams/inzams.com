@extends('layouts.app')
@section('title', 'Companies - Grow Up Your Position With Inzams')
@section('main')
@include('auth.components.sidebar')
@include('auth.components.navbar')

<div class="container-fluid pt-4 px-4">
    {{-- error message get from controller  --}}
    <p> {{ session('success') }} </p>
    <p> {{ session('error') }} </p>



    {{-- add category modal --}}
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-secondary rounded p-4">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Company</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="name" class="col-form-label">Name:</label>
                  <input name="name" type="text" class="form-control" id="name">
                </div>

                <div class="mb-3">
                  <label for="url" class="col-form-label">URL:</label>
                  <input name="url" type="url" class="form-control" id="url">
                </div>

                <div class="mb-3">
                  <label for="image" class="col-form-label">Image:</label>
                  <input name="image" type="file" class="form-control" id="image">
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
                    <h2>{{__('All Company')}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded p-4 text-end">
                <div class="align-items-center justify-content-between mb-4 text-end">
                    <button type="button" class="btn btn-primary ml-3" data-bs-toggle="modal" data-bs-target="#addCategory" data-bs-whatever="@mdo">{{__('Add Company')}}</button>
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">{{__('Add New Project')}}</button> --}}
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
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $companie )

                    <tr>
                        <th scope="row">1</th>
                        <td>{{__($companie->name)}}</td>
                        <td><img width="50" class="rounded-circle me-lg-2" src="{{asset('uploads/companies/'.$companie->image)}}" alt="Best wordpress in fiverr"></td>
                        <td>{{$companie->updated_at}}</td>
                        <td><a href="{{ route('companies.delete', $companie->id) }}" class="btn btn-danger">{{__('Delete')}}</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@include('auth.components.footer')
@endsection
