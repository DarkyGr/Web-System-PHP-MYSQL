function ValidateUser() {
    email = $('#user-email').val();
    key = $('#user-password').val();

    parameters ={
        "email":email, "key_u":key
    }

    $.ajax({
        data:parameters,
        type:'POST',
        url:'controller/UserController.php?operator=validate_user',
        beforeSend:function(){},
        success:function(response){
            if (response == "success") {
                location.href="pages/welcome.php";
            }else if (response == "not found") {
                
            }else if (respone == "required") {
                
            }
        }
    });
}