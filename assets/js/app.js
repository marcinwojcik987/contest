



 $(document).ready(function() {
     var max_fields      = 10; //maximum input boxes allowed
     var max_fields_hobby      = 5; //maximum input boxes allowed
     var max_fields_brand      = 10; //maximum input boxes allowed
     var wrapper         = $(".input_fields_wrap"); //Fields wrapper
     var wrapper_hobby         = $(".input_hobby_wrap"); //Fields wrapper
     var wrapper_brand         = $(".input_brand_wrap"); //Fields wrapper
     var add_button      = $(".add_field_button"); //Add button ID
     var add_button_hobby      = $(".add_field_button_hobby"); //Add button ID
     var add_button_brand      = $(".add_field_button_brand"); //Add button ID

     var x = 1; //initlal text box count
     $(add_button).click(function(e){ //on add input button click
         e.preventDefault();
         if(x < max_fields){ //max input box allowed
             x++; //text box increment
             $(wrapper).append('<div class="remove_input"><input type="text" name="inspirations[]"/><a href="#" class="remove_field"><img src="/assets/img/icon-minus.png"></a></div>'); //add input box
         }
     });
     var y = 1; //initlal text box count
     $(add_button_hobby).click(function(e){ //on add input button click
         e.preventDefault();
         if(y < max_fields_hobby){ //max input box allowed
             y++; //text box increment
             $(wrapper_hobby).append('<div class="remove_input_hobby"><input type="text" name="hobby[]"/><a href="#" class="remove_field_hobby"><img src="/assets/img/icon-minus.png"></a></div>'); //add input box
         }
     });
     var z = 1; //initlal text box count
     $(add_button_brand).click(function(e){ //on add input button click
         e.preventDefault();
         if(z < max_fields_brand){ //max input box allowed
             z++; //text box increment
             $(wrapper_brand).append('<div class="remove_input_brand"><input type="text" name="brand[]"/><a href="#" class="remove_field_brand"><img src="/assets/img/icon-minus.png"></a></div>'); //add input box
         }
     });


     //changing radiobuttons and stuff
     $('input').iCheck({
         checkboxClass: 'icheckbox_square-red',
         radioClass: 'iradio_square-red',
         increaseArea: '20%' // optional
     });

     $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
         e.preventDefault(); $(this).parent('div').fadeOut("slow"); x--;
     });
     $(wrapper_hobby).on("click",".remove_field_hobby", function(e){ //user click on remove text
         e.preventDefault(); $(this).parent('div').fadeOut("slow"); y--;
     });
     $(wrapper_brand).on("click",".remove_field_brand", function(e){ //user click on remove text
         e.preventDefault(); $(this).parent('div').fadeOut("slow"); z--;
     });

    //scroller
     $('#report-btn').click(function() {

         $.scrollTo($('#content'), 1000);
     });

     $('#scroll-down').append("<img src='/assets/img/scroll-down.png'/>");

     $('#scroll-down').click(function() {

         $.scrollTo($('#content'), 1000);
     });

     $('#nav_header').click(function() {

         $.scrollTo($('#header'), 1000);
     });
     $('#nav_content').click(function() {

         $.scrollTo($('#content'), 1000);
     });
     $('#nav_contact').click(function() {

         $.scrollTo($('#contact'), 1000);
     });


     $(".checkbox").click(function(){
         $(this).toggleClass('checked')
     });


     $.validator.addMethod("valueNotEquals", function(value, element, arg){
         return arg !== value;
     }, "Value must not equal arg.");
     //validating
     $(function() {
         // Initialize form validation on the registration form.
         // It has the name attribute "registration"
         $("#form").validate({
             // Specify validation rules

             errorElement: 'div',
             rules: {
                 // The key name on the left side is the name attribute
                 // of an input field. Validation rules are defined
                 // on the right side

                 name: "required",
                 surname: "required",
                 email: {
                     required: true,
                     email: true
                 },
                 birthdate: {
                     required: true,
                     date: true
                 },
                 password: {
                     required: true,
                     minlength: 5
                 },
                 youtube: {
                     url: true
                 },
                 description: {
                     required: true
                 },
                 social_facebook: {
                     url: true,
                     require_from_group: [1, ".social_group"]
                 },
                 social_instagram: {
                     url: true,
                     require_from_group: [1, ".social_group"]
                 },
                 social_youtube: {
                     url: true,
                     require_from_group: [1, ".social_group"]
                 },
                 social_blog: {
                     url: true,
                     require_from_group: [1, ".social_group"]
                 },
                 start_year: {
                     valueNotEquals: "default"
                 },
                 phone_model: {
                     valueNotEquals: "default"
                 },
                 conditions: {
                     required: true,
                     minlength: 2
                 }
             },
             // Specify validation error messages
             messages: {
                 description: "* wypełnij pole",
                 name: "* podaj imię",
                 surname: "* podaj nazwisko",
                 password: {
                     required: "Please provide a password",
                     minlength: "Your password must be at least 5 characters long"
                 },
                 email: "* podany adres e-mail jest nieprawidłowy",
                 youtube: "* podaj prawidłowy adres URL",
                 birthdate: "* uzupełnij datę urodzenia",
                 social_facebook: {
                     url: "* podaj prawidłowy adres URL",
                     require_from_group: "* musisz podać przynajmniej jedną swoją stronę lub portal społecznościowy"
                 },
                 social_instagram: {
                     url: "* podaj prawidłowy adres URL",
                     require_from_group: "* musisz podać przynajmniej jedną swoją stronę lub portal społecznościowy"
                 },
                 social_youtube: {
                     url: "* podaj prawidłowy adres URL",
                     require_from_group: "* musisz podać przynajmniej jedną swoją stronę lub portal społecznościowy"
                 },
                 social_blog: {
                     url: "* podaj prawidłowy adres URL",
                     require_from_group: "* musisz podać przynajmniej jedną swoją stronę lub portal społecznościowy"
                 },
                 start_year: {
                     valueNotEquals: "* podaj rok rozpoczęcia działalności"
                 },
                 phone_model: {
                     valueNotEquals: "* podaj model telefonu"
                 },
                 conditions: {
                     required: "* zaznaczenie zgody jest wymagane",
                     minlength: "* musisz zaznaczyć dwa"
                 }


             },
             // Make sure the form is submitted to the destination defined
             // in the "action" attribute of the form when valid
             submitHandler: function(form) {
                 form.submit();
             }


         });
     });




//resizing content through textarea
     $('#textarea').on('keydown', function(e){
         var that = $(this);
         if (that.scrollTop()) {
             $(this).height(function(i,h){
                 return h + 20;
             });
         }
     });

     //counter in textarea
     $('#textarea').keyup(function () {
         var max = 250;
         var len = $(this).val().length;
         if (len >= max) {
             $('.chars-limit').text('Pozostało znaków: 0');
         } else {
             var char = max - len;
             $('.chars-limit').text('Pozostało znaków: ' + char);
         }
     });

     $(".form").on('submit',(function(e) {
         e.preventDefault();
         $.ajax({
             url: "index.php",
             type: "POST",
             data:  new FormData(this),
             contentType: false,
             cache: false,
             processData:false,
             beforeSend : function()
             {
                 //$("#preview").fadeOut();
                 $("#err").fadeOut();
             },
             success: function(data)
             {
                 if(data=='invalid file')
                 {
                     // invalid file format.
                     $(".error-file").html("Invalid File !").fadeIn();
                 }
                 else
                 {
                     // view uploaded file.
                     $("#preview").html(data).fadeIn();
                     $(".form")[0].reset();
                 }
             },
             error: function(e)
             {
                 $(".error-file").html(e).fadeIn();
             }
         });
     }));


     // $(function() {
     //     $('#form').submit(function() {
     //         $.ajax({
     //             type: "POST",
     //             url: $(this).attr('action'),
     //             data: $(this).serialize(),
     //             success: function() {
     //                 $(".content").html(
     //                     "<h1>Dziękujemy za przesłanie zgłoszenia.</h1>" +
     //                     "<h2>Uprzejmie informujemy, że skontaktujemy się tylko z wybranymi osobami.</h2>");
     //             }
     //         });
     //         return false;
     //     });
     // });

 });


