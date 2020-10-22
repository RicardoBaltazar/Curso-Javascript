<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Lista de tarefas</title>
</head>

<body>
    <div class="home-page">
        <header>
            <nav>
                <div class="nav-wrapper ">
                    <a href="#" class="brand-logo">TodoList</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </header>

        <main>
            <section>
                <div class="row">
                    <form class="col s12">
                        <h4>Cadastre - se</h4>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate">
                                <label for="first_name">Nome</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Sobrenome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
                        <br>
                        <br>
                        <br>
                    </form>
                    <a href="#" class="link-login">Já Tem Cadastro? Faça Login!</a>
                </div>

            </section>
        </main>
    </div>


</body>

</html>