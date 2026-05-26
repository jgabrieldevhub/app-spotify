<?php
    $page_title = "Discografia";
    include("head.php");
?>

<body>
    <main class="container">
        <?php
        include("inc-menu.php");
        ?>
        <h1>Listagem das Discografias</h1>

        <div class="row mb-5">
            <div class="col">
                <a href="formulario.php">Salvar Discografia</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table table-striped mb-5">
                    <tr>
                        <td>ID</td>
                        <td>Nome do Álbum</td>
                        <td>Ano</td>
                        <td>Artista</td>
                        <td>Tipo</td>
                    </tr>
            </div>
        </div>

        <?php
            include("connection.php");

            $sql = "select * from tb_discografia order by artista, ano";
            $resultado = mysqli_query($conexao, $sql);

            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td> {$linha_resultado['id']} </td>";    
                echo "<td> {$linha_resultado['artista']} </td>";    
                echo "<td> {$linha_resultado['nome']} </td>";    
                echo "<td> {$linha_resultado['ano']} </td>";    
                echo "<td> {$linha_resultado['tipo']} </td>";
                echo "</tr>";   
            }

            mysqli_close($conexao);
        ?>
        </table>
    </main>

    <?php
        include("footer.php");
    ?>