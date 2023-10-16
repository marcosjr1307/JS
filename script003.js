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
var professores = new Array();
for(var i=0; i<5; i++){
    professores[i] = prompt(i+1+" - Nome do professor: ");
}

console.log(professores);

for(var i=0; i<professores.length; i++){
    console.log(i+1+" - Professor: "+professores[i]);
}

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