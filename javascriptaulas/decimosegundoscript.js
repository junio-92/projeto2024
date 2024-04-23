//// ANIMAÇÃO /////

let canvas = document.getElementById("andar");
let ctz = canvas.getContext('2d');


// Configurações //

let x = 0;
let y = 0;

let largura = 100;
let altura = 100;

/// Animação ///



function animado(){
    ctz.clearRect(0, 0, canvas.width,canvas.heigth)
    ctz.fillRect(x, y, largura, altura++)

}

setInterval(animado, 10)

