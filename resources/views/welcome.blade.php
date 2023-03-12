@extends('layouts.layout')


@section('content')



<article class="post">
  <header>
    <div class="title">
      <h2><a href="/">Welcome @auth {{ Auth::user()->name }}  @endauth To The Canary Wharf Group Room Finder</a></h2>
      <p></p>
    </div>
    <div class="meta">
      <p class="published" datetime="2015-11-01"><?php echo date('jS F Y'); ?> </p>
      <a href="#" class="author"><span class="name">
        @auth
          {{ Auth::user()->name }}
        @endauth
      </span><img src="/canaryimg/main.JPG" alt="" /></a>
    </div>
  </header>
  <a href="single.html" class="image featured"><img src="/canaryimg/main.JPG" alt="" /></a>
  <p>Welcome to the Canary Wharf Group Room Finder. Click on a location below.</p>
  <footer>
    <ul class="actions">
      <li><a href="single.html" class="button large">Continue Reading</a></li>
    </ul>
    <ul class="stats">
      <li><a href="#">General</a></li>
      <li><a href="#" class="icon solid fa-heart">28</a></li>
      <li><a href="#" class="icon solid fa-comment">128</a></li>
    </ul>
  </footer>
</article>

<div class="box alt">
  <div class="row gtr-uniform">



    <div class="col-6-xlarge col-6-large col-6-medium col-12-small">

        <article class="mini-post">
          <header>
            <h3><a href="/canaryrooms/">Canary Wharf Room Finder</a></h3>
          </header>

      <span class="image fit"><img src="/canaryimg/main.JPG" alt="" /></span>

    </a>
    </article>
    </div>

    <div class="col-6-xlarge col-6-large col-6-medium col-12-small">

        <article class="mini-post">
          <header>
            <h3><a href="/rooms/">North Greenwich Room Finder</a></h3>
          </header>

      <span class="image fit"><img src="/img/main.JPG" alt="" /></span>

    </a>
    </article>
    </div>

    <div class="col-6-xlarge col-6-large col-6-medium col-12-small">

        <article class="mini-post">
          <header>
            <h3><a href="/pioneerrooms/">Pioneers Wharf Room Finder</a></h3>
          </header>


      <span class="image fit"><img src="/pioneerimg/main.JPG" alt="" /></span>

    </a>
    </article>
    </div>

    <div class="col-6-xlarge col-6-large col-6-medium col-12-small">

        <article class="mini-post">
          <header>
            <h3><a href="/prestonrooms/">Prestons Road Room Finder</a></h3>
          </header>


      <span class="image fit"><img src="/prestonimg/main.JPG" alt="" /></span>

    </a>
    </article>
    </div>



</div>
</div>






@endsection
