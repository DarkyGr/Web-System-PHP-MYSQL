// Function for Validate user in Login
function ValidateUser() {
    email = $('#user-email').val();
    key = $('#user-password').val();    

    parameters ={
        "email":email, "key_u":key
    }

    $.ajax({
        data:parameters,
        type:'POST',
        url:'controller/UserController.php?operator=sing_in',
        beforeSend:function(){},
        success:function(response){
            if (response == "success") {
                location.href="pages/welcome.php";
            }else if (response == "notfound") {
                msg = '<div class="alert alert-danger mb-2" role="alert"><strong> Ups! </strong>' + 
                'Credentials are not correct. </div>';
            }else if (response == "required") {
                msg = '<div class="alert alert-danger mb-2" role="alert"><strong> Ups! </strong>' + 
                'Fill in the fields. </div>';
            }
            $('#status_login').html(msg);
            CleanController();
        }
    });
}

// Function for Clean Form of Login
function CleanController() {
    $("#user-email").val("");
    $("#user-password").val("");
}