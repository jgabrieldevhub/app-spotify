<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include ("head.php");
        $page_title = "Discografia";
    ?>
<body class="d-flex align-items-center justify-content-center flex-column bg-secondary">

    <?php
        include("inc-menu.php");
    ?>

    <div class=" d-flex flex-column p-5 shadow bg-white rounded-4">
        <h1 class="mb-4">Cadastro de Discografia</h1>
        <form action="cadastro.php" method="post" class="d-flex flex-column">
            <label class="form-label" for="artista" >Artista</label>
            <input class="form-control mb-3" type="text" name="artista" placeholder="">
            <label class="form-label" for="nome">Nome do álbum</label>
            <input class="form-control mb-3" type="text" name="nome-album" placeholder="">
            <label class="form-label" for="idade">Ano de lançamento</label>
            <input class="form-control mb-3" type="number" name="ano-lancamento" placeholder="" min="0">
        <div class="mt-2">
            <label class="form-label" for="tipo">Tipo</label>
            <select class="form-select mb-3" name="tipo">
                <option value="album">Álbum</option>
                <option value="single">Single</option>
            </select>
            <label class="form-label" for="foto">Foto</label>
            <input class="form-control mb-4" type="text" name="foto" placeholder="">            

            <button class="btn btn-primary text-white" type="submit">Salvar</button>
            <button class="btn btn-success text-white" type="reset">Limpar</button>
        </div>    
        </form>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>