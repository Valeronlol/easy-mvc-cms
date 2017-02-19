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
     * register form validation
     */
    $('#register').on( 'submit', function (e) {

        var minCount = 6; // you can chose min count of symbols

        var form = {
            login : $(this).find('input[name="login"]').val(),
            f_name : $(this).find('input[name="f_name"]').val(),
            l_name : $(this).find('input[name="l_name"]').val(),
            password: $(this).find('input[name="password"]').val()
        };

        $.each( $(this).find('.help-block'), function (key, val) {
            $(val).empty();
        });

        $.each( form, function( key, inputValue ) {
            if ( inputValue.length < minCount ) {
                var errorTarget = $('#register').find('input[name="' + key + '"]');
                var errorBlock = errorTarget.parents('.form-group').find('.help-block').fadeIn();
                errorBlock.html( 'Count of symbols must be at least ' + minCount );
                e.preventDefault();
            }
        });

    });

    /**
     * show password handler
     */
    $('#password').hidePassword(true);

});