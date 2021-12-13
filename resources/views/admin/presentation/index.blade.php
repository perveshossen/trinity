@extends('layouts.dashboard_app')
@section('title')
    Update Parts | Dashboard
@endsection
@section('update_parts')
    active
@endsection
@section('dashboard_content')

<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{ route('home') }}">Dashboard</a>
  <span class="breadcrumb-item active">Update Parts</span>
</nav>

<div class="sl-pagebody">
  <div class="sl-page-title">
    <h5> Update Parts</h5>
  </div><!-- sl-page-title -->
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-4">
                @if (session('update_parts'))
                <div class="alert alert-success">{{ session('update_parts') }}</div>
                @endif
                <div class="card">
                    <div class="card-header"> Presentation video</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('home.presentation.post', $presentation_info->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Presentation Heading</label>
                              <input name="heading" type="text" class="form-control"  value="{{ $presentation_info->heading }}">
                            </div>
                            <div class="form-group">
                              <label>Presentation Description</label>
                              <textarea name="description" rows="4" class="form-control">{{ $presentation_info->description }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Presentation Video Link</label>
                              <textarea name="video_link" rows="4" class="form-control">{{ $presentation_info->video_link }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                @if (session('update_banner'))
                <div class="alert alert-success">{{ session('update_banner') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">History Banner Update</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('history.banner.detail.post', $history_banner->id) }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label>Banner Heading</label>
                              <input name="heading" type="text" class="form-control"  value="{{ $history_banner->heading }}">
                            </div>
                            <div class="form-group">
                              <label>Banner Description</label>
                              <textarea name="description" rows="4" class="form-control">{{ $history_banner->description }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Banner Photo</label>
                              <br>
                              <img style="width: 50px;" src="{{ asset('uploads/history_banner') }}/{{ $history_banner->photo }}" alt="">
                              {{-- <img  class="hidden" id="tenant_photo_viewer" src="#" alt="your image" height="50" width="50"/>
                              <style>
                                .hidden{
                                  display: none;
                                  text-align: right;
                                }
                              </style>
                <script>
                function readURL(input) {
                  if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                      $('#tenant_photo_viewer').attr('src', e.target.result).width(50).height(50);
                    };
                    $('#tenant_photo_viewer').removeClass('hidden');
                    reader.readAsDataURL(input.files[0]);
                  }
                }
                </script>
                              <br> --}}

                              <input type="file" name="photo" class="form-control" onchange="readURL(this);">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                  </div>
            </div>
            
            <div class="col-lg-4">
              @if (session('publication_banner'))
              <div class="alert alert-success">{{ session('publication_banner') }}</div>
              @endif
              <div class="card">
                  <div class="card-header">Publication Banner Update</div>
                  <div class="card-body">
                      <form method="POST" action="{{ route('publication.banner.update', $publication_banner->id) }}"  enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label>Publication Heading</label>
                            <input name="heading" type="text" class="form-control"  value="{{ $publication_banner->heading }}">
                          </div>
                          <div class="form-group">
                            <label>Publication Description</label>
                            <textarea name="description" rows="4" class="form-control">{{ $publication_banner->description }}</textarea>
                          </div>
                          <div class="form-group">
                            <label>Banner Button Link</label>
                            <input name="button_link" type="text" class="form-control"  value="{{ $publication_banner->button_link }}">
                          </div>
                          <div class="form-group">
                            <label>Banner Background</label>
                            <br>
                            <img style="width: 50px;" src="{{ asset('uploads/publication_banner') }}/{{ $publication_banner->bg }}" alt="">
                            <input type="file" name="bg" class="form-control">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                  </div>
                </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-4">
            @if (session('story_update'))
            <div class="alert alert-success">{{ session('story_update') }}</div>
            @endif
            <div class="card">
                <div class="card-header">Interview story Update</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('interview.story.update', $interview_story->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>Heading</label>
                          <input name="heading" type="text" class="form-control"  value="{{ $interview_story->heading }}">
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $interview_story->description }}</textarea>
                        </div>
                        <div class="form-group">
                          <label>Button Link</label>
                          <input name="button_link" type="text" class="form-control"  value="{{ $interview_story->button_link }}">
                        </div>
                        <div class="form-group">
                          <label>Video Link</label>
                          <input name="video_link" type="text" class="form-control"  value="{{ $interview_story->video_link }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
        </div>
            
        <div class="col-lg-4">
          @if (session('still_update'))
          <div class="alert alert-success">{{ session('still_update') }}</div>
          @endif
          <div class="card">
              <div class="card-header">Still banner Update</div>
              <div class="card-body">
                  <form method="POST" action="{{ route('still.banner.update', $still_banner->id) }}"  enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label>Heading</label>
                        <input name="heading" type="text" class="form-control"  value="{{ $still_banner->heading }}">
                      </div>
                      <div class="form-group">
                        <label>Banner Background</label>
                        <input name="bg" type="file" class="form-control">
                      </div>
                      <img style="height: 50px; width: 50px;" src="{{ asset('uploads/still_banner') }}/{{ $still_banner->bg }}" alt="{{ $still_banner->bg }}">
                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
            </div>
      </div>
      <div class="col-lg-4">
        @if (session('still_update_two'))
        <div class="alert alert-success">{{ session('still_update_two') }}</div>
        @endif
        <div class="card">
            <div class="card-header">Still banner two Update</div>
            <div class="card-body">
                <form method="POST" action="{{ route('still.banner.two.update', $still_banner_two->id) }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Description</label>
                      <input name="description" type="text" class="form-control"  value="{{ $still_banner_two->description }}">
                    </div>
                    
                    <div class="form-group">
                      <label>Button Link</label>
                      <textarea name="button_link" rows="4" class="form-control"> {{ $still_banner_two->button_link }}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Banner two Background</label>
                      <input name="bg" type="file" class="form-control">
                    </div>
                    <img style="height: 50px; width: 50px;" src="{{ asset('uploads/still_banner_two') }}/{{ $still_banner_two->bg }}" alt="{{ $still_banner->bg }}">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
    </div>
        </div>
        <div class="row mb-5">


    <div class="col-lg-4">
      @if (session('service_banner'))
      <div class="alert alert-success">{{ session('service_banner') }}</div>
      @endif
      <div class="card">
          <div class="card-header">Service banner Update</div>
          <div class="card-body">
              <form method="POST" action="{{ route('service.banner.update', $service_banner->id) }}"  enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label>Heading</label>
                    <input name="heading" type="text" class="form-control"  value="{{ $service_banner->heading }}">
                  </div>
                  <div class="form-group">
                    <label>Banner BG</label>
                    <input name="bg" type="file" class="form-control">
                  </div>
                  <img style="height: 50px; width: 50px;" src="{{ asset('uploads/service_banner') }}/{{ $service_banner->bg }}" alt="{{ $service_banner->bg }}">
                  <br>
                  <br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
        </div>
  </div>

  

  <div class="col-lg-4">
    @if (session('service_detail'))
    <div class="alert alert-success">{{ session('service_detail') }}</div>
    @endif
    <div class="card">
        <div class="card-header">Service detail Update</div>
        <div class="card-body">
            <form method="POST" action="{{ route('service.detail.update', $service_detail->id) }}"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="description" class="form-control" rows="4">{{ $service_detail->description }}</textarea>
                </div>
                <div class="form-group">
                  <label>Detail Thumbnail</label>
                  <input name="thumbnail" type="file" class="form-control">
                </div>
                <img style="height: 50px; width: 50px;" src="{{ asset('uploads/service_detail') }}/{{ $service_detail->thumbnail }}" alt="{{ $service_detail->thumbnail }}">
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>


<div class="col-lg-4">
  @if (session('shop_banner'))
  <div class="alert alert-success">{{ session('shop_banner') }}</div>
  @endif
  <div class="card">
      <div class="card-header">Shop Banner Update</div>
      <div class="card-body">
          <form method="POST" action="{{ route('shop.banner.update', $shop_banner->id) }}"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Heading</label>
                <textarea name="heading" class="form-control" rows="4">{{ $shop_banner->heading }}</textarea>
              </div>
              <div class="form-group">
                <label>BG</label>
                <input name="bg" type="file" class="form-control">
              </div>
              <img style="height: 50px; width: 50px;" src="{{ asset('uploads/shop_banner') }}/{{ $shop_banner->bg }}" alt="{{ $shop_banner->bg }}">
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