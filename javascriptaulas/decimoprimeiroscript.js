var canvas = document.getElementById("artes");

var ctx = canvas.getContext('2d');

var x = 20;

var y = 20;

var altura = 100;

var largura =100;

ctx.fillStyle = "orange"

ctx.fillRect(x, y, largura, altura)

//ctx.fillStyle = "rgba(0,0,200,0.5"  caso queira deixar a imagem transparente se utiliza está função.

ctx.fillStyle = "green"
ctx.fillRect(20, 30, 100,100)


ctx.beginPath();


ctx.arc(150, 150, 50, 0, Math.PI*2);
ctx.stroke();

