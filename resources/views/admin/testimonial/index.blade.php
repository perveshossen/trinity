@extends('layouts.dashboard_app')
@section('title')
    Testimonial | Dashboard
@endsection
@section('testimonial')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Testimonial</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Testimonials</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>name</th>
                            <th>designation</th>
                            <th>review</th>
                            <th>thumbnail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $testimonial->name }}</td>
                            <td>{{ $testimonial->designation }}</td>
                            <td>{{ $testimonial->review }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/testimonial_photo') }}/{{ $testimonial->thumbnail }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('testimonial.show', $testimonial->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
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
                @if (session('add_testimonial'))
                <div class="alert alert-success">{{ session('add_testimonial') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Testimonial</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Name</label>
                              <input name="name" type="text" class="form-control"  placeholder="Enter person name">
                            </div>
                            <div class="form-group">
                              <label>designation</label>
                              <input name="designation" type="text" class="form-control"  placeholder="Enter person designation">
                            </div>
                            <div class="form-group">
                              <label>Review</label>
                              <textarea name="review" rows="4" placeholder="Enter review" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>thumbnail</label>
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