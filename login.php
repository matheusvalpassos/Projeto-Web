<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    

    <title>Área de acesso</title>
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="container">
        <a href="index.php">
            <img src="images/logo.png" alt="Logo da Empresa" class="logo">
        </a>
        <div class="login-container">
            <form action="auth.php" method="post">
                <label for="usuario"><i class="fa-solid fa-user"></i> Usuário:</label><br>
                <input type="text" name="usuario" placeholder="Digite o Usuário"><br>
                <label for="senha"><i class="fa-solid fa-unlock"></i> Senha:</label><br>
                <input type="password" name="senha" placeholder="Digite a Senha"><br>
                <br>
                <span class="Registro">Não possui uma conta?   <a href="cadastro.php">Clique aqui!</a></span>
                <input type="submit" value="Acessar">
            </form>

            <div class="erro-box">
                <?php
                    if(isset($_GET['erro_pass'])){
                        echo '<p class="erro-item">Usuário ou Senha Inválida!</p>';
                    }
                    elseif(isset($_GET['erro_login'])){
                        echo '<p class="erro-item">É necessário estar logado para acessar à página!</p>';
                    }
                    elseif(isset($_GET['erro-accesso'])) {
                        echo "<p class='erro-item' >Sem permissão para acessar!</p>";
                    }
                    else{
                        echo '';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>