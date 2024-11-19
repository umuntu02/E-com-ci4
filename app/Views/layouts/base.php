<?php require __DIR__ . '/../_types.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "{$pageTitle}" ?> | Boutique en Ligne</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/assets/favicon/site.webmanifest">
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