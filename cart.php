<?php require 'inc/head.php'; ?>
<?php
session_start();
?>

<section class="cookies container-fluid">
    <div class="row">
        <ul>
        <?php foreach($_SESSION['cart'] as $product) : ?>
            <?php foreach ($product as $name) :?>
            <li><?= $name?></li>
            <?php endforeach; ?>
        <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
