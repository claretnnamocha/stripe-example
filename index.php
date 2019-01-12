<style type="text/css">
.stripe-button-el {
    display: none !important;
}
</style>
<!DOCTYPE html>
<html>

<head>
    <title>Stripe Payement Example</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">N</span>3000</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h2>My Product 1</h2>
                        </div>
                        <br>
                        <form method="post" action="payment.php?p_id=1">
                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_BPdVXLKMU6K5YlybHhdGGlm1" data-currency="ngn" data-amount="300000" data-name="My Product 1" data-description="My Product description" data-image="https://clareopractice.000webhostapp.com/my_product.png">
                            </script>
                            </script>
                            <button type="submit" class="btn btn-primary"><span>Pay</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">N</span>5000</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h2>My Product 2</h2>
                        </div>
                        <br>
                        <form method="post" action="payment.php?p_id=2">
                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_BPdVXLKMU6K5YlybHhdGGlm1" data-currency="ngn" data-amount="500000" data-name="My Product" data-description="My Product 2 description" data-image="https://clareopractice.000webhostapp.com/my_product.png">
                            </script>
                            </script>
                            <button type="submit" class="btn btn-primary"><span>Pay</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2 class="price"><span class="currency">N</span>10000</h2>
                    </div>
                    <div class="card-body text-center">
                        <div class="card-title">
                            <h2>My Product 3</h2>
                        </div>
                        <br>
                        <form method="post" action="payment.php?p_id=3">
                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_BPdVXLKMU6K5YlybHhdGGlm1" data-currency="ngn" data-amount="1000000" data-name="My Product" data-description="My Product 3 description" data-image="https://clareopractice.000webhostapp.com/my_product.png">
                            </script>
                            </script>
                            <button type="submit" class="btn btn-primary"><span>Pay</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>