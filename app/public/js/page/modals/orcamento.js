// Abre o modal de Orçamento
document.getElementById("orcamentoButton").onclick = function (event) {
    event.stopPropagation(); // Impede o evento de propagação
    closeAllModalsAndMenus(); // Fecha todos os outros modais e menus
    document.getElementById("orcamentoModal").style.display = "block";
}

// Fecha o modal de Orçamento ao clicar no X
document.getElementById("closeOrcamentoModal").onclick = function (event) {
    event.stopPropagation(); // Impede o evento de propagação
    document.getElementById("orcamentoModal").style.display = "none";
}

// Fecha o modal de Orçamento e outros menus ao clicar fora deles
window.onclick = function (event) {
    if (event.target.id !== "orcamentoButton" && !document.getElementById("orcamentoModal").contains(event.target)) {
        document.getElementById("orcamentoModal").style.display = "none";
    }
    if (event.target.id !== "menuButton" && !document.getElementById("squareMenu").contains(event.target)) {
        document.getElementById("squareMenu").classList.remove("show");
    }
    if (event.target.id !== "bookmarksButton" && !document.getElementById("bookmarksMenu").contains(event.target)) {
        document.getElementById("bookmarksMenu").classList.remove("show");
    }
}

// Função para fechar todos os modais e menus
function closeAllModalsAndMenus() {
    document.getElementById("orcamentoModal").style.display = "none";
    document.getElementById("squareMenu").classList.remove("show");
    document.getElementById("bookmarksMenu").classList.remove("show");
}
