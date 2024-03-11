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
var meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
var mes = meses[mes];
var semana = ["Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado"];
diaSemana = semana[diaSemana];
console.log("Dia: "+dia+"\nMes: "+mes+"\nAno: "+ano+"\nDia da semana: "+diaSemana);
console.log(dia+" de "+mes+" de "+ano);

var dataX = new  Date("10/05/2022");
var dataY = new Date("10/05/2022")

//if(dataX == dataY), impossível realizar essa comparação, o date pega até os milisegundos, que não vão ser iguais
if(dataX.getTime() == dataY.getTime()){
    console.log("Iguais");
}else{
    console.log("Diferentes");
}

var hoje = new Date();
function escreveData(){
    var dia = hoje.getDate();
    var mes = hoje.getMonth();
    var ano = hoje.getFullYear();
    var diaSemana = hoje.getDay();

    var meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
    var mes = meses[mes];

    var semana = ["Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado"];
    diaSemana = semana[diaSemana];
    
    document.getElementById("data").textContent = dia+" de "+mes+" de "+ano;
    configByTime();
}

function configByTime(){
    if(hoje.getHours() < 18){
        document.getElementById("data").style.backgroundColor="lightgray";
        document.getElementById("data").style.Color="red";
        if(hoje.getHours() < 12){
            document.getElementById("saudacao").textContent = "Boa dia!";
        }else{
            document.getElementById("saudacao").textContent = "Boa tarde!";
        }
    }else{
        document.getElementById("data").style.backgroundColor="gray";
        document.getElementById("data").style.Color="white";
        document.getElementById("saudacao").textContent="Boa noite!";
    }
}

function pesquisar(){
    var dataInicial = document.getElementById("dataInicial").value;
    var dataFinal = document.getElementById("dataFinal").value;
    
    if(dataInicial > dataFinal){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'A data inicial deve ser anterior à final!'
          })
    }else{
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Salvo com sucesso!',
            showConfirmButton: false,
            timer: 1500
          })
    }
}