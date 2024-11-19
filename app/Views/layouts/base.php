<?php require __DIR__ . '/../_types.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "{$pageTitle}" ?> | Boutique en Ligne</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>

<body>
    <div class="big-wrapper" id="light">
        <?php $view->renderSection('nav'); ?>



        <div class="bottom-area">
                <button class="toggle-btn">
                    <i class="far fa-moon"></i>
                    <i class="far fa-sun"></i>
                </button>
        </div>


        <script src="/public/assets/js/script.js"></script>
    </div>

</body>

</html>