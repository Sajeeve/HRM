@extends('layer.layout')
@section('title','Home')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Welcome to {{$name}}</h1>
  <p class="lead">This is an IT company</p>
  <hr class="my-4">
  <p>We provide web and app development services</p>
</div>

<!-- cards -->
<div class="card-group mb-4">
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/unnamed.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">App Development</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/web-development.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Web Development</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('images/rewards-of-outsourcing.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Out Sourcing</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>
@endsection