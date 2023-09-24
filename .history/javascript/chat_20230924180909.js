const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button");


form.onsubmit = (e) => {
    e.preventDefault();
}
sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // let data = xhr.response;
            inputField.value = "";
        }
    }

    let formData = new FormData(form)
    xhr.send(formData)
}
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = xhr.response;
            if (!searchBar.classList.contains("active")) {
                usersList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);
