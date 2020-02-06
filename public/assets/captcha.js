

var onloadCallback = function() {
    grecaptcha.render();
    alert("grecaptcha is ready!");
};

function backend_API_challenge(){
    var reponse = grecaptcha.getResponse();

    $.ajax({
        type: "POST",
        url: 'https://www.google.com/recaptcha/api/siteverify',
        data: {"secret" : "6LcNR9YUAAAAANj9aeQhzcPHWc8pxjYlkQ63lhBy", "response" : response, "remoteip":"localhost"},
        contentType: 'application/x-www-form-urlencoded',
        success: function(data) { console.log(data); }
    });
}

