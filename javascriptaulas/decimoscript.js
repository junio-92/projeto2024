///////////// DOM ///////////

var posicao = document.getElementById("titulo");

// getElementByTagName
var paragrafo = document.getElementsByTagName("p")

console.log(paragrafo[1].innerText)


// getElementsByClassName
var escrito = document.getElementsByClassName("escrita");
escrito[1].style.color ="red";

// querySelectorAll

var topo = document.querySelectorAll("#asp")[0];
topo.style.backgroundColor ="yellow";


