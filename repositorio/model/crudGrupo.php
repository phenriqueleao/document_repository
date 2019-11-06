<?php
    include 'conexaoBD.php';

    function listarGrupo($nomeInput) {
        conectar();
        $resultado = query("SELECT * FROM grupo WHERE nomeGrupo = '$nomeInput'");
        fechar();

        return $resultado;
    }

    function buscarGrupo() {
        conectar();
        $resultado = query("SELECT * FROM grupo");
        fechar();

        return $resultado;
    }

    function cadastrarGrupo($nomeGrupo) {
        conectar();
        query("INSERT INTO grupo (nomeGrupo)
              VALUES ('$nomeGrupo')");
        fechar();
    }

    function mostrarDadosGrupo($idGrupo) {
        conectar();
        $resultado = query("SELECT * FROM grupo WHERE idGrupo = '$idGrupo'");
        fechar();

        return $resultado;
    }

    function editarGrupo($idGrupo, $nomeGrupo) {
        conectar();
        query("UPDATE grupo SET nomeGrupo = '$nomeGrupo'
               WHERE idGrupo = $idGrupo");
        fechar();
    }

    function excluirGrupo($idGrupo) {
        conectar();
        query("DELETE FROM grupo WHERE idGrupo = $idGrupo");
        fechar();
    }
?>