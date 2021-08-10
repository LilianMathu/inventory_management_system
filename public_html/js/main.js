$(document).ready(function () {
    $("#registration_form").on("submit", function () {
        var status = false;
        var name = $("#username");
        var email = $("#email");
        var pass1 = $("#password1");
        var pass2 = $("#password2");
        var type = $("#userType");
        
        // var u_patt = new RegExp(/^[A-Za-z ]+$/);

        // lily@mail.com
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

        if (name.val() == "" || name.val().length < 2) {
            name.addClass("border-danger");
            $("#u_error").html("<span class='text-danger'>Please enter name and name should be more than 2 characters</span>");
            status = false;
        } else {
            name.removeClass("border-danger");
            $("#u_error").html("");
            status = true;
        }

        

    })
});