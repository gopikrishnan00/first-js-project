function vfun1() {
    const fname = document.forms["myform"]["fname"].value;
    const lname = document.forms["myform"]["lname"].value;
    const email = document.forms["myform"]["email"].value;
    const password = document.forms["myform"]["password"].value;
    // const cpassword = document.forms["myform"]["cpassword"].value;
    const number = document.forms["myform"]["number"].value;

    if (email == "" && password == "" && fname == "" && lname == "" && number == ""/*&& cpassword == ""*/) {
        alert("Enter all credentails");
        return false;
    }

    if (fname == "") {
        alert("Enter first name");
        return false;
    }

    if (lname == ""){
        alert("Enter last name");
        return false;
    }

    if (email == "") {
        alert("Enter email address");
        return false;
    }

    if (password == "") {
        alert("Enter password");
        return false;
    }

    // if(cpassword == ""){
    //     alert("Enter confirm password");
    //     return false;
    // }

    // if(password == cpassword){
    //     return true;
    // }

    // if(password != cpassword){
    //     alert("Enter correct confirm password");
    //     return false;
    // }

    if (number == "") {
        alert("Enter mobile number");
        return false;
    }

    if (fname != '' && lname != '' && email != '' && password != '' && number != '') {
        alert("signup successfully");
    }
}