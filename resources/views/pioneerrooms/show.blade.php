@extends('layouts.layout')


@section('content')


<article class="post">
  <header>
    <div class="title">
      <h2><a href="#">Your search has returned: {{ $pioneerroom->description }}</span></a></h2>
      <p>With SID reference:  {{ $pioneerroom->sid }}</p>
    </div>
    <div class="meta">

    <a href="#" class="author"><span class="name">@auth {{ Auth::user()->name}} @endauth</span>
      <img src="/pioneerimg/{{ $pioneerroom->img1 }}" alt="" /></a>

    </div>
  </header>
</article>







 <div class="table-wrapper">

     <table class="table">
     <tbody class="">
       <tr><th scope="">SID number:  <td>{{ $pioneerroom->sid }}</td></tr>
       <tr><th scope="">Asset name:</th> <td>{{ $pioneerroom->description }}</td></tr>
       <tr><th scope="">Key Number:</th> <td>{{ $pioneerroom->keynum }}</td></tr>
       <tr><th scope="">Map Grid:</th> <td>{{ $pioneerroom->maplocation }}</td></tr>
       <tr><th scope="">Other information:</th> <td>{{ $pioneerroom->description }}</td></tr>


     </tbody>
   </table>


</div>

<div class="box alt">
  <div class="row gtr-uniform">



 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img1 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img1 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img1 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img2 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img2 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img2 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img3 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img3 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img3 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img4 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img4 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img4 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img5 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img5 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img5}}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img5 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img6 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img6 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img6 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img7 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img7 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img7 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img8 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img8 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img8 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img9 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img9 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img9 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img10 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img10 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img9 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img11 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img11 }}" alt=""></span></a></div>
 <div class="col-6-xlarge col-12-small {{ $pioneerroom->img9 ? Null : 'd-none'}}"><a href="/pioneerimg/{{ $pioneerroom->img12 }}"><span class="image fit"><img  src="/pioneerimg/{{ $pioneerroom->img12 }}" alt=""></span></a></div>


 </div>

</div>

<div class="container">

<h1 class="jumbotron text-center">Route to room</h1>

</div>
<div class="box alt">
  <div class="row gtr-uniform">

    @for ($i = 1; $i < $pioneerroom->routeend; $i++)

        <div class="col-3-xlarge col-12-small">{{$i}}<a href="/pioneerpics/route/{{ $pioneerroom->route }}/{{ $i }}.JPG"><span class="image fit"><img  src="/pioneerpics/route/{{ $pioneerroom->route }}/{{ $i }}.JPG" alt=""></span></a></div>

    @endfor
    <div class="col-3-xlarge col-12-small">{{$pioneerroom->routeend}}<a href="/pioneerpics/route/{{ $pioneerroom->route }}/{{ $pioneerroom->routeend }}.JPG"><span class="image fit"><img  src="/pioneerpics/route/{{ $pioneerroom->route }}/{{ $pioneerroom->routeend }}.JPG" alt=""></span></a></div>


  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="">Plan location: {{ $pioneerroom->maplocation }}</h2>
    <p class="col-md-12 img-thumbnail"><a href="/pioneerpics/plans/{{ $pioneerroom->planpage }}.JPG"><span class="image fit"><img  src="/pioneerpics/plans/{{ $pioneerroom->planpage }}.JPG" alt=""></span></a></div>

  </div>

  <div class="container">

      <p>Room created on {{ $pioneerroom->created_at }}</p>

  </div>











@endsection
