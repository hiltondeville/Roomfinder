@extends('layouts.layout')


@section('content')


<article class="post">
  <header>
    <div class="title">
      <h2><a href="#">Your search has returned: {{ $canaryroom->description }}</span></a></h2>
      <p>With SID reference:  {{ $canaryroom->sid }}</p>
    </div>
    <div class="meta">

    <a href="#" class="author"><span class="name">@auth {{ Auth::user()->name}} @endauth</span>
      <img src="/canaryimg/{{ $canaryroom->img1 }}" alt="" /></a>

    </div>
  </header>
</article>







 <div class="table-wrapper">

     <table class="table">
     <tbody class="">
       <tr><th scope="">SID number:  <td>{{ $canaryroom->sid }}</td></tr>
       <tr><th scope="">Asset name:</th> <td>{{ $canaryroom->description }}</td></tr>
       <tr><th scope="">Key Number:</th> <td>{{ $canaryroom->keynum }}</td></tr>
       <tr><th scope="">Map Grid:</th> <td>{{ $canaryroom->maplocation }}</td></tr>
       <tr><th scope="">Other information:</th> <td>{{ $canaryroom->description }}</td></tr>


     </tbody>
   </table>


</div>

<div class="box alt">
  <div class="row gtr-uniform">



 <div class="col-6-xlarge col-12-small {{ $canaryroom->img1 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img1 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img1 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img2 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img2 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img2 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img3 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img3 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img3 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img4 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img4 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img4 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img5 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img5 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img5}}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img5 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img6 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img6 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img6 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img7 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img7 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img7 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img8 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img8 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img8 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img9 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img9 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img9 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img10 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img10 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img9 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img11 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img11 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $canaryroom->img9 ? Null : 'd-none'}}"><a href="/canaryimg/{{ $canaryroom->img12 }}"><span class="image fit"><img  src="/canaryimg/{{ $canaryroom->img12 }}" alt=""></span></a></div>


 </div>

</div>

<div class="container">

<h1 class="jumbotron text-center">Route to room</h1>

</div>
<div class="box alt">
  <div class="row gtr-uniform">

    @for ($i = 1; $i < $canaryroom->routeend; $i++)

        <div class="col-3-xlarge col-12-small">{{$i}}<a href="/canarypics/route/{{ $canaryroom->route }}/{{ $i }}.JPG"><span class="image fit"><img  src="/canarypics/route/{{ $canaryroom->route }}/{{ $i }}.JPG" alt=""></span></a></div>

    @endfor
    <div class="col-3-xlarge col-12-small">{{$canaryroom->routeend}}<a href="/canarypics/route/{{ $canaryroom->route }}/{{ $canaryroom->routeend }}.JPG"><span class="image fit"><img  src="/canarypics/route/{{ $canaryroom->route }}/{{ $canaryroom->routeend }}.JPG" alt=""></span></a></div>


  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="">Plan location: {{ $canaryroom->maplocation }}</h2>
    <div class=""><a href="/canarypics/plans/{{ $canaryroom->planpage }}.JPG"><span class="image fit"><img  src="/canarypics/plans/{{ $canaryroom->planpage }}.JPG" alt=""></span></a></div>

  </div>
</div>

  <div class="container">

      <p>Room created on {{ $canaryroom->created_at }}</p>

  </div>











@endsection
