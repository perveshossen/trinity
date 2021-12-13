@extends('layouts.dashboard_app')
@section('title')
    Insider | Dashboard
@endsection
@section('insider')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">Insider</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Insiders</h5>
      </div><!-- sl-page-title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if (session('delete_insider'))
                <div class="alert alert-success">{{ session('delete_insider') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Button Link</th>
                            <th>Thumbnail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($insiders as $insider)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $insider->heading }}</td>
                            <td>{{ $insider->description }}</td>
                            <td>{{ $insider->button_link }}</td>
                            <td>
                                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/insider') }}/{{ $insider->thumbnail }}" alt="">
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('insider.show', $insider->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('insider.destroy', $insider->id) }}" method="POST">
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
                @if (session('add_insider'))
                <div class="alert alert-success">{{ session('add_insider') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Add Insider</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('insider.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Heading</label>
                              <input name="heading" type="text" class="form-control"  placeholder="Enter insider heading">
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea name="description" rows="4" placeholder="Enter insider description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Button link</label>
                              <textarea name="button_link" rows="4" placeholder="Enter insider button link" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Memoriae thumbnail</label>
                              <input name="thumbnail" type="file" class="form-control">
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