function valida_login() {
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;

    if(email.length > 0 && senha.length > 0) {
        document.getElementById("login").style.visibility = "initial";
    }
    else {
        document.getElementById("login").style.visibility = "hidden";
    }
}