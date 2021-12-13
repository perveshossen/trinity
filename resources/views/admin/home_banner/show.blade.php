@extends('layouts.dashboard_app')
@section('title')
    Update Home Banner | Dashboard
@endsection
@section('home_banner')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('banner.index') }}">Banner</a>
      <span class="breadcrumb-item active">Update Banner</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Banners</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_banner'))
                <div class="alert alert-success">{{ session('update_banner') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Banner</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('banner.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Banner Heading</label>
                              <input name="heading" type="text" class="form-control"  value="{{ $info->heading }}">
                            </div>
                            <div class="form-group">
                              <label>Banner button link</label>
                              <textarea name="button_link" rows="4" class="form-control">{{ $info->button_link }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Banner BG</label>
                              <input name="bg" type="file" class="form-control">
                            </div>
                            <img style="height: 50px; width: 50px;" src="{{ asset('uploads/home_banner') }}/{{ $info->bg }}" alt="">
                            <br>
                            <br>
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