<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

global $product; ?>

<style>
	.single-product__main .row {
		display: flex;
		flex-direction: row;
		align-items: stretch;
		background: var(--lg-black);
		background-size: cover;
		color: var(--white);
		min-height: 100vh;
	}
	.single-product__main a {
		color: var(--white);
	}
	.single-product__main .image { width: 50%; }
	.single-product__main .summary { width: 50%; }

	/* Image */
	.single-product__main .image .image-row {
		display: flex;
		flex-direction: column;
		justify-content: center;
		padding: 40px;
	}
	.single-product__main .gallery {
		width: 100%;
	}
	.single-product__main .thumbnails {
		width: 100%;
	}

	/* Thumbnails */
	.single-product__main .thumbnails {
		display: flex;
		flex-direction: row;
	}
	.single-product__main .thumbnails .woocommerce-product-gallery__image {
		display: flex;
		align-items: stretch;
		margin: 0 0px 0 0;
		width: 100px;
		height: 100px;
		overflow: hidden;
		border: 2px solid #fff;
	}
	.single-product__main .thumbnails img,
	.single-product__main .gallery img {
		object-fit: cover;
		height: 100%;
		width: 100%;
	}

	/* Summary */
	.single-product__main .summary {
		display: flex;
		flex-direction: column;
		justify-content: center;
		width: 50%;
	}
	.woocommerce-breadcrumb {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	.product_meta,
	.woocommerce-breadcrumb,
	.product_meta a,
	.woocommerce-breadcrumb a {
		text-decoration: none;
		font-size: 0.8rem;
	}
	/* Variations */	
	.single-product__main form.variations_form {
		display: flex;
		flex-direction: column;
	}
	.single-product__main table.variations {
		position: relative;
		margin: 0px 0px 20px 0px;
	}
	.single-product__main td.label {
		width: 80px;
	}
	.single-product__main select#strain {
		background: var(--white);
		color: var(--black);
		padding: 4px 10px;
		margin-left: 10px;	
	}
	a.reset_variations {
		display: none;
	}
	/* Add to Cart */
	.single-product__main form .woocommerce-variation-add-to-cart {
		display: flex;
		flex-direction: row;
	}
	.single-product__main form.variations_form .quantity {
		display: flex;
		align-items: stretch;
	}
	.single-product__main form.variations_form button {
		background: var(--white);
		color: var(--black);
		padding: 4px 10px;
		margin-left: 10px;
	}
	.single-product__main form.cart input {
		width: auto;
		max-width: 50px;
		text-align: center;
		padding: 10px;
		border-top: 0px;
		border-right: 3px solid var(--black);
		border-bottom: 0px;
		border-left: 3px solid var(--black);
	}
	/* Number */
	.single-product__main input::-webkit-outer-spin-button,
	.single-product__main input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	.single-product__main input[type=number] {
		-moz-appearance: textfield;
	}
	.single-product__main form .quantity a {
		background: var(--white);
		color: var(--black);
		padding: 10px;
		cursor: pointer;
	}
	/* Metadata */
	.single-product__main .product_meta {
		margin: 20px 0 0 0;
	}

	/* Lower */
	.single-product .lower {
		padding: 40px;
	}
	.single-product .lower .additional-information {
		margin-top: 80px;
	}

	/* 
    =================================
            MEDIA QUERIES
    =================================
     */

    @media (max-width: 1199.98px) {
        
    }

    @media (max-width: 991.98px) {

    }

    @media (max-width: 767.98px) {
		.single-product__main .row {
			flex-direction: column;
			min-height: auto;
		}
		.single-product__main .image {
			width: 100%;
		}
		.single-product__main .image .image-row {
			align-items: center;
			padding: 0px;
		}
		.single-product__main .thumbnails {
			flex-direction: column;
		}
		.single-product__main .image img {
			width: 100%;
			object-fit: cover;
		}
		.single-product__main .thumbnails .woocommerce-product-gallery__image {
			width: 100%;
			height: auto;
			border: 0px;
		}
		.single-product__main .summary { 
			width: 100%;
			padding: 40px 20px;
		}
		.single-product .lower {
			padding: 40px 20px;
		}
		.single-product .lower h2 {
			margin: 0 0 auto 0;
		}
		.single-product .lower table {
			margin: 20px 0 0 0;
		}
    }

    @media (max-width: 575.98px) {

    }
</style>

<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="single-product">

	<!-- Desktop Main -->
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( array('single-product__main', 'black-background'), $product ); ?>>
		<div class="row">

			<div class="image">
				<div class="image-row">
					<?php
					/**
					 * Hook: woocommerce_before_single_product_summary.
					 *
					 * @hooked woocommerce_show_product_sale_flash - 10
					 * @hooked woocommerce_show_product_images - 20
					 */
					do_action( 'woocommerce_before_single_product_summary' );

					?>
				</div>
			</div>

			<div class="summary entry-summary">
				<div class="container">
					<?php woocommerce_breadcrumb(); ?>
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>
				</div>
			</div>

		</div>
	</div>

	<div class="lower">
		<div class="description">
			<?php
			$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );
			?>

			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php the_content(); ?>
		</div>

		<div class="additional-information">
			<?php
			$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional information', 'woocommerce' ) );
			?>

			<?php if ( $heading ) : ?>
				<h2><?php echo esc_html( $heading ); ?></h2>
			<?php endif; ?>

			<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
		</div>

	</div> <!-- /lower -->


	<?php do_action( 'woocommerce_after_single_product' ); ?>

</div><!-- /single-product -->

<?php get_footer( 'shop' ); ?>