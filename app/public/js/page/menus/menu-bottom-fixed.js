document.getElementById("menuButton").onclick = function () {
    var menu = document.getElementById("squareMenu");
    if (menu.classList.contains("show")) {
        menu.classList.remove("show");
    } else {
        menu.classList.add("show");
    }
}

window.onclick = function (event) {
    var menu = document.getElementById("squareMenu");
    if (event.target !== menu && event.target !== document.getElementById("menuButton") && !menu.contains(event.target)) {
        menu.classList.remove("show");
    }
}