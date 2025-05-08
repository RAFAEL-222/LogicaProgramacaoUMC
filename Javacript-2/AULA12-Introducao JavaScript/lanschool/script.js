//getElementsByTagName - Seleciona todas as tag que eu deseje
let paragrafos = document.getElementsByTagName('p') //escolher o q vai ser alterado
paragrafos[0].innerHTML = 'Palmeiras 2 x 0, sem mundial'


//getElementsById - seleciona um elemento do tipo ID
var titulo = document.getElementById('titulo')
titulo.innerHTML = 'Alterado usando JS'

//getElementsByClassName - Seleciona todos os elementos do tipo class
const caixas = document.getElementsByClassName('caixa')
caixas[0].style.backgroundColor = 'red'
caixas[1].style.backgroundColor = 'green'

//querySelecos - Seleciona um elemento do tipo Class ou Id
const paragrafoQuery = document.querySelector('#paragrafoQuery')
paragrafoQuery.style.backgroundColor = 'yellow'
paragrafoQuery.style.padding = '10px'


//1 botao
function alteraTexto() {
        let input = document.getElementsByTagName('input')[0].value
        titulo.innerHTML = input
}
 
//2 botao
function alteraquery() {
        let input = document.getElementsByTagName('input')[1].value
        paragrafoQuery.innerHTML = input
}

//querySelectorAll - Seleciona todos elementos do tipo Class ou Id
const caixaQuery = document.querySelectorAll('.caixaQuery')
caixaQuery[0].style.backgroundColor = 'purple'
caixaQuery[1].style.backgroundColor = 'black'
caixaQuery[1].style.color = 'white'