<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/public/css/login/acess.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <header>

    </header>

    <main>
        <div class="Container_Login_Content">
            <form class="form form-content">
                <p class="title">Login </p>
                <p class="message" id="respo">Entre com seu acesso!</p>
                <label>
                    <input required="" placeholder="" type="email" class="input" id="email">
                    <span>Email</span>
                </label>

                <label>
                    <input required="" placeholder="" type="password" class="input" id="senha">
                    <span>Password</span>
                </label>
                <div id="respo"></div>
                <button class="submit" onclick="login()">Submit</button>

            </form>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function login() {
            event.preventDefault();
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;

            const data = {
                email: email,
                senha: senha
            };

            fetch('app/controller/httpAcess/validation.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Se o login for bem-sucedido, redireciona para a página home.php
                        window.location.href = "app/view/home.php";
                    } else {
                        // Se o login falhar, exibe a mensagem de erro
                        document.getElementById('respo').innerText = data.message;
                        document.getElementById('respo').style.color = "red"; // Exibe o texto em vermelho
                    }
                })
                .catch(error => {
                    // Exibe uma mensagem de erro geral caso a requisição falhe
                    console.error('Error:', error);
                    document.getElementById('respo').innerText = "Ocorreu um erro ao tentar realizar o login.";
                    document.getElementById('respo').style.color = "red"; // Exibe o texto em vermelho
                });
        }



        function checkStatus() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "app/connection/testConn.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var status = xhr.responseText;
                    if (status.trim() === "ok") {
                        document.documentElement.style.setProperty('--circle-color', 'rgb(53, 185, 13)'); // Green
                    } else {
                        document.documentElement.style.setProperty('--circle-color', 'rgb(255, 0, 0)'); // Red
                    }
                }
            };
            xhr.send();
        }

        document.addEventListener("DOMContentLoaded", function() {
            checkStatus(); // Initial check
            setInterval(checkStatus, 3000); // Repeat every 10 seconds


        });
    </script>
</body>

</html>