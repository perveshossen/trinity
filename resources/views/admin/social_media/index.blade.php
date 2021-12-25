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
      <span class="breadcrumb-item active">Social Media</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Social Media Links</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Icons</th>
                            <th>Links</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($medias as $media)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $media->icon }}</td>
                            <td>{{ $media->link }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('media.show', $media->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('media.destroy', $media->id) }}" method="POST">
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
                @if (session('add_media'))
                <div class="alert alert-success">{{ session('add_media') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Social Media</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('media.store') }}">
                            @csrf
                            <div class="form-group">
                              <label>Social Icons class</label>
                              <input name="icon" type="text" class="form-control"  placeholder="Enter icon class">
                            </div>
                            <div class="form-group">
                              <label>Social Media Link</label>
                              <textarea name="link" rows="4" placeholder="Enter social media link" class="form-control"></textarea>
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