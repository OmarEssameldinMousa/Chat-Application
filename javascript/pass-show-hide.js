const pswrdField = document.querySelector(".form .field input[type='password']"), toggleBtn = document.querySelector(".form .field i");

//used to show password and hide password
toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
        pswrdField.type = "text";
        toggleBtn.classList.add("active")
    }
    else {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active")
    }
}