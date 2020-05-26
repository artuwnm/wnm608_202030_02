<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class="cart-detail clearfix">
    <div class="success-title">Fill in order information</div>
    <div class="cart-goods-list clearfix">
        <form class="fl order-submit-form">
            <ul>
                <li>
                    <p class="p-title">Email Address:</p>
                     <input type="text" name="email" class="input-text input-email" placeholder="Email address" autocomplete="off" />
                </li>
                <li>
                    <p>Shopping Address:</p>
                    <input type="text" name="first_name" class="input-text input-name" placeholder="First Name" autocomplete="off" />
                    <input type="text" name="last_name" class="input-text input-name" placeholder="Last Name" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="street_address" class="input-text input-street" placeholder="Street Address" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="apt_suite" class="input-text input-street" placeholder="Apt, Suite (Optional)" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="zip_code" class="input-text input-name" placeholder="ZIP Code" autocomplete="off" />
                    <input type="text" name="city" class="input-text input-name" placeholder="City" autocomplete="off" />
                </li>
                <li>
                    <p>Payment Method:</p>
                    <input type="text" name="card_num" class="input-text input-name" placeholder="Card Number" autocomplete="off" />
                </li>
                <li>
                    <input type="text" name="card_date" class="input-text input-name" placeholder="MM/YY" autocomplete="off" />
                    <input type="text" name="cvv" class="input-text input-name" placeholder="CVV" autocomplete="off" />
                </li>
                <li>
                    <a href="product_confirmation.php" class="submit-btn">Complete Payment</a>
                    <p class="error-tips"></p>
                </li>
            </ul>
        </form>
        <div class="order-submit-goods">
            <?= cartTotals()?>
        </div>
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>
