@extends('layouts.dashboard_app')
@section('title')
    Update Memoriae | Dashboard
@endsection
@section('memoriae_two')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('memoriae.index') }}">Memoriae</a>
      <span class="breadcrumb-item active">Update Memoriae</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Memoriae</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_memory'))
                <div class="alert alert-success">{{ session('update_memory') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Memoriae</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('memoriae_two.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Heading</label>
                              <input name="heading" type="text" class="form-control"   value="{{ $info->heading }}">
                            </div>
                            <div class="form-group">
                              <label>Button link</label>
                              <textarea name="button_link" rows="4" class="form-control">{{ $info->button_link }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Memoriae photo</label>
                              <input name="photo" type="file" class="form-control">
                            </div>
                            <img style="width: 50px;" src="{{ asset('uploads/memoriae_two_photo') }}/{{ $info->photo }}" alt="{{ $info->photo }}">
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