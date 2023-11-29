<?php
    session_start();
    include 'connect.php';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    $consulta = "select username from credent;";
    $bd = mysqli_query($con,$consulta);

    while($singin = mysqli_fetch_assoc($bd)){
        if ($usuario == $singin['username']){
            header('location:cadastro.php?error=true');
            exit;
        }
    }

    $sql = "insert into credent (username,password,name,level) values ('{$usuario}' , '{$senha}', '{$nome }', 'U');";

    if (mysqli_query ($con, $sql) ){
        header('location:login.php?sucess=true');
    } else{
        header('location:login.php?error=true');
    }

?>
