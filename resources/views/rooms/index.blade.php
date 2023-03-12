@extends('layouts.layout')



@section('content')



<article class="post">
  <header>
    <div class="title">
      <h2><a href="/">North Greenwoch Room Finder</a></h2>
      <p>Total:  {{ $rooms->count() }} locations currently logged</p>
    </div>
    <div class="meta">
      <p class="published"><?php echo date('jS F Y'); ?> </p>
      <a href="#" class="author"><span class="name">
        @auth
          {{ Auth::user()->name }}
        @endauth
      </span><img src="/img/main.JPG" alt="" /></a>
    </div>
  </header>
  <a href="single.html" class="image featured"><img src="/img/main.JPG" alt="" /></a>
  <p>Welcome to the Canary Wharf Group Room Finder</p>

</article>

<div class="row">
  <div class="col-sm-6 float-left">
<h1 class="navbar-brand">Room Search By Description</a></h1>
<form method="post" class="form-inline" action="rooms/search" >
    {{ csrf_field() }}
  <input name="searchrooms" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search Description">
  <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
</form>
</div>

<div class="col-sm-6">
  <h1 class="navbar-brand">Room Search By Sid</a></h1>
<form method="post" class="form-inline" action="rooms/searchsid" >
    {{ csrf_field() }}
  <input name="searchsid" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search SID number">
  <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
</form>
</div>
</div>


     {{ $room->links() }}




     <div class="box alt">
       <div class="row gtr-uniform">


      @foreach ($room as $C)




<div class="col-3-xlarge col-12-small"><a href="rooms/{{ $C->id }}"><span class="image fit"><img src="/img/{{ $C->img1 }}" alt="" /></span> <p>{{ $C->sid }}</p> <h4>{{ $C->description }}</h4>  </a></div>





      @endforeach


    </div>


   {{ $room->links() }}


  </div>


@endsection
