/*tslint:disabled*/
import './bootstrap';

/* Sel */
$('.sel').each(function() {
    $(this).children('select').css('display', 'none');
    
    var $current = $(this);
    
    $(this).find('option').each(function(i) {
      if (i == 0) {
        $current.prepend($('<div>', {
          class: $current.attr('class').replace(/sel/g, 'sel__box')
        }));
        
        var placeholder = $(this).text();
        $current.prepend($('<span>', {
          class: $current.attr('class').replace(/sel/g, 'sel__placeholder'),
          text: placeholder,
          'data-placeholder': placeholder
        }));
        
        return;
      }
      
      $current.children('div').append($('<span>', {
        class: $current.attr('class').replace(/sel/g, 'sel__box__options'),
        text: $(this).text()
      }));
    });
});
  
  $('.sel').click(function() {
    $(this).toggleClass('active');
  });
  
  $('.sel__box__options').click(function() {
    var txt = $(this).text();
    var index = $(this).index();
    
    $(this).siblings('.sel__box__options').removeClass('selected');
    $(this).addClass('selected');
    
    var $currentSel = $(this).closest('.sel');
    $currentSel.children('.sel__placeholder').text(txt);
    $currentSel.children('select').prop('selectedIndex', index + 1);
  });
  

  $("textarea").each(function () {
    this.style.height = this.scrollHeight + "px";
    this.style.overflowY = "hidden";
  }).on("input", function () {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
});

/* MaxLength for text area*/
$(function() {  
    $("textarea[maxlength]").bind('input propertychange', function() {  
        var maxLength = $(this).attr('maxlength');  
        if ($(this).val().length > maxLength) {  
            $(this).val($(this).val().substring(0, maxLength));  
        }  
    })  
});

$(function() {

    $('.custom-dropdown').on('show.bs.dropdown', function() {
      var that = $(this);
      setTimeout(function(){
          that.find('.dropdown-menu').addClass('active');
      }, 100);
    });

    $('.custom-dropdown').on('hide.bs.dropdown', function() {
      $(this).find('.dropdown-menu').removeClass('active');
    });
});


$(function(){
    let tel_code,newMask;
    $('.dropdown-menu img').on('click',function(event) {
        console.log("click",event);
        tel_code=event.currentTarget.id;
        newMask=createMask(tel_code);

        $("#phone").val("").attr("placeholder", newMask);
        $("#phone").on("input", mask);
        setCursorPosition(0, $("#phone").get(0));
    
    
        setCursorPosition($("#phone").val().length, $("#phone").get(0));
   
    });

    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) {
            elem.setSelectionRange(pos, pos);
        } else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select();
        }
    }
    function createMask(code) {
        console.log(code);
        if (code == 'bel') {
            console.log('yes');
            return "+375(___)___-__-__";
        } else {
            return "+7(___)___-__-__";
        }
    }

    function mask(event) {
        var $input = $(this),
            matrix = newMask,
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = $(this).val().replace(/\D/g, "");

            if (def.length >= val.length) val = def;
            $input.val(matrix.replace(/[_\d]/g, function(a) {
                return val.charAt(i++) || "_";
            }));
            
            i = $input.val().lastIndexOf(val.substr(-1));
            if (i < $input.val().length && $input.val() != matrix) {
                i++;
            } else {
                i = $input.val().indexOf("_");
            }
    
        setCursorPosition(i, $input.get(0));

        // setCursorPosition(i, this);
    }

    $(document).ready(function() {
        });
})

$( document ).ready(function(){
// const $mainForm = $('#mainForm');
if($('#mainForm').length>0){
    $('#mainForm').validate({
        rules:{
            first_name:{
                required: true,
                maxlength: 20
            },
            last_name: {
                required: true,
                maxlength: 20
            },
            middle_name: {
                maxlength: 20
            },
            birth_date: {
                required: true,
                date: true
            },
            email: {
                required: true,
                email: true,
                maxlength: 255
            },
            phone: {
                required: true,
                maxlength: 20
            },
            marital_status: {
                required: true
            },
            about: {
                maxlength: 300
            },
            policy:{
                required: true
            }
        },
        messages:{
            first_name:{
                required: "Please enter first name",
                maxlength: "Your first name should be 20 characters long."
            },
            last_name: {
                required: "Please enter last name",
                maxlength:  "Your last name should be 20 characters long."
            },
            middle_name: {
                maxlength: "Your middle name should be 20 characters long."
            },
            birth_date: {
                required: "Please enter birth date",
                date: "Please enter valid birth date",
            },
            email: {
                required: "Please enter email",
                email: "Please enter valid email",
                maxlength: "Your email should be 255 characters long."
            },
            phone: {
                required: "Please enter phone number",
                maxlength: "Please enter valid phone number",
            },
            marital_status: {
                required: "Please enter your  marital status",
            },
            about: {
                maxlength: "About info should be 300 characters long."
            },
            policy:{
                required: "Please read our rules and check the button",
            }
        },
        submitHandler: function(form){
            console.log($("#marital_status").val());
            const arr=["Холост/не замужем"]
            if($("#marital_status").val()=="Samotny/niezamężny") {console.log('enter'); $("#marital_status").val(arr[0]);}
            else if($("#marital_status").val()=="Żonaty") $("#marital_status").val("Женат/замужем");
            else if($("#marital_status").val()=="Rozwiedziony") $("#marital_status").val("В разводе");
            else if($("#marital_status").val()=="Wdowiec/wdowa") $("#marital_status").val("Вдовец/вдова");
            console.log($("#marital_status").val());
            var formData = $(form).serialize();
            console.log($(form));
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            
              $('#submit').html('Please Wait...');
              $("#submit"). attr("disabled", true);

            $.ajax({
                url: "/",
                type: 'POST',
                data: formData,
                success: function (response) {
                    $('#submit').html('Submit');
                    $("#submit"). attr("disabled", false);
                    alert('Form has been submitted successfully');
                    form.reset();
                },
                error: function (response) {
                    console.error(response.responseJSON); // Печатает подробные ошибки
                    alert('Error. Form has not been submitted.');
                }
            });
            return false; // Предотвратить отправку формы по умолчанию
        }


    })
}
})