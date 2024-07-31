function checkResolution() {
    if (window.innerWidth > 600) {
        document.body.classList.add('blocked');
        document.body.innerHTML = '<h1>Este site não está disponível para resoluções superiores a 600px de largura.</h1>';
    }
}

window.onload = checkResolution;
window.onresize = checkResolution;