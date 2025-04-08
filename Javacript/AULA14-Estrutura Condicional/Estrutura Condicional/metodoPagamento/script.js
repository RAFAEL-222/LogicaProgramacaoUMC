//SWITCH CASE - MENU
//if 

//MEDTODOS DE PAGAMENTO
// 1 - PIX - 10% DE DESCONTO
// 2 - DEBITO - 5% DE DESCONTO
// 3 - CREDITO - VALOR TOTAL

function calcularPagamento() {

        let formaPagamento = document.querySelector('#formaPagamento').value
        let valorTotal = parseFloat(document.querySelector('#valorCompra').value)
        let resultado = document.querySelector('#resultado')
        let valorFinal

        if (valorTotal <= 0 || isNaN(valorTotal)) {
                resultado.innerHTML = 'Por favor informe um valor valido'
        }
        else {

                switch (formaPagamento) {
                        case 'pix':
                                valorFinal = valorTotal * 0.9
                                resultado.innerHTML = ` Valor final foi de R$ ${valorFinal.toFixed(2)}`;
                                break
                        case 'debito':
                                valorFinal = valorTotal * 0.95
                                resultado.innerHTML = ` Valor final foi de R$ ${valorFinal.toFixed(2)}`;
                                break
                        case 'credito':
                                resultado.innerHTML = ` Valor final foi de R$ ${valorTotal.toFixed(2)}`;
                                break
                        default:
                                console.log('Informe uma forma de pagamento valida');
                                break
                }
        }

}