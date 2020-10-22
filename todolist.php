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
                    <a href="#" class="brand-logo">TodoList</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="login.php">Sair</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <div class="row">
                    <form class="col s12">
                        <h4>Lista</h4>
                        <table>
                            <tr>
                                <td style="font-weight: bold;">Nº</td>
                                <td style="font-weight: bold;">Nome</td>
                                <td style="font-weight: bold;">Descrição</td>
                            </tr>
                            <tr>
                                <td>Nº</td>
                                <td>User</td>
                                <td>Descriptionlllllllllllllllllll</td>
                                <td>
                                    <button class="btn-floating red">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                        <div class="row" style="display:flex; align-items:center;">
                            <div class="input-field col s10">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Descrição</label>
                            </div>
                            <button class="btn waves-effect waves-light col s6" type="submit" name="action">Adicionar</button>
                        </div>
                    </form>
                </div>

            </section>
        </main>
    </div>


</body>

</html>