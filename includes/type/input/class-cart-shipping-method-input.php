<?php
/**
 * WPInputObjectType - CartShippingMethodInput
 *
 * @package WPGraphQL\WooCommerce\Type\WPInputObject
 * @since   0.1.0
 */

namespace WPGraphQL\WooCommerce\Type\WPInputObject;

/**
 * Class Cart_Shipping_Method_Input
 */
class Cart_Shipping_Method_Input {

	/**
	 * Registers type
	 */
	public static function register() {
		register_graphql_input_type(
			'CartShippingMethodInput',
			[
				'description' => __( 'Cart shipping method input', 'wp-graphql-woocommerce' ),
				'fields'      => [
					'id' => [
						'type'        => [ 'non_null' => 'Int' ],
						'description' => __( 'Shipping method id', 'wp-graphql-woocommerce' ),
					],
					'method'  => [
						'type'        => [ 'non_null' => 'String' ],
						'description' => __( 'Selected method', 'wp-graphql-woocommerce' ),
					],
				],
			]
		);
	}
}
