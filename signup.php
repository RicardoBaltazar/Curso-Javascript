<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Lista de tarefas</title>
</head>

<body>
    <div class="home-page">
        <header>
            <nav>
                <div class="nav-wrapper ">
                    <a href="login.php" class="brand-logo">TodoList</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <div class="row">
                    <form action="signup_connect.php" method="POST" class="col s12">
                        <h4>Cadastre - se</h4>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="first_name" type="text" class="validate" required>
                                <label for="first_name">Nome</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" name="last_name" type="text" class="validate" required>
                                <label for="last_name">Sobrenome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
                        <br>
                        <br>
                        <br>
                    </form>
                    <a href="login.php" class="link-login">Já Tem Cadastro? Faça Login!</a>
                </div>

            </section>
        </main>
    </div>


</body>

</html>