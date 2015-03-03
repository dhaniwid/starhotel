@extends('home.master')
@section('content')
<!-- Revolution Slider -->
<section class="revolution-slider">
  @include('home.slider')
</section>
      
<!-- Reservation form -->
<section id="reservation-form">
  @include('home.search-reservation')
</section>

<!-- Rooms -->
<section class="rooms mt50">
  @include('home.favorite')
</section>

<!-- Gallery -->
<section class="gallery-slider mt100">
  @include('home.gallery')
</section>

@stop