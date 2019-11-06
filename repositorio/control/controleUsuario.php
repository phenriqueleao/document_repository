<?php

    include '../model/crudUsuario.php';

    if(isset($_POST['botao'])){

    $botao = $_POST['botao'];

    if($botao == 'entrar') {
        $emailInput = $_POST['emailInput'];
        $senhaInput = $_POST['senhaInput'];

        $emailBanco = "null";
        $senhaBanco = "null";
        $idUsuarioBanco = "null";

        $resultado = listarUsuario($emailInput);

        while($linhas = mysqli_fetch_assoc($resultado)) {
            $idBanco = $linhas['idUsuario'];
            $nomeBanco = $linhas['nomeUsuario'];
            $emailBanco = $linhas['emailUsuario'];
            $senhaBanco = $linhas['senhaBanco'];
            $tipoUsuarioBanco = $linhas['tipoUsuario'];
        }

        if($emailInput == $emailBanco) {

            if($senhaInput == $senhaBanco) {
                session_start();

                $_SESSION['idUsuario'] = $idBanco;
                $_SESSION['nomeUsuario'] = $nomeBanco;
                $_SESSION['emailUsuario'] = $emailBanco;
                $_SESSION['senhaUsuario'] = $senhaBanco;
            
                if($tipoUsuarioBanco == 'administrador') {
                    header('Location: ../view/pageAdmin.php');
                }
                else {
                    header('Location: ../view/pageUsuario.php');
                }
            }
        }
    }

    else if($botao == 'cadastrar') {
        $nomeUsuario = $_POST['nomeInput'];
        $emailUsuario = $_POST['emailInput'];
        $senhaUsuario = $_POST['senhaInput'];

        cadastrarUsuario($nomeUsuario, $emailUsuario, $senhaUsuario);

        header('Location: ../view/pageAdmin.php');
    }

    else if($botao == 'salvarEdicao') {
        $idUsuario = $_POST['idUsuario'];
        $nomeUsuario = $_POST['nomeInput'];
        $emailUsuario = $_POST['emailInput'];
        $senhaUsuario = $_POST['senhaInput'];

        editarPerfilUsuario($idUsuario ,$nomeUsuario, $emailUsuario, $senhaUsuario);

        header('Location: ../view/pageUsuario.php');
    }
    }
    if(isset($_GET['botao'])) {

        $botao = $_GET['botao'];

        if($botao == 'sair') {
            session_start();
            session_destroy();

            header('Location: ../index.php');
        }

        else if($botao == 'excluirUsuario') 
        {
            $idUsuario = $_GET['idUsuario'];

            excluirUsuario($idUsuario);

            header('Location: ../view/listarUsuarios.php');
        }
    }
    
?>