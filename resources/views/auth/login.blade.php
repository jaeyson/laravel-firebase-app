@extends('app')

@section('content')
<h1>login.blade.php</h1>
<a href="{{route('auth.register')}}">register</a>
<!--
<form action="#" method="POST">
  @csrf
  @method('POST')

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary-outline">Add</button>
</form>
-->
@endsection