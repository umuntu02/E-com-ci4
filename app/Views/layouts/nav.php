<?php

include __DIR__ . '/../_types.php';

function activeClass(string $value)
{
    global $viewName;
    return $viewName == $value ? 'active' : '';
}

?>
<?php $view->extend('templates/base');?>
<?php $view->section('nav');?>
        <section id="header">
                    <a href="#"><img src="/public/assets/img/logo.png" class="logo" alt="" ></a>
                    <div>
                        <ul id="navbar">
                            <li><a class="<?=activeClass('home');?>" href="/index">Home</a></li>
                            <li><a class="<?=activeClass('shop');?>" href="/shop">Shop</a></li>
                            <li><a class="<?=activeClass('blog');?>" href="/blog">Blog</a></li>
                            <li><a class="<?=activeClass('about');?>" href="/about">About</a></li>
                            <li><a class="<?=activeClass('contact');?>" href="/contact">Contact</a></li>
                            <li><a class="<?=activeClass('cart');?>" href="/cart"><i class="far fa-shopping-bag"></i></a></li>
                        </ul>/
                    </div>
                </section>
        <?php $view->renderSection('body');?>
<?php $view->endSection();?>

