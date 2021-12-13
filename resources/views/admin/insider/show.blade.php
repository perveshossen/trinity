@extends('layouts.dashboard_app')
@section('title')
    Update Insider | Dashboard
@endsection
@section('insider')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
    <a class="breadcrumb-item" href="{{ route('insider.index') }}">Insider</a>
      <span class="breadcrumb-item active">Update Insider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Update Insiders</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                @if (session('update_insider'))
                <div class="alert alert-success">{{ session('update_insider') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Update Insider</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insider.update', $info->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                              <label>Heading</label>
                              <input name="heading" type="text" class="form-control" value="{{ $info->heading }}">
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea name="description" rows="4" class="form-control">{{ $info->description }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Button link</label>
                              <textarea name="button_link" rows="4" class="form-control">{{ $info->button_link }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Memoriae thumbnail</label>
                              <input name="thumbnail" type="file" class="form-control">
                            </div>
                            <img style="width: 50px; height: 50px;" src="{{ asset('uploads/insider') }}/{{ $info->thumbnail }}" alt="{{ $info->thumbnail }}">
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