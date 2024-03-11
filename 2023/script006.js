var alunoOBJ = {
    ra: 1234,
    nome: 'Simone'
}

var alunoStr = JSON.stringify(alunoOBJ);
console.log("OBJ em json");
console.log(alunoStr);

var novoAlunoObk = JSON.parse(alunoStr);
console.log("Json em JS: ");
console.log(novoAlunoObk.ra);
console.log(novoAlunoObk.nome);