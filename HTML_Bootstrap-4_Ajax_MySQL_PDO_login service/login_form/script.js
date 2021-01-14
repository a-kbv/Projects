$(document).ready(function() {
    $("#login").on('click', function() {
        var email = $("#email").val();
        var password = $("#password").val();

        if(email == "" || password == "")
            alert("Please check your inputs");
        else {
            $.ajax(
                {
                url: 'login.php',
                method: 'POST',
                data :{
                    login: 1,
                    emailPHP: email,
                    passwordPHP: password
                },
                success: function(response){
                    // console.log(response);
                    $("#response").html(response);
                    $("#cform")[0].reset();
                },
                error: function(e) {
                    console.log(e);
                },
                dataType: 'text'
             }
            );
        }
    });  
});