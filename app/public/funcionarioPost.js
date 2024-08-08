document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('formLogin');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Impede o envio padrão do formulário
        const nome = encodeURIComponent(document.getElementById('nome').value);
        const email = encodeURIComponent(document.getElementById('email').value);
        const senha = encodeURIComponent(document.getElementById('senha').value);

        const body = `cadastrarFuncionario=true&nome=${nome}&email=${email}&senha=${senha}`;

        fetch('/app/backend/Controller/controller.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: body
        })
        .then(response => response.text())
        .then(data => {
            // Aqui você pode manipular a resposta do servidor
            document.getElementById('request').innerHTML = data;
            let ver = data.includes("Cadastrado");
            if (ver == true){
                window.location.href = "/";
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('request').innerHTML = 'Erro ao enviar a requisição';
        });
    });
});