<!DOCTYPE html>
<html lang="pt-br">
    <?php
    $page_title = "Admin";  
    include("head.php");
    ?>
<body>
    <main class="container">
        
        <?php
        include("inc-menu.php");
        ?>

        <h1 class="text-center text-success mt-5"><i class="bi bi-spotify"></i>Spotify</h1>

        <div class="row">
            <a href="dicografia.php">Salvar Discografia</a>
        </div>
    </main>

    <?php
        include("footer.php");
    ?>
</body>
</html>