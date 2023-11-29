<?php
    session_start();//criar sessão

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        include 'connect.php';
        $query = "select name, username, password, level from credent where username = '$usuario'";
        $bd_data=mysqli_query($con,$query);
        $login = mysqli_fetch_assoc($bd_data);
        $nivel=$login['level'];

        if($login['username'] == $usuario){
            if($login['password'] == $senha){
                session_start();
                $_SESSION['usuario'] = $usuario;
                $_SESSION['nivel'] = $nivel;
                $_SESSION['nome'] = $login['name'];
            }else {
                header('location:login.php?erro-pass=true');
                exit;
            }


            if($nivel == 'U'){
            header('location:user.php');
            }elseif ($nivel == 'A') {
                header('location:admin.php');
            }
        }else {
            header('location:login.php?erro-pass=true');
            exit;
        }
    }else{
        header('location:login.php?erro-pass=true');
        exit;
    }


?>