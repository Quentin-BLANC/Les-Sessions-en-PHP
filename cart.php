<?php
require 'inc/head.php';
require 'inc/data/products.php';
if (empty($_SESSION['login'])) {
    header('location: login.php');
}
var_dump($_SESSION['cart']);
var_dump($_SESSION['cart']['add_to_cart']);

?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php
            if ($_SESSION['cart']['add_to_cart'] === '46') {
                echo 'You choose Pecan nuts !';
            }
            else if ($_SESSION['cart']['add_to_cart'] === '36') {
                echo 'You choose Chocolate chips !';
            }
            else if ($_SESSION['cart']['add_to_cart'] === '58') {
                echo 'You choose Full chocolate cookie !';
            }
            else if ($_SESSION['cart']['add_to_cart'] === '32') {
                echo "You choose 'M&M\'s&copy; cookies !";
            }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
