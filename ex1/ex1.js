function mostrar(){
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const tel = document.getElementById('telefone').value;
    document.getElementById('resultado').innerText =
      `${nome} - ${email} - ${tel}`;
}