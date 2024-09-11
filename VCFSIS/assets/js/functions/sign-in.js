$(document).ready(function() {
    $('#sign-in-form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: 'POST',
            url: 'assets/php/functions/sign-in.php',
            data: form.serialize(),
            success: function(data) {
                console.log(data);
                var result = JSON.parse(data);
                showSweetAlert("Success!", result.message, result.status, 2000);
                clearForm('sign-in-form');
            },
            error: function(data) {
                var result = JSON.parse(data);
                showSweetAlert("Error!", result.message, result.status, 2000);
                clearForm('sign-in-form');
            }
        });
    });
});