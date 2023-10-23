var hoje = new Date();
console.log(hoje);

var dataPassada = new Date("01/22/1994 15:23:35");
console.log(dataPassada);

var data2 = new Date(1994,0,22,15,23,35);
console.log(data2);

var dia = hoje.getDate();
var mes = hoje.getMonth();
var ano = hoje.getFullYear();
var diaSemana = hoje.getDay();
console.log("Dia: "+dia+"\nMes: "+mes+"\nAno: "+ano+"\nDia da semana: "+diaSemana);