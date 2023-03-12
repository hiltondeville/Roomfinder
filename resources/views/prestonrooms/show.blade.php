@extends('layouts.layout')


@section('content')


<article class="post">
  <header>
    <div class="title">
      <h2><a href="#">Your search has returned: {{ $prestonroom->description }}</span></a></h2>
      <p>With SID reference:  {{ $prestonroom->sid }}</p>
    </div>
    <div class="meta">

    <a href="#" class="author"><span class="name">@auth {{ Auth::user()->name}} @endauth</span>
      <img src="/prestonimg/{{ $prestonroom->img1 }}" alt="" /></a>

    </div>
  </header>
</article>







 <div class="table-wrapper">

     <table class="table">
     <tbody class="">
       <tr><th scope="">SID number:  <td>{{ $prestonroom->sid }}</td></tr>
       <tr><th scope="">Asset name:</th> <td>{{ $prestonroom->description }}</td></tr>
       <tr><th scope="">Key Number:</th> <td>{{ $prestonroom->keynum }}</td></tr>
       <tr><th scope="">Map Grid:</th> <td>{{ $prestonroom->maplocation }}</td></tr>
       <tr><th scope="">Other information:</th> <td>{{ $prestonroom->description }}</td></tr>


     </tbody>
   </table>


</div>

<div class="box alt">
  <div class="row gtr-uniform">



 <div class="col-6-xlarge col-12-small {{ $prestonroom->img1 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img1 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img1 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img2 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img2 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img2 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img3 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img3 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img3 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img4 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img4 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img4 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img5 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img5 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img5}}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img5 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img6 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img6 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img6 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img7 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img7 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img7 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img8 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img8 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img8 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img9 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img9 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img9 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img10 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img10 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img9 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img11 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img11 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $prestonroom->img9 ? Null : 'd-none'}}"><a href="/prestonimg/{{ $prestonroom->img12 }}"><span class="image fit"><img  src="/prestonimg/{{ $prestonroom->img12 }}" alt=""></span></a></div>


 </div>

</div>

<div class="container">

<h1 class="jumbotron text-center">Route to room</h1>

</div>
<div class="box alt">
  <div class="row gtr-uniform">

    @for ($i = 1; $i < $prestonroom->routeend; $i++)

        <div class="col-3-xlarge col-12-small">{{$i}}<a href="/prestonpics/route/{{ $prestonroom->route }}/{{ $i }}.JPG"><span class="image fit"><img  src="/prestonpics/route/{{ $prestonroom->route }}/{{ $i }}.JPG" alt=""></span></a></div>

    @endfor
    <div class="col-3-xlarge col-12-small">{{$prestonroom->routeend}}<a href="/prestonpics/route/{{ $prestonroom->route }}/{{ $prestonroom->routeend }}.JPG"><span class="image fit"><img  src="/prestonpics/route/{{ $prestonroom->route }}/{{ $prestonroom->routeend }}.JPG" alt=""></span></a></div>


  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="">Plan location: {{ $prestonroom->maplocation }}</h2>
    <p class="col-md-12 img-thumbnail"><a href="/prestonpics/plans/{{ $prestonroom->planpage }}.JPG"><span class="image fit"><img  src="/prestonpics/plans/{{ $prestonroom->planpage }}.JPG" alt=""></span></a></div>

  </div>

  <div class="container">

      <p>Room created on {{ $prestonroom->created_at }}</p>

  </div>











@endsection
