/* Abre modal do menu de cadastro */
document.getElementById("menuButton").onclick = function () {
    var menu = document.getElementById("squareMenu");
    if (menu.classList.contains("show")) {
        menu.classList.remove("show");
    } else {
        closeAllModals(); // Fecha outros modais
        menu.classList.add("show");
    }
}

/* Abre modal do menu de FAV */
document.getElementById("bookmarksButton").onclick = function () {
    var menu = document.getElementById("bookmarksMenu");
    if (menu.classList.contains("show")) {
        menu.classList.remove("show");
    } else {
        closeAllModals(); // Fecha outros modais
        menu.classList.add("show");
    }
}

window.onclick = function (event) {
    var squareMenu = document.getElementById("squareMenu");
    var bookmarksMenu = document.getElementById("bookmarksMenu");
    
    if (event.target !== squareMenu && event.target !== document.getElementById("menuButton") && !squareMenu.contains(event.target)) {
        squareMenu.classList.remove("show");
    }

    if (event.target !== bookmarksMenu && event.target !== document.getElementById("bookmarksButton") && !bookmarksMenu.contains(event.target)) {
        bookmarksMenu.classList.remove("show");
    }
}

/* Função para fechar todos os modais */
function closeAllModals() {
    document.getElementById("squareMenu").classList.remove("show");
    document.getElementById("bookmarksMenu").classList.remove("show");
}
