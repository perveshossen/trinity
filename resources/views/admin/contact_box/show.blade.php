@extends('layouts.dashboard_app')
@section('title')
    Update Contact box | Dashboard
@endsection
@section('box')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('box.index') }}">Contact box</a>
      <span class="breadcrumb-item active">Update Contact box</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update contact box</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_box'))
                <div class="alert alert-success">{{ session('update_box') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Contact box</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('box.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Box Heading</label>
                              <textarea name="heading" rows="4" class="form-control">{{ $info->heading }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Box BG</label>
                              <input name="bg" type="file" class="form-control">
                            </div>
                            <img style="width: 50px; height: 50px;" src="{{ asset('uploads/contact_box') }}/{{ $info->bg }}" alt="{{ $info->bg }}">
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