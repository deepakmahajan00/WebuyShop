/**
 * Created by abc on 12/13/2016.
 */

$(document).on('click','button',function(){
    $.ajax('{{ path("add_cart") }}', {
        data: {
            'product' : 1
        },
        success: function(data) {
            // change button color
            alert('in sucess');
        },
        error: function() {
            // show alert or something
            alert('in error');
        }
    });
    return false; // this stops normal button behaviour from executing;

});
