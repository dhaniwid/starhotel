<div class="container">
  <div class="row"> 
    
    <!-- Contact details -->
    <section class="contact-details">
      <div class="col-md-4">
        <h2 class="lined-heading mt50"><span>Reservation Summary</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-star"></i> <strong>Starhotel</strong></div>
          </div>
          <div class="panel-body">
          	<div class="price">
  			    <h4>{{$reservation->roomtype_name}}</h4>
  			    @currency($reservation->roomprice_rate, 'EUR'),-<span> a night</span>
    			  	<h4> {{$reservation->checkin}} - {{$reservation->checkout}}</h4>  
    		  		<h4>{{$reservation->night}} Night | {{$reservation->adultQty}} @if($reservation->adultQty > 1)Adults @else Adult @endif
    			  
    			      @if($reservation->childQty > 1)
    			        | {{$reservation->childQty}} Children 
    			      @elseif($reservation->childQty != 0)
    			        | {{$reservation->childQty}} Child
    			      @endif
    			      </h4>
    		  	</div>
          </div>
        </div>        
      </div>
    </section>
    
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-8">
        <h2 class="lined-heading"><span>Guest Detail</span></h2>
        <div class="accordion">            
            <div id="accordion">
            {{ Form::open(array('route' => 'step1', 'id' => 'check-out-form', 'method' => 'POST')) }}
              <div class="accordion-section">
              <!-- <h3 class="accordion-toggle">1. Guest Detail</h3> -->
              <a class="accordion-section-title" id="step1">1. Guest Detail</a>
                  <div id="1-guest-detail" class="accordion-section-content">                  
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="name" accesskey="U"><span class="required">*</span> Full Name</label>
                            <input name="name" type="text" id="name" class="form-control" value="" placeholder="Full Name"/>
                          </div>
                          @if ($errors->has('name')) 
                          <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $errors->first('name') }} </div>
                          @endif
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                            <input name="email" type="text" id="email" value="" class="form-control" placeholder="E-mail"/>
                          </div>
                          @if ($errors->has('email')) 
                          <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $errors->first('email') }} </div>
                          @endif
                        </div>
                      </div>
                      <!-- Nationality & Phone. No -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="phone"><span class="required">*</span> Phone Number</label>
                            <input name="phone" type="text" id="phone" class="form-control" placeholder="Phone Number" value=""/>
                          </div>
                          @if ($errors->has('phone')) 
                          <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $errors->first('phone') }} </div>
                          @endif
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nationality"><span class="required">*</span> Nationality</label>
                            {{Form::select('nationality', array('default'=>'Select your nationality')+$countries,null, array('class'=>'form-control')) }}             
                          </div>
                          @if ($errors->has('nationality')) 
                          <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ $errors->first('nationality') }} </div>
                          @endif
                        </div>
                      </div>
                      <button type="submit" id="next" class="btn  btn-lg btn-primary">Next Step</button>
                  </div><!--end .accordion-section-content-->
              </div>
              <div class="accordion-section">
              <!-- <h3 class="accordion-toggle" disable>2. Payment</h3> -->
              <a class="accordion-section-title disable" id="step2">2. Payment</a>
                  <div id="2-Payment" class="accordion-section-content">
                      <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                  </div><!--end .accordion-section-content-->
              </div>
              <div class="accordion-section">
              <!-- <h3 class="accordion-toggle" disable>3. Finish</h3> -->
              <a class="accordion-section-title disable" id="step3">3. Finish</a>
                  <div id="3-finished" class="accordion-section-content">
                      <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                  </div><!--end .accordion-section-content-->
              </div>
            {{Form::close()}}
            </div><!-- end .accordion-section -->
        </div>
      </div>
        <!-- <form class="clearfix mt50" role="form" method="post" action="php/contact.php" name="contactform" id="contactform"> -->
          <!-- Error message -->
		  <div id="message"></div>
		  <!-- Guest Detail -->
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" accesskey="U"><span class="required">*</span> Full Name</label>
                <input name="name" type="text" id="name" class="form-control" value="" placeholder="Full Name"/>
              </div>
              @if ($errors->has('name')) 
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('name') }} </div>
              @endif
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control" placeholder="E-mail"/>
              </div>
              @if ($errors->has('email')) 
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('email') }} </div>
              @endif
            </div>
          </div>
          <!-- Nationality & Phone. No -->
          <!--<div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="phone"><span class="required">*</span> Phone Number</label>
                <input name="phone" type="text" id="phone" class="form-control" placeholder="Phone Number" value=""/>
              </div>
              @if ($errors->has('phone')) 
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('phone') }} </div>
              @endif
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nationality"><span class="required">*</span> Nationality</label>
                {{Form::select('nationality', array('default'=>'Select your nationality')+$countries,null, array('class'=>'form-control')) }}             
              </div>
              @if ($errors->has('nationality')) 
              <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ $errors->first('nationality') }} </div>
              @endif
            </div>
          </div>
          <button type="submit" class="btn  btn-lg btn-primary">Next Step</button> -->
          <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
              <div class="form-group" style="float: right">
                <ul class="pagination pagination-lg clearfix">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                </ul>
              </div>
            </div>
          </div>
          <input type="hidden" name="roomtype_id" value="{{$reservation->roomtype_id}}">
          <input type="hidden" name="roomtype_name" value="{{$reservation->roomtype_name}}">
          <input type="hidden" name="roomprice_rate" value="{{$reservation->roomprice_rate}}">
          <input type="hidden" name="checkin" value="{{$reservation->checkin}}">
          <input type="hidden" name="checkout" value="{{$reservation->checkout}}">
          <input type="hidden" name="adultQty" value="{{$reservation->adultQty}}">
          <input type="hidden" name="childQty" value="{{$reservation->childQty}}">
          <input type="hidden" name="night" value="{{$reservation->night}}">   
          <input type="hidden" name="mode" value="continue">
        <!-- </form> -->
      </div>
    </section>
  </div>
</div>