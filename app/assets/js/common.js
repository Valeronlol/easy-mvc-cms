$( document ).ready(function() {

    /**
     * frontend form validation
     */
    $('#contactForm').on( 'submit', function (e) {

        var minCount = 6; // you can chose min count of symbols

        var form = {
            login : $(this).find('input[name="login"]').val(),
            password: $(this).find('input[name="password"]').val()
        };

        $.each( form, function( key, inputValue ) {
            if ( inputValue.length < minCount ) {
                var errorTarget = $('#contactForm').find('input[name="' + key + '"]');
                var errorBlock = errorTarget.siblings('.help-block').fadeIn();
                errorBlock.html('').html( 'Count of symbols must be at least ' + minCount );
                e.preventDefault();
            }
        });
    });

    /**
     * show password handler
     */
    $('#password').hidePassword(true);

});