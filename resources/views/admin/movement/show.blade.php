@extends('layouts.dashboard_app')
@section('title')
    Update Movement | Dashboard
@endsection
@section('movement')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('movement.index') }}">Movement</a>
      <span class="breadcrumb-item active">Update Movement</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Movement</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_movement'))
                <div class="alert alert-success">{{ session('update_movement') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Movement</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('movement.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Movement Url</label>
                              <textarea name="link" rows="4"  class="form-control">{{ $info->link }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Photo</label>
                              <input name="photo" type="file" class="form-control">
                            </div>
                            <img style="height: 50px; width: 50pxl" src="{{ asset('uploads/movement') }}/{{ $info->photo }}" alt="{{ $info->photo }}">
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