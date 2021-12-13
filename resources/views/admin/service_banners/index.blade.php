@extends('layouts.dashboard_app')
@section('title')
    Service Banner | Dashboard
@endsection
@section('service_banner')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Banner</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Banners</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (session('delete_banner'))
                <div class="alert alert-success">{{ session('delete_banner') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Heading</th>
                            <th>Button Link</th>
                            <th>Background</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $banner->heading }}</td>
                            <td>{{ $banner->button_link }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/service_more_banner') }}/{{ $banner->bg }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
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
                @if (session('add_banner'))
                <div class="alert alert-success">{{ session('add_banner') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Banner</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Banner Heading</label>
                              <input name="heading" type="text" class="form-control"  placeholder="Enter banner heading">
                            </div>
                            <div class="form-group">
                              <label>Banner button link</label>
                              <textarea name="button_link" rows="4" placeholder="Enter banner button link" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Banner BG</label>
                              <input name="bg" type="file" class="form-control">
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