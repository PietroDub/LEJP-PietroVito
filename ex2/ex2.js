const num1 = parseFloat(document.getElementById("numero1").value);
const num2 = parseFloat(document.getElementById("numero2").value);

function somar(){
    let resultado = 0;
    resultado = num1 + num2;
    document.getElementById('resultado').innerHTML = `A soma é: ${resultado}`;
}
function subtrair(){
    let resultado = 0;
    resultado = num1 - num2;
    document.getElementById('resultado').innerHTML = `A  subtração é: ${resultado}`;
}
function multiplicar(){
    let resultado = 0;
    resultado = num1 * num2;
    document.getElementById('resultado').innerHTML = `A multiplicação é: ${resultado}`;    
}
function dividir(){
    let resultado = 0;
    resultado = num1 / num2;
    document.getElementById('resultado').innerHTML = `A divisão é: ${resultado}`;
}

