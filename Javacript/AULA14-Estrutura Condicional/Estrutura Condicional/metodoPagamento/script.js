//SWITCH CASE - MENU
//if 

//MEDTODOS DE PAGAMENTO
// 1 - PIX - 10% DE DESCONTO
// 2 - DEBITO - 5% DE DESCONTO
// 3 - CREDITO - VALOR TOTAL

function name(params) {
        

let formaPagamento = 'cheque'
let valorTotal = 100
let valorFinal

switch (formaPagamento){
        case 'pix':
                valorFinal = valorTotal * 0.9
                console.log(valorFinal);
                break
        case 'debito':
                valorFinal = valorTotal * 0.95
                console.log(valorTotal);
                break
        case 'credito':
                console.log(valorTotal);
                break
        default:
                console.log('Informe uma forma de pagamento valida');
                break
}

}