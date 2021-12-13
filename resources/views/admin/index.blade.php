@extends('layouts.dashboard_app')
@section('title')
    Home | Dashboard
@endsection
@section('home')
    active
@endsection
@section('dashboard_content')
<nav class="breadcrumb sl-breadcrumb">
  {{-- <a class="breadcrumb-item" href="{{ route('home') }}">Das</a> --}}
  <span class="breadcrumb-item active">Dashboard</span>
</nav>

@endsection