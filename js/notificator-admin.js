(function( $ ) {
	'use strict';

    $(function() {
        $('.multi-select').multiSelect();
        $('#select-all').click(function(){
            $('.multi-select').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function(){
            $('.multi-select').multiSelect('deselect_all');
            return false;
        });
    });

})( jQuery );
