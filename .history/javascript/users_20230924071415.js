const searchBar = document.querySelector(".users .search input"),
    searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let data = xhr.response;
            console.log(data);
        }
    }

}, 500)