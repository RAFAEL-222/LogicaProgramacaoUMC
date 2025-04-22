let produtos = [
        {nome: 'Teclado', categoria: 'Periferico', preco: 200},
        {nome: 'Mouse', categoria: 'Periferico', preco: 150},
        {nome: 'Computador', categoria: 'Eletronico', preco: 5000},
        {nome: 'Monitor', categoria: 'Eletronico', preco: 750},
]


//Lista de Produtos
//Percorrer um ARRAY com objetos
produtos.forEach((produto => {
        console.log(`${produto.nome} - R$ ${produto.preco}`);
}))
//produto - Valor
//Teclado - R$ 200


//Fazer calculos de itens dentro de um ARRAY
const total = produtos.reduce((soma, produto) => soma + produto.preco, 0)
console.log(`O valor total de todos os produtos e R$ ${total}.`);


//Ofertando desconto MAP
const produtosComDesconto = produtos.map( produto => ({
        nome: produto.nome,
        preco: produto.preco * 0.9
}))
console.log(produtosComDesconto);


//Filtrando itens
const produtosEletronico = produtos.filter(produtos => produtos.categoria === 'Periferico')
console.log(produtosEletronico);


//Periferico -5% - somar tudo
//Eletronico - 10% - somar tudo

//1 Criar um filtro por categoria - filter
//2 Aplicar o desconto por tipo categoria - map
//3 Soma todos os produtos por categoria - reduce

console.log(`Produtos Eletronicos`);
//1 Criar um filtro por categoria - filter
const produtosEletronicos = produtos.filter(produto => produto.categoria === 'Eletronico')

//2 Aplicar o desconto por tipo categoria - map
const produtosEletronicosDesconto = produtosEletronicos.map(produto => ({
        nome: produto.nome,
        categoria:produto.categoria,
        preco: produto.preco * 0.95
}))

//3 Soma todos os produtos por categoria - reduce
const somaProdutosEletronicosDesconto = produtosEletronicosDesconto.reduce((soma, produto) => soma + produto.preco,0)

//Valor Produtos Eletronicos
console.log(produtosEletronicosDesconto);
console.log('R$' ,somaProdutosEletronicosDesconto);
//---------------------------------------------------------//


console.log(produtosPerifericos);
const produtosPerifericos = produtos.filter(produto => produto.categoria === 'Perifericos')
// Aplicar o desconto por tipo categoria - map
const produtosPerifericosDesconto = produtosPerifericos.map(produto => ({
        nome: produto.nome,
        categoria:produto.categoria,
        preco: produto.preco * 0.
}))

// Soma todos os produtos por categoria - reduce
const somaProdutosPerifericosDesconto = produtosPerifericosDesconto.reduce((soma, produto) => soma + produto.preco,0)

//Valor Produtos Eletronicos
console.log(produtosPerifericosDesconto);
console.log('R$' ,somaProdutosPerifericosDesconto);

