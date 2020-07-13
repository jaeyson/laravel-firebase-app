@extends('app')

@section('content')
<div class="wrapper">
  <div class="inner-wrapper">
    @yield('dashboard-sidebar')
    @yield('dashboard-content')
  </div>
</div>
@endsection

