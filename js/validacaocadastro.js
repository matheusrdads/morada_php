function valida_cadastro() {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('emailcadastro').value;
    let senha = document.getElementById('senhacadastro').value;

    if(nome.length > 0 && email.length > 0 && senha.length > 0) {
        document.getElementById("cadastro").style.visibility = "initial";
    }
    else {
        document.getElementById("cadastro").style.visibility = "hidden";
    }
}