$(document).ready(function(){
    
    //Login submit listener
    $("#login_id").submit(function(e){
        e.preventDefault();
        login();
    })
    
});

function login() {
    
    let data = $("#login_id").serialize();
    $.post("php/ac/login.php", data, function(response) {
        let rsp = JSON.parse(response);
        if(rsp.success){
            location.replace("home.html");
        }else {
            alert("WHO THE FUCK ARE YOU NIGGA");
        }
    });
}