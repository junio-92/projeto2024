/// AJAX ///

let xhr = new XMLHttpRequest();



let i = 0;

let doc = {
    "userId":1,
    "title":"Olá",
    "body":"Olá Junio Dias "

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

/*
200 (tudo ok).
401 (acesso não autorizado).
403 (acesso proibido).
404 (page not found: página não encontrada).
500 (erro interno no servidor)
/*