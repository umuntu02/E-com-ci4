
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boutique en Ligne</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="<?= baseURL(); ?>/public/assets/css/style.css">
    </head>

    <body class="light">
        <section id="header">
            <a href="#"><img src="<?= base_url(); ?>/public/assets/img/logo.png" class="logo" alt="" ></a>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>


        <script src="<?= base_url(); ?>/public/assets/js/script.js"></script>
    </body>

</html>