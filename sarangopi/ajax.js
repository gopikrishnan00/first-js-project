$(document).ready(function () {
    $(".submit-myform").submit(function (event) {
        event.preventDefault();

        var Formdata = {
            email: $('.e-mail').val(),
            password: $('.password').val()
        }; 

        $.ajax({
            url: 'data.php',
            method: 'post',
            data: Formdata,
            datatype: 'JSON',
            success: function (response) {
                alert(response.message);
                if(response.success){
                window.location.href = "profile.html";
                }
            }
        }).done(function () {
              console.log("ajax call completed");
              // window.location.href = "profile.html"
        });  
    });
});