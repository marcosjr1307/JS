const IDADE = 18;
//idade=20 não é possível fazer essa atribuíção 
console.log(IDADE);
//const PI não é possível, necessário declarar o seu valor previamente

function calcularMedia(){
var nome = prompt("Seu nome");
var n1 = prompt("Nota 1");
var n2 = prompt("Nota 2");

var media = (parseFloat(n1)+parseFloat(n2))/2;

window.document.write("<p id='cor'>Nome: "+ nome +"</p>")
window.document.write("Media: "+media);
}