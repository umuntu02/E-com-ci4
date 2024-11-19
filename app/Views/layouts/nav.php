<?php

include __DIR__ . '/../_types.php';

function activeClass(string $value, string $currentView)
{
    return $currentView == $value ? 'active' : '';
}


?>
<?php $view->extend('layouts/base'); ?>
<?php $view->section('nav'); ?>
<section id="header">
    <a href="#"><img src="/public/assets/img/logo.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a class="<?= activeClass('home', $viewName); ?>" href="/home">Home</a></li>
            <li><a class="<?= activeClass('shop', $viewName); ?>" href="/shop">Shop</a></li>
            <li><a class="<?= activeClass('blog', $viewName); ?>" href="/blog">Blog</a></li>
            <li><a class="<?= activeClass('about', $viewName); ?>" href="/about">About</a></li>
            <li><a class="<?= activeClass('contact', $viewName); ?>" href="/contact">Contact</a></li>
            <li><a class="<?= activeClass('cart', $viewName); ?>" href="/cart"><i class="far fa-shopping-bag"></i></a></li>
        </ul>

    </div>
</section>
<?php $view->renderSection('body'); ?>
<?php $view->endSection(); ?>