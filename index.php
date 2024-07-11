<?php

    $nome = $_GET['nome'] ?? false;
    if ($nome) {
        $class = 'alert alert-success';
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="<?= $nome ? $class : 'hidden'?>" role="alert">
        O usuário <?=$nome?> se cadastrou!
    </div>

    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Olá, mundo!</h1>
        <p><?php echo "Olá, mundo em PHP!" ?></p>
        <form action="cadastrar.php" method="post">
            <input type="text" name="id" id="id" placeholder="Digite o ID">
            <input type="submit" value="Enviar" class="btn btn-secondary btn-sm">
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>