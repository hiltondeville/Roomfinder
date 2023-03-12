
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
		<link rel="stylesheet" href="/roomfinder1/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="/roomfinder1/">Canary Wharf Group</a></h1>
						<nav class="links">
							<ul>
								<li><a href="/roomfinder1/rooms/">North Greenwich</a></li>
								<li><a href="/roomfinder1/canaryrooms/">Canary Wharf</a></li>
								<li><a href="/roomfinder1/prestonrooms/">Prestons Road</a></li>
								<li><a href="/roomfinder1/pioneerrooms/">Pioneers Wharf</a></li>

                <!-- Authentication Links -->
                                  <li class="">
                       <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           David Hill <span class="caret"></span>
                       </a>
                        </li>

                       <li class="" aria-labelledby="navbarDropdown">
                           <a class="" href="http://hiltondeville.com/roomfinder1/logout"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               Logout
                           </a>

                           <form id="logout-form" action="http://hiltondeville.com/roomfinder1/logout" method="POST" style="display: none;">
                               <input type="hidden" name="_token" value="LJDs0HnlHJohCHmhMWbaHoLafIaYYgS8zESa35BU">                           </form>
                       </li>

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
										<a href="/roomfinder1/rooms/">
											<h3>North Greenwich</h3>
											<p>Room Finder</p>
										</a>
									</li>
                <li>
                  <a href="/roomfinder1/rooms/create/">
                    <h3>Create</h3>
                    <p>North Greenwic Room</p>
                  </a>
                </li>
									<li>
										<a href="/roomfinder1/canaryrooms/">
											<h3>Canary Wharf</h3>
											<p>Room Finder</p>
										</a>
									</li>
									<li>
										<a href="/roomfinder1/canaryrooms/create/">
											<h3>Create</h3>
											<p>Canary Wharf Room</p>
										</a>
									</li>
									<li>
										<a href="/roomfinder1/pioneerrooms/">
											<h3>Pioneers Wharf</h3>
											<p>Room Finder</p>
										</a>
									</li>
                  <li>
                    <a href="/roomfinder1/pioneerrooms/create/">
                      <h3>Create</h3>
                      <p>Pioneers Wharf Room</p>
                    </a>
                  </li>
                  <li>
                    <a href="/roomfinder1/prestonrooms/">
                      <h3>Prestons Road</h3>
                      <p>Room Finder</p>
                    </a>
                  </li>
                  <li>
                    <a href="/roomfinder1/prestonrooms/create/">
                      <h3>Create</h3>
                      <p>Prestons Road Room</p>
                    </a>
                  </li>
								</ul>
							</section>

						<!-- Actions -->
							<section>

                                      <li class="" aria-labelledby="navbarDropdown">
                                          <a class="" href="http://hiltondeville.com/roomfinder1/logout"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="http://hiltondeville.com/roomfinder1/logout" method="POST" style="display: none;">
                                              <input type="hidden" name="_token" value="LJDs0HnlHJohCHmhMWbaHoLafIaYYgS8zESa35BU">                                          </form>
                                      </li>
               							</section>

					</section>


          				<!-- Main -->
          					<div id="main">


  <body>




<article class="post">
  <header>
    <div class="title">
      <h2><a href="/">North Greenwoch Room Finder</a></h2>
      <p>Total:  307 locations currently logged</p>
    </div>
    <div class="meta">
      <p class="published">26th August 2020 </p>
      <a href="#" class="author"><span class="name">
                  David Hill
              </span><img src="/roomfinder1/img/main.JPG" alt="" /></a>
    </div>
  </header>
  <a href="" class="image featured"><img src="/roomfinder1/img/main.JPG" alt="" /></a>
  <p>Welcome to the Canary Wharf Group Room Finder</p>

</article>

<div class="row">
  <div class="col-sm-6 float-left">
<h1 class="navbar-brand">Room Search By Description</a></h1>
<form method="post" class="form-inline" action="/roomfinder1/rooms/search" >
    <input type="hidden" name="_token" value="LJDs0HnlHJohCHmhMWbaHoLafIaYYgS8zESa35BU">
  <input name="searchrooms" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search Description">
  <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
</form>
</div>

<div class="col-sm-6">
  <h1 class="navbar-brand">Room Search By Sid</a></h1>
<form method="post" class="form-inline" action="/roomfinder1/rooms/searchsid" >
    <input type="hidden" name="_token" value="LJDs0HnlHJohCHmhMWbaHoLafIaYYgS8zESa35BU">
  <input name="searchsid" type="text" class="form-control mr-3 mb-2 mb-sm-3" placeholder="Search SID number">
  <button type="submit" class="btn btn-primary form-control mr-3 mb-2 mb-sm-3">Search</button>
</form>
</div>
</div>


     <nav>
        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>





                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=4">4</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=5">5</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=6">6</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=7">7</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=8">8</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=9">9</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=10">10</a></li>


                            <li class="page-item">
                    <a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>





     <div class="box alt">
       <div class="row gtr-uniform">






<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/1"><span class="image fit"><img src="/roomfinder1/img/4-801a.JPG" alt="" /></span> <p>4/801</p> <h4>BTP DOWNLOAD SUITE CSM OFFICE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/2"><span class="image fit"><img src="/roomfinder1/img/4-414a.JPG" alt="" /></span> <p>4/414</p> <h4>SWITCH ROOM 34 E34</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/3"><span class="image fit"><img src="/roomfinder1/img/4-732a.JPG" alt="" /></span> <p>4/732</p> <h4>CER 2</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/4"><span class="image fit"><img src="/roomfinder1/img/4-779a.JPG" alt="" /></span> <p>4/779</p> <h4>FAN ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/5"><span class="image fit"><img src="/roomfinder1/img/4-732a.JPG" alt="" /></span> <p>4/243</p> <h4>CORRIDOR SCP</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/6"><span class="image fit"><img src="/roomfinder1/img/4-332a.JPG" alt="" /></span> <p>4/332</p> <h4>CSM OFFICE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/7"><span class="image fit"><img src="/roomfinder1/img/4-011a.JPG" alt="" /></span> <p>4/011</p> <h4>DISUSED TICKET OFFICE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/8"><span class="image fit"><img src="/roomfinder1/img/4-011a.JPG" alt="" /></span> <p>4/242</p> <h4>DISUSED TICKET OFFICE LOBBY</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/9"><span class="image fit"><img src="/roomfinder1/img/4-021a.JPG" alt="" /></span> <p>4/021</p> <h4>SECURE SUITE POM ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/10"><span class="image fit"><img src="/roomfinder1/img/4-021a.JPG" alt="" /></span> <p>4/671</p> <h4>SECURE SUITE SWITCH ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/11"><span class="image fit"><img src="/roomfinder1/img/4-021a.JPG" alt="" /></span> <p>4/672</p> <h4>SECURE SUITE SWITCH ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/12"><span class="image fit"><img src="/roomfinder1/img/4-412a.JPG" alt="" /></span> <p>4/412</p> <h4>SECURE SUITE STORE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/15"><span class="image fit"><img src="/roomfinder1/img/1-796.JPG" alt="" /></span> <p>1/796</p> <h4>VENT SHAFT RED AREA</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/16"><span class="image fit"><img src="/roomfinder1/img/1-797.JPG" alt="" /></span> <p>1/797</p> <h4>VENT SHAFT RED AREA</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/17"><span class="image fit"><img src="/roomfinder1/img/4-411a.JPG" alt="" /></span> <p>4/411</p> <h4>STORE ARCHIVE ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/18"><span class="image fit"><img src="/roomfinder1/img/4-036.JPG" alt="" /></span> <p>4/036</p> <h4>MALE TOILET TICKET OFFICE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/19"><span class="image fit"><img src="/roomfinder1/img/4-037.JPG" alt="" /></span> <p>4/037</p> <h4>FEMALE TOILET TICKET OFFICE</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/20"><span class="image fit"><img src="/roomfinder1/img/4-082a.JPG" alt="" /></span> <p>4/082</p> <h4>LOBBY VENT SHAFT</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/21"><span class="image fit"><img src="/roomfinder1/img/4-331d.JPG" alt="" /></span> <p>4/331</p> <h4>KITCHEN</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/22"><span class="image fit"><img src="/roomfinder1/img/4-332a.JPG" alt="" /></span> <p>4/332</p> <h4>OLD CSM OFFICE DISUSED</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/23"><span class="image fit"><img src="/roomfinder1/img/4-333a.JPG" alt="" /></span> <p>4/333</p> <h4>OLD KITCHEN TICKET OFFICE DISUSED</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/24"><span class="image fit"><img src="/roomfinder1/img/4-371.JPG" alt="" /></span> <p>4/371</p> <h4>SWITCH ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/25"><span class="image fit"><img src="/roomfinder1/img/4-413a.JPG" alt="" /></span> <p>4/413</p> <h4>STORE ABM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/26"><span class="image fit"><img src="/roomfinder1/img/4-414a.JPG" alt="" /></span> <p>4/414</p> <h4>SWITCH ROOM</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/27"><span class="image fit"><img src="/roomfinder1/img/4-417.JPG" alt="" /></span> <p>4/417</p> <h4>MALE STAFF TOILET</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/28"><span class="image fit"><img src="/roomfinder1/img/4-418.JPG" alt="" /></span> <p>4/418</p> <h4>FEMALE STAFF TOILET</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/29"><span class="image fit"><img src="/roomfinder1/img/5-085a.JPG" alt="" /></span> <p>5/085</p> <h4>CORRIDOR</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/30"><span class="image fit"><img src="/roomfinder1/img/5-577a.JPG" alt="" /></span> <p>5/577</p> <h4>STAIRS 45</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/33"><span class="image fit"><img src="/roomfinder1/img/3-905a.JPG" alt="" /></span> <p>3/905</p> <h4>MAINT AREA THROUGH 5/789</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/34"><span class="image fit"><img src="/roomfinder1/img/1-790a.JPG" alt="" /></span> <p>1/790</p> <h4>SERVICE RISER</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/35"><span class="image fit"><img src="/roomfinder1/img/1-604.JPG" alt="" /></span> <p>5/604</p> <h4>STAIR 1</h4>  </a></div>









<div class="col-3-xlarge col-12-small"><a href="/roomfinder1/rooms/36"><span class="image fit"><img src="/roomfinder1/img/4-236.JPG" alt="" /></span> <p>4/236</p> <h4>STAIR 61</h4>  </a></div>







    </div>


   <nav>
        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>





                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=4">4</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=5">5</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=6">6</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=7">7</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=8">8</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=9">9</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=10">10</a></li>


                            <li class="page-item">
                    <a class="page-link" href="http://hiltondeville.com/roomfinder1/rooms?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>



  </div>



  </body>


</div>  <!--  main -->
  </div> <!--  wrapper -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
