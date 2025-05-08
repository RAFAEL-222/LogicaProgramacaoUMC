//MUDAR A COR DA TELA DE FUNDO
window.document.body.style.background = 'black'

//MUDAR COR DA LETRA
window.document.body.style.color = 'white'

//CRIANDO UM ELEMENTO
window.document.body.innerHTML += '<h1> Brasil x Argentina</h1>'

//EXIBINDO UM ALERTA
window.alert('Olá mundo')

//EXIBINDO UMA TELA ENTRADA DE DADOS
var continuar = window.prompt('Voce deseja continuar ?')
window.alert('continuar')

//EXIBINDO UMA TELA DE CONFIRMACAO
continuar = window.confirm('Voce deseja continuar ?')
window.alert(continuar)