<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="js/menu.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/tela-cd.css">    
    <link rel="icon" href="images/logo.png" type="image/png">

    <title>Área de Cadastro - Vegan</title>
<body>
    <div class="container">
        <a href="login.php">
            <img src="images/logo.png" alt="Logo da Empresa" class="logo">
        </a>
        <div class="login-container">
            <form action="singin.php" method="post">
                <label for="usuario"><i class="fa-solid fa-user"> Usuário:</label><br>
                <input type="text" name="usuario" placeholder="Digite o Usuário"><br>
                <label for="senha"><i class="fa-solid fa-unlock"> Senha:</label><br>
                <input type="password" name="senha" placeholder="Digite a Senha"><br>
                <label for="nome">Nome:</label><br>
                <input type="text" name="nome" placeholder="Digite o seu Nome"><br>
                <br>
                <input type="submit" value="Cadastrar" href="login.php">
            </form>
    </div>
</body>
</html>