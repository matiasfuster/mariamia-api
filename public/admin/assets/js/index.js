function login() {
 
    var username = $('#email').val();
    var password = $('#password').val();

    if (username == "" || password == "")
    {
        $('#alert').html("Debe completar todos los campos").show();
    } 
    else
    {
        var getLogin = false;
        $.post("http://api.mariamia.com.uy/oauth",
                {
                    username: username,
                    password: password,
                    grant_type: "password",
                    client_id: "web"
                },
                function (data, status) {
                    console.log(status);
                    if(data.access_token != ""){
                        getLogin = true;
                        console.log("Credenciales correctas");
                        alert("Credenciales correctas");
                    }                  
                });
        if(getLogin == true){
            console.log("user logueado");
        }
    }
}


