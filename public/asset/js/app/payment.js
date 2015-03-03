$(window).load(function() { 
    $('#accordion').find('.accordion-section-title').click(function () {
        if ($(this).hasClass('disable')) {
            alert("Please complete the above details");
        }else{
            $(this).next().slideToggle('fast');
            $(".accordion-section-content").not($(this).next()).slideUp('fast');
        }
    });
    $('#step1').trigger('click');

    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
});

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
            alert('submit success');
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
        });
        return false;
    }).on('submit', '#check-in-form', function()
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
            if(result.checkOutProcess === false)
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
                window.location = result.redirectUrl;      
            }
        });
        return false;
    }).on('click', '.choose-payment ul li a', function(event){
        event.preventDefault();
        
        if(!$(this).parent().hasClass('active')){   
            $('.choose-payment ul li').removeClass('active');
            $(this).parent().addClass('active');
            $('.choose-payment .box-check span').html($(this).attr('title'));
            
            $('.sectioning').slideUp();
            $('.section-' + $(this).attr('class').split('-')[1]).slideDown();
            
            document.getElementById('paymentType').value = document.getElementById('paymentSpan').innerHTML;
        }
    });

