const pswrdField = document.querySelector(".form .field input[type='password]"), toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
        pswrdField.type = "text";
    }
}