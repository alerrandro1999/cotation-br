<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="container-header">
        <p>CotationBR</p>
        <img src="imagem/github.svg" alt="git" width="30" height="30">
        </div>
    </header>

    <main>
        <div class="texto">
            <h1>CotationBr</h1>
            <p>Proident officia ut exercitation labore minim pariatur amet adipisicing officia eiusmod. Dolore eiusmod non enim consectetur Lorem sint laborum esse. Labore veniam dolore culpa irure mollit cillum non irure. Reprehenderit sint consectetur culpa ea laborum anim reprehenderit. Quis laborum quis laborum ex. Cillum ut tempor officia excepteur dolor duis irure ex proident exercitation. Qui eiusmod qui aliquip fugiat irure cillum ipsum commodo enim deserunt commodo occaecat veniam esse.</p>
        </div>
        <div class="image">
            <img src="imagem/dashboard.svg" alt="dashboard" width="500" height="500">
        </div>
    </main>

    <section class="container-cotation">
<?php
    foreach ($api::ToArray() as $value) {
        foreach ($value as $value) {
            $ob = (object)$value;
    ?>
    

        <div class="cotation">
            <div class="img">
                <img src="<?= $ob->logo ?>" alt="imagem da empresa" width="50" height="50">
            </div>
            <div class="texto">
                <p class="nome"><?= $ob->name ?></p>
                <p class="valor">R$: <?= $ob->close ?></p>
                <p class="volume">Volume: <?= $ob->volume ?></p>
            </div>
        </div>
        <?php }} ?>
    </section>


</body>

</html>