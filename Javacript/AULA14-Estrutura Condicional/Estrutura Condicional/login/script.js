function verificarLogin() {
        let usuario = document.querySelector('#usuario').value
        let senha = parseFloat(document.querySelector('#senha').value)
        let confirmacao = document.querySelector('confirmacao')
        

        if (usuario === 'admin' && senha === 1234) {
                mensagem.innerHTML = 'Login aprovado'
        }

        else if (senha <= 0 || isNaN(usuario)) {
                mensagem.innerHTML = 'Por favor informe um usuario e senha validos'
        }
        else if (isNaN(usuario) || isNaN(senha)) {
                mensagem.innerHTML = 'Por favor informe um usuario e senha validos'
        }

}