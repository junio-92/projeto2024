/// AJAX ///

let xhr = new XMLHttpRequest();

xhr.open("GET", "https://jsonplaceholder.typicode.com/todos");
xhr.send();

let i = 0;

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