const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button");


sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = xhr.response;
            if (data == "success") {
                location.href = "users.php";
            } else {
                errorText.textContent = data;
                errorText.style.display = "block";
            }

        }
    }

    let formData = new FormData(form)
    xhr.send(formData)
}