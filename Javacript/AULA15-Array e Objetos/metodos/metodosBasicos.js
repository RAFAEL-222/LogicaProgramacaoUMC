//ARRAY
let timesPaulistas = ['Santos', 'Sao Paulo', 'Palmeiras', 'Ponte Preta']

//Acessar um item do Array
console.log(timesPaulistas[0])

//Verificar o tamanho do Array
console.log(timesPaulistas.length)

//Adicionar um item no final do Array
timesPaulistas.push('Corinthians')
console.log(timesPaulistas)

//Adicionar um item no inicio do Array
timesPaulistas.unshift('Guarani')
console.log(timesPaulistas);

//Remover um item no inicio do Array
timesPaulistas.shift()
console.log(timesPaulistas);

//Remover um item no final do Array
timesPaulistas.pop()
console.log(timesPaulistas);

//Verificar a posicao de um item
console.log(timesPaulistas.indexOf('Santos'))

//Metodo Splice()
//   - Adicionar
//   - Remover
//   - Modificar

//Remover um item a partir de uma posicao
//array.splice(posicao, quantiaDeItensRemovidos)
timesPaulistas.splice(1,1)
console.log(timesPaulistas);

// Remover um item a partir de um valor
timesPaulistas.splice(timesPaulistas.indexOf('Santos'),1)
console.log(timesPaulistas);

//Adicionar um item dentro de um Array
timesPaulistas.splice(0,0,'Santos', 'Sao Paulo', 'Palmeiras', 'Corinthians')
console.log(timesPaulistas)

//Modificando itens de um Array
timesPaulistas.splice(2,2,'Guarani', 'Ponte preta')
console.log(timesPaulistas);

//Percorrer um Array
console.log('Maiores Times Paulistas');
let i = 0;

timesPaulistas.forEach((time) => {
        i++
        console.log(i , '-', time);
        
})




