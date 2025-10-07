const nota = parseFloat(document.getElementById("nota").value);

function Verificar(){
    if(nota >= 6){
        document.getElementById('resultado').innerHTML = `Aprovado!`
    } 
    if(nota > 4 && nota < 6){
        document.getElementById('resultado').innerHTML = `Recuperação!`
    }
    if(nota < 4){
        document.getElementById('resultado').innerHTML = `Reprovado!`
    }
}