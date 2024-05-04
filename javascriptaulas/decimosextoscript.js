function buscarCEP() {

  //Entrada

  let entrada=document.getElementById('buscar_cep').value;

  //Saída

  let cep = document.getElementById('cep');
  let logradouro =document.getElementById('logradouro');
  let bairro = document.getElementById('bairro');
  let cidade = document.getElementById('cidade');
  let estado = document.getElementById('estado');

  // Criar objeto xhr

  let xhr = new XMLHttpRequest();
  xhr.responseType = "json";

  //Envia requisição

  xhr.open("GET", "https://viacep.com.br/ws/"+entrada+"/json/");
  xhr.send();

  //Verifica se o estado da conecxão mudou

  xhr.onreadystatechange = ()=>{

    if (xhr.readyState == 4 && xhr.status == 200) {

      //Mostra resultado da tela

      console.log(xhr.response);

      //Grava valores

      cep.innerText = xhr.response.cep;
      logradouro.innerText = xhr.response.logradouro;
      bairro.innerText = xhr.response.bairro;
      cidade.innerText = xhr.response.localidade;
      estado.innerText = xhr.response.uf
      
    }
  }


  
}