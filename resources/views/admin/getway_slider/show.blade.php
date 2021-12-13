@extends('layouts.dashboard_app')
@section('title')
    Update Getway Slider | Dashboard
@endsection
@section('getway')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('getway.index') }}">Getway Slider</a>
      <span class="breadcrumb-item active">Update Getway Slider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Getway Slider</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_slider'))
                <div class="alert alert-success">{{ session('update_slider') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Slider</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('getway.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Slider Description</label>
                              <textarea name="description" rows="4"class="form-control">{{ $info->description }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Slider BG</label>
                              <input name="bg" type="file" class="form-control">
                            </div>
                            <img style="width: 50px; height: 50px;" src="{{ asset('uploads/getway_slider') }}/{{ $info->bg }}" alt="{{ $info->bg }}">
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