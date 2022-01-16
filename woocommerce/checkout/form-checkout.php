<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<style>
    .checkout-page {
        padding: 0 0 40px 0;
    }
    .checkout-page form.checkout,
    form.checkout_coupon,
    .woocommerce-form-coupon-toggle {
        width: 100%;
        max-width: 800px;
        margin: 0 auto 0 auto;
    }
    .woocommerce-form-coupon-toggle {
        padding: 20px 0px;
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    .woocommerce-form-coupon-toggle a {
        color: var(--black);
        text-decoration: none;
        font-weight: bold;
        font-style: italic;
        text-transform: uppercase;
    }
    .woocommerce form .form-row .required {
        text-decoration: none;
    }
    .checkout-page input {
        border: var(--border-blk);
        padding: 10px 20px;
        text-transform: uppercase;
        width: 100%;
    }
    .checkout-page label {
        padding: 10px 0px;
        display: block;
        text-transform: uppercase;
    }
    .checkout-page textarea#order_comments {
        width: 100%;
        min-height: 100px;
        border: var(--border-blk);
    }
    .checkout-page .select2-selection {
        border: var(--border-blk);
        height: auto !important;
        padding: 10px 0px !important;
        text-transform: uppercase !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
        position: absolute;
        right: 2px;
        width: 40px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #000 transparent transparent transparent;
        border-style: solid;
        border-width: 8px 7px 0 7px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0;
    }
    .checkout-page p.form-row {
        margin: 40px 0px;
    }
    .checkout-page p#billing_address_1_field {
        margin: 40px 0 10px 0;
    }
    .checkout-page p#billing_address_2_field {
        margin: 0 0 40px 0;
    }
    /* Additional */
    .checkout-page .woocommerce-additional-fields h3 {
        display: none;
    }
    /* Review */
    table.woocommerce-checkout-review-order-table {
        width: 100%;
    }
    table.woocommerce-checkout-review-order-table tr {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    table.woocommerce-checkout-review-order-table thead tr {
        border-bottom: var(--border-blk);
    }
    table.woocommerce-checkout-review-order-table thead th {
        padding: 10px;
        text-transform: uppercase;
    }
    table.woocommerce-checkout-review-order-table thead th:first-of-type {
        border-right: var(--border-blk);
    }
    table.woocommerce-checkout-review-order-table tbody tr,
    table.woocommerce-checkout-review-order-table tfoot tr {
        border-bottom: var(--border-blk);
        padding: 20px 0px;
    }
    table.woocommerce-checkout-review-order-table tr.order-total {
        background: var(--black);
        color: var(--white);
    }
    .checkout-page ul.payment_methods {
        list-style: none;
        margin: 0;
        padding: 20px 0px;
    }
    /* Privacy */
    .checkout-page .woocommerce-privacy-policy-text p {
        font-size: 0.8rem;
    }
    .checkout-page .woocommerce-privacy-policy-text a {
        color: var(--black);
        text-decoration: none;
        font-weight: bold;
    }
    .checkout-page .place-order {
        display: grid;
        grid-template-columns: 2fr 1fr;
    }
    .checkout-page .place-order button[type="submit"],
    .checkout-page .checkout_coupon button[type="submit"] {
        background: var(--black);
        color: var(--white);
        cursor: pointer;
        text-transform: uppercase;
    }
    .checkout-page .checkout_coupon button[type="submit"] {
        padding: 10px 20px;
    }

</style>

<div class="checkout-page">
    <?php
    do_action( 'woocommerce_before_checkout_form', $checkout );

    // If checkout registration is disabled and not logged in, the user cannot checkout.
    if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
        echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
        return;
    }

    ?>

    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

        <?php if ( $checkout->get_checkout_fields() ) : ?>

            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

            <div class="col2-set" id="customer_details">
                <div class="col-1">
                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                </div>

                <div class="col-2">
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>
            </div>

            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

        <?php endif; ?>
        
        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
        
        <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
        
        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

        <div id="order_review" class="woocommerce-checkout-review-order">
            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
        </div>

        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

    </form>

    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

</div><!-- Checkout Page -->
