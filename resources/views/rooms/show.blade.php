@extends('layouts.layout')


@section('content')


<article class="post">
  <header>
    <div class="title">
      <h2><a href="#">Your search has returned: {{ $room->description }}</span></a></h2>
      <p>With SID reference:  {{ $room->sid }}</p>
    </div>
    <div class="meta">

    <a href="#" class="author"><span class="name">@auth {{ Auth::user()->name}} @endauth</span>
      <img src="/roomfinder1/img/{{ $room->img1 }}" alt="" /></a>

    </div>
  </header>
</article>







 <div class="table-wrapper">

     <table class="table">
     <tbody class="">
       <tr><th scope="">SID number:  <td>{{ $room->sid }}</td></tr>
       <tr><th scope="">Asset name:</th> <td>{{ $room->description }}</td></tr>
       <tr><th scope="">Key Number:</th> <td>{{ $room->keynum }}</td></tr>
       <tr><th scope="">Map Grid:</th> <td>{{ $room->maplocation }}</td></tr>
       <tr><th scope="">Other information:</th> <td>{{ $room->description }}</td></tr>


     </tbody>
   </table>


</div>

<div class="box alt">
  <div class="row gtr-uniform">



 <div class="col-6-xlarge col-12-small {{ $room->img1 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img1 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img1 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img2 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img2 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img2 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img3 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img3 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img3 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img4 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img4 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img4 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img5 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img5 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img5}}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img5 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img6 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img6 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img6 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img7 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img7 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img7 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img8 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img8 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img8 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img9 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img9 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img9 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img10 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img10 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img9 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img11 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img11 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $room->img9 ? Null : 'd-none'}}"><a href="/roomfinder1/img/{{ $room->img12 }}"><span class="image fit"><img  src="/roomfinder1/img/{{ $room->img12 }}" alt=""></span></a></div>


 </div>

</div>

<div class="container">

<h1 class="jumbotron text-center">Route to room</h1>

</div>
<div class="box alt">
  <div class="row gtr-uniform">

    @for ($i = 1; $i < $room->routeend; $i++)

        <div class="col-3-xlarge col-12-small">{{$i}}<a href="/roomfinder1/pics/route/{{ $room->route }}/{{ $i }}.JPG"><span class="image fit"><img  src="/roomfinder1/pics/route/{{ $room->route }}/{{ $i }}.JPG" alt=""></span></a></div>

    @endfor
    <div class="col-3-xlarge col-12-small">{{$room->routeend}}<a href="/roomfinder1/pics/route/{{ $room->route }}/{{ $room->routeend }}.JPG"><span class="image fit"><img  src="/roomfinder1/pics/route/{{ $room->route }}/{{ $room->routeend }}.JPG" alt=""></span></a></div>


  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="">Plan location: {{ $room->maplocation }}</h2>
    <p class="col-md-12 img-thumbnail"><a href="/roomfinder1/pics/plans/{{ $room->planpage }}.JPG"><span class="image fit"><img  src="/roomfinder1/pics/plans/{{ $room->planpage }}.JPG" alt=""></span></a></div>

  </div>

  <div class="container">

      <p>Room created on {{ $room->created_at }}</p>

  </div>











@endsection
