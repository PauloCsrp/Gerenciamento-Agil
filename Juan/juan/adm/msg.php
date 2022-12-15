<?php 

session_start();

if(!$_SESSION['adm']){
    header('Location:../index.html');
   
}
require_once('../conexao.php');


$id = $_SESSION['idUsuario'];
$sql = 'SELECT * FROM usuario WHERE idUsuario= ' . $id;
$result = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($result);




$query = 'SELECT * FROM  mensagem';
$row = mysqli_query($conexao, $query);

?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/inter-ui/3.19.3/inter.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/index.css">



<style>
    body {
        background-image: linear-gradient(120deg, #F75590, #00C2CB);
    }

    #adc {

        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 70px;
        ;
    }

    th,
    td {
        color: black;
    }

    .container {

        margin-top: 50px;
    }

    .table {
        justify-content: center;
        margin-left: 300px;
    }

    .botao {
        color: white;
    }

    .botao:hover {
        color: white;
    }
</style>



<header>
    <nav>
        <a class="logo" href="index.php">Diario online</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a class="menu" href="index.php">Usuarios</a></li>
            <li><a class="menu" href="adm.php">Administradores</a></li>
            <li><a class="menu" href="msg.php">Mensagens</a></li>
            <li><a class="menu" href="../actionIndex/sair.php">Sair</a></li>
        </ul>
    </nav>
</header>






<div class="amizade">


    <div id="adc">
        <button type="button" class="login__submit"><a class="menu" href="Adicionar.php"> Novo Usuario</a></button>
    </div>




    <div class="container" style="margin-left: 80px;">
        <div class="row">
            <div class="col-md-12">
                <table class="table" style="color: gray;">
                    <thead>
                        <tr>
                            <th><b>Código</b></th>
                            <th><b>Assunto</b></th>
                            <th><b>Explicação</b></th>
                            <th><b>E-mail do Usuario</b></th>
                            <th><b>Deletar</b></th>
                           

                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row_Func = mysqli_fetch_assoc($row)) { ?>
                            <tr>
                                <td><?php echo $row_Func['idMensagem'] ?></td>
                                <td><?php echo $row_Func['assunto'] ?></td>
                                <td><?php echo $row_Func['explique'] ?></td>
                                <td><?php echo $row_Func['emailUsu'] ?></td>
                                <td> <button type="button" class="btn btn-danger"><a class="botao" href="action/deletarMsg.php?id=<?php echo $row_Func['idMensagem'] ?>">Deletar</a></button></td>
                               

                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Entre em Contato</h4>
                <ul>
                    <form method="POST" action="action/enviar.php">

                    <input class="login__input" type="test" name="email" value="<?php echo $linha['email']; ?>"  hidden />

                        <input class="login__input" type="text" placeholder="Assunto" name="assunto" />
                        <span class="login__input-border"></span>

                        <input class="login__input" type="text" placeholder="Explique" name="explique" style=" margin-top:10px ;" />
                        <span class="login__input-border"></span>


                        <button type="submit" class="login__submit">Envie</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
    </div>
</footer>