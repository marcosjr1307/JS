function change(){
    document.getElementById("title").style.color= "lightgreen";
}

function dischange(){
    document.getElementById("title").style.color= "black";
}

var variavel = 1.1;
console.log('variavel = '+variavel);
console.log(typeof variavel);

variavel = "Olá mundo";
console.log('variavel = '+variavel);
console.log(typeof variavel);

variavel = true;
console.log('variavel = '+variavel);
console.log(typeof variavel);

console.log('Minha mãe sempre dizia : "Volte já para casa menino"');
let universidade="Unicamp"
if(variavel){
    console.log("Igual");
    let colegio="Cotil"; //variável local desse if
}
//console.log(colegio) não vai funcionar pois a variável foi declarada localmente
console.log(universidade);