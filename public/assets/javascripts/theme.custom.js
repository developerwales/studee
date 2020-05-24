$('document').ready(function() {

    //fetch maxChars from data-max-chars attribute and add tag input functionality

    $( ".inputTag" ).each(function() {
        let maxChars;
        maxChars = $(this).attr("data-max-chars");
        $(this).tagsinput({
            maxChars: maxChars
        });

    });

    //Create Customer Message For MaxLength to avoid duplication of messages

    $.validator.messages.maxlength = function (param, input) {
        let inputLongName =  $('#' + input.name).attr("data-field");
        return 'A maximum of  ' + param + ' characters for ' + inputLongName + ' is allowed';
    };


    //Validate Form
     $( "#country_search_form" ).validate({
        rules:{
            lang:  { maxlength:2},
            currency:{maxlength:3}
        },
        messages: {},
        errorLabelContainer: "#messageBox",
        wrapper: "li",

        submitHandler: function (form) {

            let hasContent  = false;

            $( "form input.input-group" ).each(function( index ) {
                if ($.trim($( this ).val())) {
                    hasContent = true;
                }
            });

            // TEST MESSAGES FOR FOR SUBMIT
            if (hasContent){
                alert('TEST FORM WOULD HAVE BEEN SUBMITTED');
            }else{
                alert('At least one field has to be filled in');
            }

        }

    });



});

