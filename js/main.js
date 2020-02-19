


$(document).ready(function () {
    if(window.location.href.indexOf("about") > -1) {
		$( '.navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
		$( '#about' ).parent( 'li' ).addClass( 'active' );
    }
});


