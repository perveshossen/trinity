@extends('layouts.dashboard_app')
@section('title')
    Movement | Dashboard
@endsection
@section('movement')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Movement</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Movements</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (session('delete_movement'))
                <div class="alert alert-success">{{ session('delete_movement') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>URL</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($movements as $movement)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $movement->link }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/movement') }}/{{ $movement->photo }}" alt="{{ $movement->photo }}">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('movement.show', $movement->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('movement.destroy', $movement->id) }}" method="POST">
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
                @if (session('add_movement'))
                <div class="alert alert-success">{{ session('add_movement') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Movement</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('movement.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Movement Url</label>
                              <textarea name="link" rows="4" placeholder="Enter movement url" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Photo</label>
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