$(document).ready(function() {
    checksSession();
}); 

function checkSession() {
    //Checks the sesh
    $.get("php/data/get_user_session.php", {}, function(response) {
        
        let rsp = JSON.parse(response);
        if(rsp.success) {
            //You twin, i know u
            
        }else {
            //nigga who are you
            location.replace("index.html")
        }
        
    });
}