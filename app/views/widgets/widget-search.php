<html>
<head>
<link rel="stylesheet" href="http://localhost:9001/asset/css/animate.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/owl.carousel.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/owl.theme.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/prettyPhoto.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" href="http://localhost:9001/asset/rs-plugin/css/settings.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/theme.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/colors/brown.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/responsive.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/style.css">
<link rel="stylesheet" href="http://localhost:9001/asset/css/app/reservation-form.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700">

<!-- Javascripts --> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/bootstrap-hover-dropdown.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.nicescroll.js"></script>  
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery-ui-1.10.4.custom.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.forms.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.sticky.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/waypoints.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/jquery.gmap.min.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="http://localhost:9001/asset/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="http://localhost:9001/asset/js/app/base.js"></script>
<script type="text/javascript" src="http://localhost:9001/asset/js/custom.js"></script>
<!-- <script type="text/javascript" src="http://localhost:9001/asset/js/app/widget.js"></script> -->
<!-- Jquery Validate -->
<script src="http://localhost:9001/asset/js/plugins/validate/jquery.validate.min.js"></script>
</head>
<body style="height: 100p">
<div class="container">
  <div class="row">
    <form id="formreservation" method="post">
    <div class="col-sm-9"style="margin-left: 140px;margin-top: 10px;-webkit-border-radius: 5px 5px 5px 5px;
                          border-radius: 5px 5px 5px 5px;
                          border: 1px solid #ebebeb;">
      <div class="row" style="padding-top: 15px">
        <div class="col-xs-2 col-sm-3">
          <div class="form-group">
            <label for="checkin">Check-in</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
          </div> 
        </div>
        <div class="col-xs-2 col-sm-1" style="width: 11%">
          <div class="form-group">
            <div class="nights-select">
              <label>Nights</label>
              <i class="fa fa-night infield"></i>
                <select name="nights" id="nights" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">30+</option>
                </select>
            </div>
          </div>
        </div>
        <div class="col-xs-2 col-sm-3">
          <div class="form-group">
            <label for="checkout">Check-out</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
          </div>            
        </div>
        <!-- Guest select -->
        <div class="col-xs-1 col-sm-2">
          <div class="form-group">
            <div class="guests-select">
              <label>Guests</label>
              <i class="fa fa-user infield"></i>
              <div class="total form-control" id="test">1</div>
              <div class="guests">
                <div class="form-group adults">
                  <label for="adults">Adults</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="adults" id="adults" class="form-control">
                    <option value="1">1 adult</option>
                    <option value="2">2 adults</option>
                    <option value="3">3 adults</option>
                  </select>
                </div>
                <div class="form-group children">
                  <label for="children">Children</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="children" id="children" class="form-control">
                    <option value="0">0 children</option>
                    <option value="1">1 child</option>
                    <option value="2">2 children</option>
                    <option value="3">3 children</option>
                  </select>
                </div>
                <div class="form-group infant">
                  <label for="infant">Infant</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="young children between the ages of 1 month (or less) and 12 months"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="infants" id="children" class="form-control">
                    <option value="0">0 infant</option>
                    <option value="1">1 infant</option>
                    <option value="2">2 infants</option>
                    <option value="3">3 infants</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default button-save btn-block">Save</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Button -->
        <div class="col-sm-2">
          <button style="margin-top: 23px" type="submit" class="btn btn-primary">Check Availability</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</body>
</html>

<script>
$(function() 
{
  $(document).on('submit', '#formreservation', function()
    {
        var formData = new FormData($(this)[0]);
        $.ajax({
            type: "POST",
            url: window.location.href.toString(),
            data: formData,
            dataType: "json",
            cache: false,
            contentType: false,
            processData: false
        }).done(function(result)
        {
            if(result.checkProcess === false)
            {
                if(typeof result.message !== 'undefined')
                {
                    showStatusMessage(result.message, result.messageType);
                }
                else if(typeof result.errorMessages !== 'undefined')
                {
                    showRegisterFormAjaxErrors(result.errorMessages);
                }
            }
            else
            {
               window.top.location.href = result.redirectUrl;
            }
        });
        return false;
    });
});
</script>