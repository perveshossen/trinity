@extends('layouts.dashboard_app')
@section('title')
    Social Media | Dashboard
@endsection
@section('social')
    active
@endsection
@section('dashboard_content')


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('media.index') }}">Social Media</a>
    <span class="breadcrumb-item active">Social Media Update</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5> Links Update</h5>
    </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_media'))
                <div class="alert alert-success">{{ session('update_media') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Social Media</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('media.update', $info->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Social Icons class</label>
                              <input name="icon" type="text" class="form-control"  value="{{ $info->icon }}">
                            </div>
                            <div class="form-group">
                              <label>Social Media Link</label>
                              <textarea name="link" rows="4" class="form-control">{{ $info->link }}</textarea>
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