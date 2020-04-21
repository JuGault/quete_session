<?php
session_start();
$panier = $_COOKIE["panier"];
$_SESSION['quantity[46]'] = $panier['Pecan_nuts'];
$_SESSION['quantity[36]'] = $panier['Chocolate_chips'];
$_SESSION['quantity[58]'] = $panier['Full_chocolate_cookie'];
$_SESSION['quantity[32]'] = $panier['M&M\'s@_cookies'];

if (empty($_SESSION['login'])){
    header('location: login.php');
}
require 'inc/head.php';
require 'inc/data/products.php';


?>
<section class="cookies container-fluid">
    <div class="row">

        <?php foreach ($catalog as $id => $cookie) : ?>
            <form action="index.php">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            <a href="" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><?php echo $_SESSION["quantity[$id]"] ?>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            </form>

        <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
