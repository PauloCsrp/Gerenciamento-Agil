<?php

session_start();

if (!$_SESSION['usu']) {
    header('Location:../index.html');
}


require_once('../conexao.php');


$id = $_SESSION['idUsuario'];
$sql = 'SELECT * FROM usuario WHERE idUsuario= ' . $id;
$result = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($result);




$query = 'SELECT * FROM  diario where idUsuario=' . $id;
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
<link rel="stylesheet" href="../css/dd.css">




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
            <li><a class="menu" href="#">Meus Dados</a></li>
            <li><a class="menu" href="../actionIndex/sair.php">Sair</a></li>
        </ul>
    </nav>
</header>






<main class="login">
    <div class="login__container" >
      <h1 class="login__title">Minhas Informações  </h1>
      
      <form class="login__form" method="post" action="action/editandoDados.php">

      <input class="login__input" type="test" placeholder="Data" name="id" value="<?php echo $linha['idUsuario']; ?>" hidden />

        <input class="login__input" type="text"  value="<?php echo $linha['nome']; ?>" disabled />
        <span class="login__input-border"></span>

        <input class="login__input" type="texte" placeholder="E-mail" name="email" required  value="<?php echo $linha['email']; ?>"/>
        <span class="login__input-border"></span>

        <input class="login__input" type="texte" placeholder="Telefone" id="telefone" name="telefone"  value="<?php echo $linha['telefone']; ?>" onkeypress="$(this).mask('(00) 00000-0000')" required />
        <span class="login__input-border"></span>

        <input class="login__input" type="text" placeholder="senha" name="senha"  value="<?php echo $linha['senha']; ?>" required/>
        <span class="login__input-border"></span>

        <button type="submit" class="login__submit">Atualizar</button>

        <button type="button" class="login__submit">Deletar</button>


        
      </form>
    </div>
  </main>







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


