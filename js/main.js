
(function ($) {
    "use strict";
    /*==================================================================
    [ Animate Form Function ]*/
    $.fn.formShow = function(targetForm,hideAnimateType,showAnimateType) {
    var currForm = "#" + (this).closest("form").attr('id');
    $(currForm).removeClass("intro");
    $(currForm).addClass('animated '+hideAnimateType);
    setTimeout(function(){
    $(currForm).removeClass('animated '+hideAnimateType);
    $(currForm).hide();
    $(targetForm).show();
    $(targetForm).addClass('animated '+showAnimateType);
    $(currForm).removeClass('animated '+showAnimateType);
  }, 500);
  };
    /*==================================================================
    [ Hide Login Form And Show signup Form ]*/
    $( "#signup-form-btn" ).click(function(evt) {
    evt.preventDefault();
    $(this).formShow('#signup100-form','fadeOutDown','fadeInUp');
    });
    /*==================================================================
    [ Hide  signup Form And Show Login  Form ]*/
    $( ".login100-form-backArrow" ).click(function(evt) {
      evt.preventDefault();
    $(this).formShow('#login100-form','fadeOutDown','fadeInUp');
    });

    /*==================================================================
    [ Hide Login Form And Show forget Form ]*/
    $("#forget100-form-show").click(function(evt) {
    evt.preventDefault();
    $(this).formShow('#forget100-form','fadeOutDown','fadeInUp');
    });
    /*==================================================================
    [ Hide Forget Form And Show verify Form ]*/
    $( "#verify100-form-show" ).click(function(evt) {
      evt.preventDefault();
      $(this).formShow('#verify100-form','fadeOutLeft','fadeInRight');
    });
    /*==================================================================
    [ Hide verify Form And Show reset Form ]*/
    $( "#reset100-form-show" ).click(function(evt) {
    evt.preventDefault();
    $(this).formShow('#reset100-form','fadeOutLeft','fadeInRight');
    });
    /*==================================================================
    [ Data Picker Setup ]*/
    $('input[name="birthdate"]').daterangepicker({
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
    [ json parse ]*/
    $.fn.serializeJSON=function() {
           var json = {};
           jQuery.map($(this).serializeArray(), function(n, i){
               json[n['name']] = n['value'];
           });
           return json;
       };
        /*==================================================================
        [ submit signup ]*/
        $('#signup100-btn').click(function(evt){
          evt.preventDefault();
          var inputs = $('#signup100-form .validate-input .input100 , #signup100-form  .validate-input .select-input100');
            var check = true;
            for(var i=0; i<inputs.length; i++) {
                if(validate(inputs[i]) == false){
                    showValidate(inputs[i]);
                    check=false;
                }
            }
            if(check){
             var data = $('#signup100-form').serializeJSON();

                     $.ajax({
                         type: "POST",
                         url: "http://104.217.253.15:8000/api/clients",
                         cache: false,
                         contentType: 'application/json',
                         data: JSON.stringify(data),
                         statusCode: {
                           200: function (response) {
                            $('#signup100-form').formShow('#verify100-form','fadeOutDown','fadeInUp');
                            $('#verify100-form input[name=mobile]').val(data.mobile);
                          },
                          201: function (response) {
                            $('.modal-body').text('Something went wrong, please try again later');
                            $('#errorModal').modal('show');
                         },
                          400: function (response) {
                            $('.modal-body').text('Something went wrong, please try again later');
                            $('#errorModal').modal('show');
                         },
                          404: function (response) {
                          $('.modal-body').text('Something went wrong, please try again later');
                          $('#errorModal').modal('show');
                        },
                          422: function (response) {
                         $('.modal-body').text(response.responseJSON.error.message);
                         $('#errorModal').modal('show');
                       },
                         },
                         success: function(html) {

                         },
                         error: function(XMLHttpRequest, textStatus, errorThrown) {
                           $('.modal-body').text('Something went wrong, please try again later');
                           $('#errorModal').modal('show');
                         },
                         beforeSend: function() {
                           $('.container-loader').removeClass('hidden');
                           $('.container-loader').addClass('flex');
                         },
                         complete: function() {
                           $('.container-loader').removeClass('flex');
                           $('.container-loader').addClass('hidden');
                         }
                     });
            }
        });
        /*==================================================================
        [ submit verify ]*/
        $('#verify100-form-btn').click(function(evt){
          evt.preventDefault();
          var inputs = $('#verify100-form .validate-input .input100');
            var check = true;
            for(var i=0; i<inputs.length; i++) {
                if(validate(inputs[i]) == false){
                    showValidate(inputs[i]);
                    check=false;
                }
            }
            if(check){
              var mobileNum = encodeURIComponent($('#verify100-form [name=mobile]').val());
              var code = $('#verify100-form [name=code]').val();
              var data = "mobile="+mobileNum+"&"+"code="+code;
              $.ajax({
                  type: "GET",
                  url: "http://104.217.253.15:8000/api/clients/confirm2",
                  data:data,
                  cache: false,
                  contentType: 'application/json',
                  statusCode: {
                    200: function (response) {
                     $('#verify100-form').formShow('#login100-form','fadeOutDown','fadeInUp');
                   },
                   201: function (response) {
                     $('.modal-body').text('Something went wrong, please try again later');
                     $('#errorModal').modal('show');
                  },
                   400: function (response) {
                     $('.modal-body').text('Something went wrong, please try again later');
                     $('#errorModal').modal('show');
                  },
                   404: function (response) {
                   $('.modal-body').text('Something went wrong, please try again later');
                   $('#errorModal').modal('show');
                 },
                   422: function (response) {
                  $('.modal-body').text(response.responseJSON.error.message);
                  $('#errorModal').modal('show');
                },
                  },
                  success: function(html) {

                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('.modal-body').text('Something went wrong, please try again later');
                    $('#errorModal').modal('show');
                  },
                  beforeSend: function() {
                    $('.container-loader').removeClass('hidden');
                    $('.container-loader').addClass('flex');
                  },
                  complete: function() {
                    $('.container-loader').removeClass('flex');
                    $('.container-loader').addClass('hidden');
                  }
              });
            }

        });
        /*==================================================================
        [ submit login ]*/
        $('#login100-form').submit(function(evt){
          var inputs = $('#login100-form .validate-input .input100 ');
            var check = true;
            for(var i=0; i<inputs.length; i++) {
                if(validate(inputs[i]) == false){
                    showValidate(inputs[i]);
                    check=false;
                }
            }
            if (!check) {
              evt.preventDefault();
            }
        });
    /*==================================================================
    [ Validate ]*/
    /*
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
    */

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

        }else if ($(input).attr('type') == 'mobile' || $(input).attr('name') == 'mobile') {
          if($(input).val().trim().match(/([+]?\d{1,2}[.-\s]?)?(\d{3}[.-]?){2}\d{4}/) == null) {
              return false;
          }
        }
         else if ($(input).is('select')) {
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
