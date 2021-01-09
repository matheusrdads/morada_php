function valida_contato() {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let mensagem = document.getElementById('mensagem').value;

    console.log(nome, email, telefone, mensagem);

    if(nome.length > 0 && email.length > 0 && telefone.length > 0 && mensagem.length > 0) {
        document.getElementById("enviar_mensagem").style.visibility = "initial";
    }
    else {
        document.getElementById("enviar_mensagem").style.visibility = "hidden";
    }
}
