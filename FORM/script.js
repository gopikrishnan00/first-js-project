const form =document.querySelector('#form');
const username =document.querySelector('#usarname');
const email =document.querySelector('#email');
const password =document.querySelector('#password');
const cpassword =document.querySelector('#cpassword');
 

   form.addEventListener('submit',(e)=>{
   e.preventDefault();
   validateInputs();
   })  


function validateInputs(){
    const usernameVal = username.value.trim();
    const emailVal = email.value.trim();
    const passwordVal = password.value.trim();
    const cpasswordVal = cpassword.value.trim();    

   if(usernameVal===''){
    setError(username,'username is required')
   }
   else{
    setsuccess(username)
   }

   if(emailVal===''){
    setError(email,'email is required')
   }
   else if(!validateEmail(emailVal)){
    setError(email,'please enter a valid email')
   }
   else{
    setsuccess(email)
   }

   if(passwordVal===''){
    setError(password,'password is required')
   }
   else if(passwordVal.length<8){
    setError(password,'password must be atleast 8 characters long')
   }
   else{
    setsuccess(password)
   }
   
   if(cpasswordVal===''){
    setError(cpassword,'confirm password is required')
   }
   else if(cpasswordVal!==passwordVal){
    setError(cpassword,'password does not match')
   }
   else{
    setsuccess(cpassword)
   }

}

//  example; element - password,msg - pwd is reqd
function setError(element,mseeage){ 
    const inputGroup =element.parentElement;
    const errorElement = inputGroup.querySelector(".error");

    errorElement.innerText = message;
    inputGroup.classList.add("error")
    inputGroup.classList.remove("success")  
}

function setsuccess(element){ 
    const inputGroup =element.parentElement;
    const errorElement = inputGroup.querySelector(".error");

    errorElement.innerText = "";
    iputGroup.classList.add("success")
    inputGroup.classList.remove("error") 

}

const validateEmail = (email) => {
    return String(email)
    .toLowerCase()
    .match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

}