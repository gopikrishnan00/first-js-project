function vfun() {
    const email = document.forms["myform"]["email"].value;
    const password = document.forms["myform"]["password"].value;

    if (email == "" && password == "") {
        alert("Enter all credentails");
        return false;
    }

    if (email == "") {
        // document.getElementById("error1").innerHTML = "Enter the email";
        alert("Enter email");
        return false;
    }

    if (password == "") {
        //document.getElementById("error2").innerHTML = "Enter the password";
        alert("Enter Password");
        return false;
    }

    if (email != '' && password != '') {
        alert("Login successfully");
        return true;
    }
    
}