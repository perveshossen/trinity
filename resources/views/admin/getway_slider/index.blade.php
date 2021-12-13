@extends('layouts.dashboard_app')
@section('title')
    Getway Slider | Dashboard
@endsection
@section('getway')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Getway Slider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Getway Sliders</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (session('delete_slider'))
                <div class="alert alert-success">{{ session('delete_slider') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Slider Description</th>
                            <th>Slider BG</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $slider)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $slider->description }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/getway_slider') }}/{{ $slider->bg }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('getway.show', $slider->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('getway.destroy', $slider->id) }}" method="POST">
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
                @if (session('add_slider'))
                <div class="alert alert-success">{{ session('add_slider') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Slider</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('getway.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Slider Description</label>
                              <textarea name="description" rows="4" placeholder="Enter slider description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Slider BG</label>
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