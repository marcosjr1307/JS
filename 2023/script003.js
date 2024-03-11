console.log("olá");
var array = new Array();

array[0] = 1;
array[1] = true;
array[2] = "Olá";
array[3] = null;
console.log(array);
console.log(array.length);
console.log("Adicionando valor no final com o PUSH");
array.push("Push");
console.log(array);
console.log("Adicionando valor no inicio com o UNSHIFT");
array.unshift("Unshift");
console.log(array);
console.log("Removendo um valor determinado, mantendo o espaço vazio");
delete array[1];
console.log(array);
console.log("Removendo o ultimo elemento");
var val = array.pop();
console.log("Valor removido: "+val);
console.log(array);
console.log("Removendo o primeiro elemento");
var val2 = array.shift();
console.log("Valor removido: "+val2);
console.log(array);
console.log("Removendo um valor determinado, exlcuíndo o espaço também");
array.splice(0,1); //primeiro idice indica a partir de qual posição vai começar a exluir, e o segundo indica quantos valores serão exluídos
console.log(array);
console.log("----------------");
console.log(typeof array);
console.log("----------------");
console.log("Atribuindo valores a um array");

/*var professores = new Array();
for(var i=0; i<5; i++){
    professores[i] = prompt(i+1+" - Nome do professor: ");
}

console.log(professores);

for(var i=0; i<professores.length; i++){
    console.log(i+1+" - Professor: "+professores[i]);
}*/

console.log("Concatenando arrays");
var a1 = [1,2,3];
var a2 = [4,5,6];
console.log(a1.concat(a2));


var data = ["16","17","18"];
var string = data.join("/");
console.log("String: "+string);

var dois = data.slice(0,2);
console.log("Slice: "+dois);

var contrario = data.reverse();
console.log("Reverse: "+contrario);

console.log("-----Sort------");
var instrumentos = ['Guitarra','Baixo','Violão'];
instrumentos.sort();
var idades = [32,12,43,23,523];
idades.sort();
console.log(instrumentos);
console.log(idades);

const lista = [1,2,3,4,5];
const novalista = lista.map(function(item) { return item * 5});
console.log("Inicial: "+ lista + "\nNova: "+novalista);

const lista2 = [10,10,10];
const total1 = lista2.reduce((acumulador,atual)=>{return acumulador+atual;})
console.log("A somar: "+lista2+"\nTotal: "+total1); 

let frutas = ['Maça','Uva','Banana','Pêra'];
const buscaUva = frutas.findIndex((fruta)=>{return fruta === "Uva";})
console.log("Posição da Uva: "+buscaUva);

let numeros = [6,43,25,12,03,15,45,75];
let buscaMaior45 = numeros.find(x=>{return x>45});
console.log(buscaMaior45);

let nomeTeste = ["Simone","Lucas","Sim"];
console.log(nomeTeste.includes('Simone'));

console.log(nomeTeste.some(nome=>nome=='Lucas'));

numeros = [6,43,25,12,3];
const maiorQue3 = numeros.every(x=>x>3); //returna false
console.log(maiorQue3)

buscarMaior45 = numeros.filter(x=> x>3);
console.log(buscarMaior45);

const carros = ['Chevrolet','Yamaha','Fiat'];
carros.forEach(function(item,index,array){console.log(item.toUpperCase())})

carros.forEach(function(item,index,array){array[index] = 'Carro '+item})
console.log(carros)

console.log("Spread operator");
let v1 = [1,2,3];
let v2 = [4,5,6];
let vfinal = [...v1,...v2];
console.log(vfinal);

let dados = ["nome","Sobrenome",18];

//let segundoNome = nome[1];

let {1:segundoNome} = dados;
//let {index:nomeVariávelResultandte} = vetorInicial;
//let {index:nomeVariávelResultandte, index2:nomeVariávelResultandte2} = vetorInicial;
//let[nome,sobrenome,age]=dados;
console.log(segundoNome);