const base = parseFloat(document.getElementById("base").value);
const altura = parseFloat(document.getElementById("altura").value);

function perimetro(){
    let resultado = 0;
    resultado = (altura * 2) + (base * 2);
    document.getElementById('resultado').innerHTML = `O perímetro é: ${resultado}`;
}
function area(){
    let resultado = 0;
    resultado = base * altura;
    document.getElementById('resultado').innerHTML = `A área é: ${resultado}`;
}