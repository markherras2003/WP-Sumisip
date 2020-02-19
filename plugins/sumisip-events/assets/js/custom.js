$(document).ready( function($){
    let allowed = $('#current_allowed_ips').val();
    var allowed_arr = allowed.split(",");

    $('.remove-ip-whitelist').click( function (e) {
        let parent = $(this).parent('li');
        let ip_to_remove = $(this).data('ip');

        let temp_allowed = allowed_arr.filter( (element) => {
            return ip_to_remove !== element;
        } )

        allowed_arr = temp_allowed;

        // const f_allowed = allowed_arr.join();
        // console.log( f_allowed );

        $.ajax({
            url: ajax_object.ajaxurl,
            type: 'POST',
            data:{
                action: 'remove_ip_from_whitelist',
                ip_list: allowed_arr,
            },
            success: function( data ){
                console.log( 'IP removed' );
                parent.remove();
            },
            error: function( xhr, status, error ){
                console.log(error)
            }
        });
    } )

});