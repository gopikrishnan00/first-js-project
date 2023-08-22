$(document).ready(function () {
    $(".submit-form").submit(function (event) {
        event.preventDefault();

        var formData = {
            fname: $('.f-name').val(),
            lname: $('.l-name').val(),
            email: $('.e-mail').val(),
            password: $('.password').val(),
            number: $('.mobile').val()
        };

        
        $.ajax({
            url: "data1.php",
            method: "post",
            data: formData,
            dataType: "JSON",
            success: function (response) {
                alert(response.message);
                if (response.success) {
                    window.location.href = "index.html";
                }
            }
        }).done(function () {
            console.log("ajax1 completed");
        });       
    });
});
