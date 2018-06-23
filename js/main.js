
(function ($) {
    "use strict";
    /*==================================================================
    [ Hide Login Form ]*/
    $( "#signup-form-btn" ).click(function(evt) {
    evt.preventDefault();
    $('#login100-form').addClass('animated fadeOutDown');
    setInterval(function(){
    $('#login100-form').hide();
    $('#signup100-form').show();
    $('#signup100-form').addClass('animated fadeInUp');;
  }, 1000);
    $('#birth-s').val('');

    });
    $('input[name="birth-s"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true,

  minYear: 1901,
  maxYear: parseInt(moment().format('YYYY'),10)
});
    /*==================================================================
    [ Validate after type ]*/
    $('.validate-input .input100 , .validate-input .select-input100').each(function(){
        $(this).on('blur', function(){
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })
    });
    /*==================================================================
    [ Validate after Change Menu ]*/
    $('.validate-input .select-input100').each(function(){
        $(this).on('change', function(){
          console.log(this);
            if(validate(this) == false){
                showValidate(this);
            }
            else {
                $(this).parent().addClass('true-validate');
            }
        })
    });


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100  , .validate-input .select-input100');
    $('.validate-form').on('submit',function(){
        var check = true;
        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100 , .validate-form .select-input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
           $(this).parent().removeClass('true-validate');
        });
    });

     function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else if ($(input).is('select')) {
          if($(input).val() == null ){
            return false;
          }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');

        $(thisAlert).append('<span class="btn-hide-validate">&#xf135;</span>')
        $('.btn-hide-validate').each(function(){
            $(this).on('click',function(){
               hideValidate(this);
            });
        });
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
        $(thisAlert).find('.btn-hide-validate').remove();
    }



})(jQuery);
