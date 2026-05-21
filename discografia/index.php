<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Discografia Form</title>
</head>
<body class="d-flex align-items-center justify-content-center flex-column bg-secondary">
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

</body>
</html>