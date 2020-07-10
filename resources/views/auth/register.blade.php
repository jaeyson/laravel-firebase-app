@extends('app')

@section('content')
<form action="{{route('auth.register')}}" method="POST">
  @csrf
  @method('POST')

  <!--
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control">
  </div>
  -->

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary-outline">Register</button>
</form>
<a href="{{route('auth.login')}}">login</a>
@endsection