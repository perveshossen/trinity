@extends('layouts.dashboard_app')
@section('title')
    Shop Category | Dashboard
@endsection
@section('shop_category')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Shop Category</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Shop Categories</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/shop_category') }}/{{ $category->thumbnail }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                  </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="50">
                                 <h4 class="text-danger text-center">No data found</h4>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                @if (session('add_category'))
                <div class="alert alert-success">{{ session('add_category') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Shop Category</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Category Name</label>
                              <input name="name" type="text" class="form-control"  placeholder="Enter category name">
                            </div>
                            <div class="form-group">
                              <label>Category button link</label>
                              <textarea name="button_link" rows="4" placeholder="Enter category button link" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Category thumbnail</label>
                              <input name="thumbnail" type="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection