<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login/acess.css">
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
                <p class="message">Entre com seu acesso!</p>
                <label>
                    <input required="" placeholder="" type="email" class="input">
                    <span>Email</span>
                </label>

                <label>
                    <input required="" placeholder="" type="password" class="input">
                    <span>Password</span>
                </label>
                <label for="">
                    <input type="checkbox" name="" id="">
                    <span>Acesso automatico?</span>
                </label>

                <button class="submit">Submit</button>

            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function checkStatus() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "../connection/conexao.php", true);
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
            setInterval(checkStatus, 10000); // Repeat every 10 seconds
        });
    </script>
</body>

</html>