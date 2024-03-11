var objetoVazio = {};
console.log("Objeto vazio: "+objetoVazio);

//Objetos com atributos
var displina={
    sigla: "DAW",
    nome: "Desenvolvimento de Aplicações WEB"
};

console.log("Disciplina.sigla: "+displina.sigla);
console.log("Disciplina.nome: "+disciplina.nome);

disciplina.sigla = "BD";
disciplina.nome = "Banco de Dados";

//console.log("disciplina.sigla:" + disciplina['sigla']);
//console.log("disciplina.sigla:" + disciplina['nome']);
//disciplina['sigla'] = "bd";
//disciplina['sigla'] = "banco de dados";

//Criado objetos com create
var curso = new Object();
curso.nome = 'JavaScript Básico';
curso.responsavel = 'Simone';

console.log("curso.nome: "+curson.nome);
console.log("curso.responsavel: "+curson.responsavel);

//Colocando dados na table

function cadastrarCurso(){
    var curso = {
        sigla: document.getElementById("sigla").value, //TEM QUE POR O VALUE******************
        //sigla: document.querrySelector("#formata").value -> Também funciona
        nome: document.getElementById("nome").value
    };

    var tabela = document.getElementById("tabelaCurso");
    tabela.innerHTML = tabela.innerHTML + "<tr>";
    tabela.innerHTML = tabela.innerHTML + "<td align='center'>" + curso.sigla + "</td>" + "<td align='center'>" + curso.nome + "</td>";

    //Outra forma
    //`<td align='center'>${curso.sigla}</td> <td align='center'>${curso.nome}</td>`

    tabela.innerHTML = tabela.innerHTML + "</tr>";
    document.getElementById("sigla").value = "";
    document.getElementById("nome").value = "";
    
    
}
