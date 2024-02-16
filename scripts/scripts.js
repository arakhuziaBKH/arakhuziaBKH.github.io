$(document).ready(function(){

    $("#contactMe").on("click", function(e){
        Notification.requestPermission().then(permissions => {
            if (permission === "granted"){
                new Notification($("#contactMe").text());
            }
        });
    });

});