const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector(".chat-box");


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
            scrollToBottom();
        }
    }

    let formData = new FormData(form)
    xhr.send(formData)
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = xhr.response;
            chatBox.innerHTML = data;
            scrollToBottom();

        }
    }
    let formData = new FormData(form)
    xhr.send(formData)

}, 100);

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight + 20;
}
