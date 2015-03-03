@extends('home.master')
@section('content')
<div class="container mt50">
  <div class="row">
    <!-- Payment form -->
      <div class="col-md-8" style="border: thin;">
        @include('index-payment')
      </div>
      <div class="container mt50">
        <div class="row">
          <section id="reservation-form" class="mt50 clearfix">
            @include('summary')
        </section>
        </div>
      </div>
  </div>
</div>
@stop