$(document).ready(function () {
    $("#registration_form").on("submit", function () {
        var name = $("#username");
        var email = $("#email");
        var pass1 = $("#password1");
        var pass2 = $("#password2");
        var type = $("#userType");
        
        var u_patt = new RegExp(/^[A-Za-z ]+$/);

        // lily@mail.com
        var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

    })
});