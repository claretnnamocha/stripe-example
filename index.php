<?php
$products = [
    'Product 1' => ['id' => 1, 'description' => 'Product Description', 'price' => 3000],
    'Product 2' => ['id' => 2, 'description' => 'Product Description', 'price' => 5000],
    'Product 3' => ['id' => 3, 'description' => 'Product Description', 'price' => 10000],
];
?>
<style type="text/css">
.stripe-button-el {
    display: none !important;
}
</style>
<!DOCTYPE html>
<html>

<head>
    <title>Simple Payement Example</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <?php foreach ($products as $key => $product): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2 class="price"><span class="currency">N</span><?php print($product['price'])?></h2>
                        </div>
                        <div class="card-body text-center">
                            <div class="card-title">
                                <h2><?php print($key)?></h2>
                            </div>
                            <br>
                            <form method="post" action="payment.php?p_id=1">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_BPdVXLKMU6K5YlybHhdGGlm1" data-currency="ngn" data-amount="<?php print($product['price']) * 100?>" data-name="<?php print($key)?>" data-description="<?php print($product['description'])?>" data-image="https://clareopractice.000webhostapp.com/my_product.png">
                                </script>
                                </script>
                                <button type="submit" class="btn btn-primary"><span>Pay With Stripe</span></button>
                                <span id="waya-btn-<?php print($product['id'])?>"></span>
                                <script src="https://wayapos.herokuapp.com/api.min.js"></script>
                                <script type="text/javascript">
                                    WAYA.init(
                                        {
                                        amount: <?php print($product['price'])?>,
                                        publicKey: "11777d3d304a6115fdce31463a15805bd400bcf6cac573c84a7b4dc49135fbc7aed88cc97cef6c8a5f7fbcadfa89aab7",
                                        successUrl: "https://my-success-url.com",
                                        failureUrl: "http://my-failure-url.com",
                                        cancelUrl: "http://my-cancel-url.com",
                                        },
                                        "#waya-btn-<?php print($product['id'])?>"
                                    );
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
</body>

</html>
