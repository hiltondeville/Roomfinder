<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Canary Wharf Group Room Finder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/">Canary Wharf Group</a></h1>
						<nav class="links">
							<ul>
								<li><a href="/rooms/">North Greenwich</a></li>
								<li><a href="/canaryrooms/">Canary Wharf</a></li>
								<li><a href="/prestonrooms/">Prestons Road</a></li>
								<li><a href="/pioneerrooms/">Pioneers Wharf</a></li>

                <!-- Authentication Links -->
               @guest
                   <li class="">
                       <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </li>
                   @if (Route::has('register'))
                       <li class="">
                           <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @endif
               @else
                   <li class="">
                       <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           {{ Auth::user()->name }} <span class="caret"></span>
                       </a>
                        </li>

                       <li class="" aria-labelledby="navbarDropdown">
                           <a class="" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                       </li>

               @endguest
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<!-- <li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li> -->
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="/rooms/">
											<h3>North Greenwich</h3>
											<p>Room Finder</p>
										</a>
									</li>
                <li>
                  <a href="/rooms/create/">
                    <h3>Create</h3>
                    <p>North Greenwic Room</p>
                  </a>
                </li>
									<li>
										<a href="/canaryrooms/">
											<h3>Canary Wharf</h3>
											<p>Room Finder</p>
										</a>
									</li>
									<li>
										<a href="/canaryrooms/create/">
											<h3>Create</h3>
											<p>Canary Wharf Room</p>
										</a>
									</li>
									<li>
										<a href="/pioneerrooms/">
											<h3>Pioneers Wharf</h3>
											<p>Room Finder</p>
										</a>
									</li>
                  <li>
                    <a href="/pioneerrooms/create/">
                      <h3>Create</h3>
                      <p>Pioneers Wharf Room</p>
                    </a>
                  </li>
                  <li>
                    <a href="/prestonrooms/">
                      <h3>Prestons Road</h3>
                      <p>Room Finder</p>
                    </a>
                  </li>
                  <li>
                    <a href="/prestonrooms/create/">
                      <h3>Create</h3>
                      <p>Prestons Road Room</p>
                    </a>
                  </li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
               @auth

                                      <li class="" aria-labelledby="navbarDropdown">
                                          <a class="" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                                      </li>
               @endauth
							</section>

					</section>


          				<!-- Main -->
          					<div id="main">
