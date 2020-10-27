<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
require_once 'db_connect.php';
session_start();
if ((!isset($_SESSION['name']) == true) and (!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:index.php');
}

$name = $_SESSION['name'];
?>
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
                    <a href="#" class="brand-logo">Lista de Tarefas</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <p style="margin-right: 25px;"><?php echo $name; ?></p>
                        </li>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <div class="row">
                    <h4>Lista</h4>
                    <table>
                            <tr>
                                <td style="font-weight: bold;">Nº</td>
                                <td style="font-weight: bold;">Nome</td>
                                <td style="font-weight: bold;">Descrição</td>
                            </tr>

                            <?php
                            //$item = mysqli_query($connect, "SELECT * FROM list");
                            $item = mysqli_query($connect, "SELECT * from list where list.user = '$name'");
                            while ($row = mysqli_fetch_array($item)) {
                                echo "<tr><td>" . $row['id'] . "</td>
                                <td style='margin-left:25px;'>" . $name . "</td>
                                <td>" . $row['item'] . "</td>
                                <td>
                                    <a href='delete_items.php?delete-id=" . $row['id'] . "'' class='btn-floating red'>
                                        <i class='material-icons'>delete</i>
                                    </a>
                                </td>
                                </tr>";
                            }
                            ?>


                    </table>
                    <form method="post" action="todolist_connect.php" class="col s12">
                        <div class="row" style="display:flex; align-items:center;">
                            <div class="input-field col s12">
                                <textarea id="textarea1" name="item-description" class="materialize-textarea"></textarea>
                                <label for="textarea1">Descrição</label>
                            </div>
                            <button class="btn waves-effect waves-light col s6" type="submit" name="action-todolist">Adicionar</button>
                        </div>
                    </form>
                </div>

            </section>
        </main>
    </div>


</body>

</html>