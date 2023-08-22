$(document).ready(function() {

    $('.eform').keyup(function(e) {

        var email = $('.eform').val();
        //
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                "check_submit_btn": 1,
                "email_id": email,
            },
            success: function(response) {
                $("#emailError").text(response);
            }
        });
    });

});