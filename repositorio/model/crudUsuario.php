<?php
    include 'conexaoBD.php';

    function listarUsuario($emailInput) {
        conectar();
        $resultado = query("SELECT * FROM usuario WHERE emailUsuario = '$emailInput'");
        fechar();

        return $resultado;
    }

    function buscarUsuario() {
        conectar();
        $resultado = query("SELECT * FROM usuario WHERE tipoUsuario = 'usuario'");
        fechar();

        return $resultado;
    }

    function cadastrarUsuario($nomeUsuario, $emailUsuario, $senhaUsuario) {
        conectar();
        query("INSERT INTO usuario (nomeUsuario, emailUsuario, senhaUsuario, tipoUsuario)
              VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario', 'usuario')");
        fechar();
    }

    function mostrarDadosUsuario($idUsuario) {
        conectar();
        $resultado = query("SELECT * FROM usuario WHERE idUsuario = '$idUsuario'");
        fechar();

        return $resultado;
    }

    function editarPerfilUsuario($idUsuario, $nomeUsuario, $emailUsuario, $senhaUsuario) {
        conectar();
        query("UPDATE usuario SET nomeUsuario = '$nomeUsuario', emailUsuario = '$emailUsuario', senhaUsuario = '$senhaUsuario'
              WHERE idUsuario = $idUsuario");
        fechar();
    }

    function excluirUsuario($idUsuario) {
        conectar();
        query("DELETE FROM usuario WHERE idUsuario = $idUsuario");
        fechar();
    }
?>