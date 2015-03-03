$(document).ready(function()
{
    $( "#changeDate" ).click(function(){
         $("#search-reservation-form").toggle();   
         $("#summary-form").toggle();
    });
    
    $('#reservation-form').on('submit', function()
    {
        //change date
        var startDate = document.getElementById('checkin').value;
        var endDate = document.getElementById('checkout').value;
        document.getElementById('startDate').value = startDate;
        document.getElementById('endDate').value = endDate;
        //change night stay
        var date1 = new Date(startDate);
        var date2 = new Date(endDate);
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        document.getElementById('nightStay').value = diffDays;
        document.getElementById('numberOfRoom').value = document.getElementById('roomQty').value;
        //change adult child quantity
        document.getElementById('adult').value = document.getElementById('adultQty').value;
        //document.getElementById('child').value = document.getElementById('childQty').value;
        
        var sArray = $(this).serializeArray();
        console.log(sArray);
        ajaxContent([location.protocol,'//', location.host, location.pathname].join(''), ".ajax-content", sArray, false);

        return false;
    });
});