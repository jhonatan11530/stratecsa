jQuery( document ).ready( function () {


    $( 'button[data-loading-text]' )
        .on( 'click', function () {
            var btn = $( this );
            btn.button( 'loading' );
            setTimeout( function () {
                btn.button( 'reset' );
            }, 3000 );
        } );


    $( '#contactform' ).submit( function () {

        var action = $( this ).attr( 'action' );

        $( "#errormessage" ).slideUp( 750, function () {
            $( '#errormessage' ).hide();
            $.post( action, {
                name: $( '#name' ).val(),
                email: $( '#email' ).val(),
                phone: $( '#phone' ).val(),
                message: $( '#message' ).val()
            },
            function ( data ) {
                    document.getElementById( 'errormessage' ).innerHTML = data;
                    $( '#errormessage' ).slideDown( 'slow' );
                $( '#submit' ).removeAttr( 'disabled' );
                if ( data.match( 'success' ) != null )
                    $( '#contactform' ).slideUp( 'slow' );

            }
            );

        } );

        return false;

    } );
    $( '#quoteform' ).submit( function () {

        var action = $( this ).attr( 'action' );

        $( "#quote-error" ).slideUp( 750, function () {
            $( '#quote-error' ).hide();
            $.post( action, {
                name: $( '#name' ).val(),
                email: $( '#email' ).val(),
                shipform: $( '#shipform' ).val(),
                shipform: $( '#shipform' ).val(),
                shipto: $( '#shipto' ).val(),
                message: $( '#message' ).val()
            },
            function ( data ) {
                document.getElementById( 'quote-error' ).innerHTML = data;
                $( '#quote-error' ).slideDown( 'slow' );
                $( '#submit' ).removeAttr( 'disabled' );
                if ( data.match( 'success' ) != null )
                    $( '#quoteform' ).slideUp( 'slow' );

            } );

        } );

        return false;

    } );



} );