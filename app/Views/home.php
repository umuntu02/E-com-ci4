<?php require __DIR__ . '/_types.php'?>

<?php $view->extend('layouts/nav');?>

<?php $view->section('body');?>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off !</p>
        <button>Shop Now</button>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="/public/assets/img/features/f1.png" alt="">
            <h6>Free Shipping </h6>
        </div>
        <div class="fe-box">
            <img src="/public/assets/img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="/public/assets/img/features/f3.png" alt="">
            <h6>Save Money </h6>
        </div>
        <div class="fe-box">
            <img src="/public/assets/img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="/public/assets/img/features/f5.png" alt="">
            <h6>Happy Sell </h6>
        </div>
        <div class="fe-box">
            <img src="/public/assets/img/features/f6.png" alt="">
            <h6>Support</h6>
        </div>
    </section>
<?php $view->endSection();?>