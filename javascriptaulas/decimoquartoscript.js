/// AJAX ///

let xhr = new XMLHttpRequest();



let i = 0;

var doc = {
    "userId":1,
    "title":"Olá",
    "body":"Olá Junio Dias de Oliveira"

}

xhr.onreadystatechange = ()=>{
    let pronto = xhr.readyState;
    let estado = xhr.status;
    let resposta = xhr.response;

    i++;

    console.log("#", i)
    console.log("Status de conexão:", pronto);
    console.log("Código de resposta:", estado);
    console.log(resposta);
}



xhr.open("POST", "https://jsonplaceholder.typicode.com/posts");
xhr.send(doc);