<!DOCTYPE html>
<html lang="en">
<head>
  <title> Mini Database </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

@yield('styles')
</head>
<body>

<div class="jumbotron text-center">
  <h1> Mini Database </h1>
  <p> Data of Companies and Employees</p> 
</div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About Us</a></li>
      <li><a href="{{ route('contact') }}">Contact Us</a></li>

      @guest
      <li><a href="{{ route('login') }}">Login</a></li>
      @endguest

      @auth
      <li><a href="{{ route('companies.index') }}">Companies</a></li>
      <li><a href="{{ route('employees.index')}}">Employees</a></li>
      <li><a href="#" onclick="document.getElementById('logout-form').submit()">Log Out</a></li>
      <form method="POST" action="{{ route('logout')}}" id="logout-form">
        @csrf
      </form>
      @endauth
    </ul>
  </div>
</nav>
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@yield('content')

@yield('javascripts')
</body>
</html>
