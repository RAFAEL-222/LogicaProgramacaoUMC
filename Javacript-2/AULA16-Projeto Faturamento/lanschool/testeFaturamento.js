//Seleciona o TR produto
let produtos = document.querySelectorAll('.produto')
console.log(produtos);

for (let i = 0; i < produtos.length; i++){
        //Seleciona os TD que estao no TR produto
        let valorUnitProduto = produtos[i].querySelector('.info-valor-unidade').textContent
        let quantidadeProduto = produtos[i].querySelector('.info-quantidade').textContent
        let valorTotalProduto = produtos[i].querySelector('.info-valor-total')
        
        console.log(valorUnitProduto);
        console.log(quantidadeProduto);
        console.log(valorTotalProduto);
        
        //Excluir o R$
        let valorUnitProdutoLimpo = valorUnitProduto.replace(/R\$\ /, '')
        console.log(valorUnitProdutoLimpo);
        console.log(parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto));
        
        valorTotalProduto.innerHTML = 'R$' + (parseFloat(valorUnitProdutoLimpo) * parseInt(quantidadeProduto)).toFixed(2)
}
        
        
        