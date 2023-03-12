@extends('layouts.layout')


@section('content')

     <!-- <nav class="navbar navbar-dark bg-dark"> -->
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-sm-6 float-left">
    <h1 class="navbar-brand">Room Search By Description</a></h1>
    <form method="post" class="form-inline" action="/pioneerrooms/search" >
        {{ csrf_field() }}
      <input name="searchrooms" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search Description">
      <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
    </form>
    </div>

    <div class="col-sm-6">
      <h1 class="navbar-brand">Room Search By Sid </a></h1>
    <form method="post" class="form-inline" action="/pioneerrooms/searchsid" >
        {{ csrf_field() }}
      <input name="searchsid" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search SID number">
      <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
    </form>
  </div>
  </div>
  </div>


  <div class="box alt">
    <h2>Rooms</h2>
    <div class="row gtr-uniform">


      @foreach ($pioneerroom as $C)


      <div class="col-3-xlarge col-12-small"><a href="/pioneerrooms/{{ $C->id }}"><span class="image fit"><img src="/pioneerimg/{{ $C->img1 }}" alt="" /></span> <p>{{ $C->sid }}</p> <h4>{{ $C->description }}</h4>  </a></div>





      @endforeach


    </div>




  </div>

@endsection
