<?php

/*
	Plugin Name: Add field meta
	
	Description: This is a simple plugin that adds a text field at the decription page of the product page, order details page, in the mail also.
	
	Author: Hitesh Sharma
	
	Version: 1.0
*/


/*	This hook will call a function to generate text field on the front end 	*/
add_action( 'woocommerce_before_add_to_cart_button', 'addFieldsBeforeAddToCart' );

function addFieldsBeforeAddToCart( ) {
	?>
	<table>
		<tr>
			<td>
				<label> Message: </label>
			</td>
			<td>
				<input type = "text" name = "customer_message" id = "customer_message" placeholder = "Your Message on Gift Card">
			</td>
		</tr>
	</table>
	<?php
}


/**
 * Add data to cart item
 */
add_filter( 'woocommerce_add_cart_item_data', 'addCartItemData', 25, 2 );
function addCartItemData( $cart_item_meta, $product_id ) {
	if ( isset( $_POST ['customer_message'] ) ) {
		$custom_data  = array() ;
		$custom_data [ 'customer_message' ] = isset( $_POST ['customer_message'] ) ? sanitize_text_field ( $_POST ['customer_message'] ): "" ;
		$cart_item_meta ['custom_data']= $custom_data ;
	}	
	return $cart_item_meta;
}


/**
 * Display the custom data on cart and checkout page
 */
add_filter( 'woocommerce_get_item_data', 'getItemData' , 25, 2 );
function getItemData ( $other_data, $cart_item ) {
	if ( isset( $cart_item [ 'custom_data' ] ) ) {
		$custom_data  = $cart_item [ 'custom_data' ];

		$other_data[] =   array( 'name' => 'Message',
					 'display'  => $custom_data['customer_message'] );
	}
	return $other_data;
}


/**
 * Add order item meta
 */
add_action( 'woocommerce_add_order_item_meta', 'addOrderItemMeta' , 10, 2);
function addOrderItemMeta ( $item_id, $values ) {
	if ( isset( $values [ 'custom_data' ] ) ) {
		$custom_data  = $values [ 'custom_data' ];
		wc_add_order_item_meta( $item_id, 'Message', $custom_data['customer_message'] );
	}
}


/*  new  code */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( 
  in_array( 
    'woocommerce/woocommerce.php', 
    apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) 
  ) 
) {

add_action( 'woocommerce_before_add_to_cart_button', 'add_fields_before_add_to_cart' );
	function add_fields_before_add_to_cart( ) {
	?>
		<table>
			
			<tr>
				<td>
					<?php _e( "Message:", "aoim"); ?>
				</td>
				<td>
					<input type = "text" name = "customer_message" id = "customer_message" placeholder = "Your Message on Gift Card">
				</td>
			</tr>
		</table>
	<?php
}


/**
 * Add data to cart item
 */
add_filter( 'woocommerce_add_cart_item_data', 'add_cart_item_data', 25, 2 );
function add_cart_item_data( $cart_item_meta, $product_id ) {
	if ( isset( $_POST ['customer_message'] )) {
		$custom_data  = array() ;
		$custom_data [ 'customer_message' ] = isset( $_POST ['customer_message'] ) ? sanitize_text_field ( $_POST ['customer_message'] ): "" ;
		$cart_item_meta ['custom_data']     = $custom_data ;
	}
	
	return $cart_item_meta;
}



/**
 * Display the custom data on cart and checkout page
 */
add_filter( 'woocommerce_get_item_data', 'get_item_data' , 25, 2 );
function get_item_data ( $other_data, $cart_item ) {
	if ( isset( $cart_item [ 'custom_data' ] ) ) {
		$custom_data  = $cart_item [ 'custom_data' ];
		$other_data[] =   array( 'name' => 'Message',
					 'display'  => $custom_data['customer_message'] );
	}
	
	return $other_data;
}


add_action( 'woocommerce_add_order_item_meta', 'add_order_item_meta' , 10, 2);
function add_order_item_meta ( $item_id, $values ) {
	if ( isset( $values [ 'custom_data' ] ) ) {
		$custom_data  = $values [ 'custom_data' ];
		wc_add_order_item_meta( $item_id, 'Message', $custom_data['customer_message'] );
	}
}

} else {

  echo 'Custom-Woocom requires woocommerce to be activated';
}


/*  end  code */