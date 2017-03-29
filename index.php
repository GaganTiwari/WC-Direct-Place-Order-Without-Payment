<?php
/*
Plugin Name: WC Direct Place Order Without Payment
Version: 1.0.0
Plugin URI: https://github.com/GaganTiwari/WC-Direct-Place-Order-Without-Payment
Description: Plugin will customize checkout page and offers to place order direct without payment.
Author: Gagan Tiwari
Author URI: https://github.com/GaganTiwari/WC-Direct-Place-Order-Without-Payment
License: GPL v3

WC Direct Place Order Without Payment
Copyright (C) 2013, https://github.com/GaganTiwari/WC-Direct-Place-Order-Without-Payment

*/

//wc default hook to disable payment functionality on checkout.

add_filter('woocommerce_cart_needs_payment', '__return_false');

//end here
