@extends('layouts.dashboard_app')
@section('title')
    Memoriae | Dashboard
@endsection
@section('memoriae')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Memoriae</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5> Memoriae</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Button Link</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($memories as $memory)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $memory->heading }}</td>
                            <td>{{ $memory->button_link }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/memoriae_two_photo') }}/{{ $memory->photo }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('memoriae_two.show', $memory->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('memoriae_two.destroy', $memory->id) }}" method="POST">
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
                @if (session('add_memory'))
                <div class="alert alert-success">{{ session('add_memory') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Memoriae</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('memoriae_two.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Heading</label>
                              <input name="heading" type="text" class="form-control"  placeholder="Enter memoriae heading">
                            </div>
                            <div class="form-group">
                              <label>Button link</label>
                              <textarea name="button_link" rows="4" placeholder="Enter memoriae button link" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Memoriae photo</label>
                              <input name="photo" type="file" class="form-control">
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