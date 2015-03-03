<!-- Navigation -->
<div class="navbar-default" style="border-bottom: 1px solid #A76837;">
  <div class="container">
    <div class="navbar-header" style="margin-bottom: 60px">
      <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.html" class="navbar-brand">         
      <!-- Logo -->
      <div id="logo"> <img id="default-logo" src="{{asset('asset/images/amarterra/amarterra_logo_gold.png')}}" alt="Amarterra"> <img id="retina-logo" src="images/logo-retina.png" alt="Amarterra" style="height:44px;"> </div>
      </a> 
    </div>
    <div id="navbar-collapse-grid" style="margin-left: 320px;">
      <ul class="nav navbar-nav">
        <li class="dropdown"> <a href="#">Home</a></li>
        <li class="dropdown"> <a href="{{URL::route('showAllRoom')}}">Rooms</a></li>
        <li class="dropdown"> <a href="#"> Facilities
        {{-- <b class="caret"></b> --}}
        </a>
          {{-- <ul class="dropdown-menu">
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">Gym</a></li>
            <li><a href="#">Wedding & Ceremonies</a></li>
          </ul> --}}
        </li>
        <li> <a href="gallery.html">Gallery</a></li>
        <li> <a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</div>  