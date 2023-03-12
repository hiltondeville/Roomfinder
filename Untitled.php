@extends('layouts.layout')


@section('content')


<h1 class="text-center mt-5 p5">Your search has returned: {{ $room->description }}</h1>
   <h1 class="text-center mb-5 p5">With SID reference:  {{ $room->sid }}</h1>






 <div class="container mb-5">
 <div class="col-md-12 mt-2">
     <table class="table table-dark">
     <tbody class="">
       <tr><th scope="row">SID number:  <td>{{ $room->sid }}</td></tr>
       <tr><th scope="row">Asset name:</th> <td>{{ $room->description }}</td></tr>
       <tr><th scope="row">Key Number:</th> <td>{{ $room->keynum }}</td></tr>
       <tr><th scope="row">Map Grid:</th> <td>{{ $room->maplocation }}</td></tr>
       <tr><th scope="row">Other information:</th> <td>{{ $room->description }}</td></tr>


     </tbody>
   </table>

</div>
</div>

<div class="container">

 <div class="row">




 <p class="col-md-6 img-thumbnail {{ $room->img1 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img1 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img1 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img2 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img2 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img2 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img3 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img3 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img3 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img4 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img4 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img4 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img5 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img5 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img5}}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img5 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img6 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img6 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img6 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img7 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img7 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img7 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img8 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img8 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img8 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img9 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img9 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img9 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img10 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img10 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img9 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img11 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img11 }}" alt=""></a></p>
 <p class="col-md-6 img-thumbnail {{ $room->img9 ? Null : 'd-none'}}"><a href="/northgreenwich/img/{{ $room->img12 }}"><img class="img-fluid" src="/northgreenwich/img/{{ $room->img12 }}" alt=""></a></p>


 </div>

</div>

<div class="container">

<h1 class="jumbotron text-center">Route to room</h1>

</div>

<div class="container">

  <div class="row">

    @for ($i = 1; $i < $room->routeend; $i++)

       <p class="col-md-3 img-thumbnail">{{$i}}<a href="/northgreenwich/pics/route/{{ $room->route }}/{{ $room->routeend }}.JPG"><img class="img-fluid" src="/northgreenwich/pics/route/{{ $room->route }}/{{ $i }}.JPG" alt=""></a></p>

    @endfor
    <p class="col-md-3 img-thumbnail">{{$room->routeend}}<a href="/northgreenwich/pics/route/{{ $room->route }}/{{ $room->routeend }}.JPG"><img class="img-fluid" src="/northgreenwich/pics/route/{{ $room->route }}/{{ $room->routeend }}.JPG" alt=""></a></p>


  </div>
</div>

<div class="container">
  <div class="row">
    <h2 class="">Plan location: {{ $room->maplocation }}</h2>
    <p class="col-md-12 img-thumbnail"><a href="/northgreenwich/pics/plans/{{ $room->planpage }}.JPG"><img class="img-fluid" src="/northgreenwich/pics/plans/{{ $room->planpage }}.JPG" alt=""></a></p>

  </div>
</div>










@endsection
