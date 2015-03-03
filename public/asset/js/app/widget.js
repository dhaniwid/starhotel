$(function() 
{
  $( "#formreservation" ).validate({
    errorPlacement: function (error, element)
    {
        element.before(error);
    },
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    submitHandler: function() { 
      alert('trigerred');
        var formData = new FormData($(this)[0]);
        console.log(formData);
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
          alert('success loh');
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
                window.top.location.href = "http://localhost:9001/reservation";       
            }
        }).error( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        }).fail( function(xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
        });  
      }
    })
});
