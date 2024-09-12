let email = document.getElementById("exampleInputEmail1")


let senha = document.getElementById("exampleCheck1")
let botao = document.getElementById("logar")


botao.addEventListener("click", function() {
    
    if (email.value != "otavio.silva1661@gmail.com" && senha.value != "12345678") {
        alert ("email ou senha errado")
        return
    } else {
        window.location.href = 'pagina-principal.html'
    }

})

// function Enviar() {

//     if (email.value != "otavio.silva1661@gmail.com" && senha.value != "12345678") {
//         alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
//     }

// }

logar