@extends('layouts.dashboard_app')
@section('title')
    Contact box | Dashboard
@endsection
@section('box')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Contact box</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Contact boxs</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (session('delete_box'))
                <div class="alert alert-success">{{ session('delete_box') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Box Heading</th>
                            <th>Box BG</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($boxes as $box)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $box->heading }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/contact_box') }}/{{ $box->bg }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('box.show', $box->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('box.destroy', $box->id) }}" method="POST">
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
                @if (session('add_box'))
                <div class="alert alert-success">{{ session('add_box') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Contact box</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('box.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Box Heading</label>
                              <textarea name="heading" rows="4" placeholder="Enter box heading" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Box BG</label>
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