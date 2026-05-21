<?php
    $artista = $_POST["artista"];
    $nome_album = $_POST["nome-album"];
    $ano_lancamento = $_POST["ano-lancamento"];
    $tipo = $_POST["tipo"];
    $foto = $_POST["foto"];

    echo "$artista - $nome_album - $ano_lancamento - $tipo - $foto";

    $conexao = mysqli_connect("localhost","root","","db_spotify");

    if (!$conexao) {
        die ("<h3>Não Conectou: Error; </h3>" . mysqli_connect_error());
    }
    
    $sqlInsert = "INSERT INTO tb_discografia(nome, ano, artista, tipo, foto) Values ('$nome_album','$ano_lancamento','$artista','$tipo','$foto')";

    $resultado = mysqli_query($conexao, $sqlInsert);

    if ($resultado) {
        echo "Cadastro com Sucesso!";
    }else {
        echo "deu algum problema";
    }

    mysqli_close($conexao);
?>