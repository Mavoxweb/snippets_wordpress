<?php

/* V.12.1 O SUCESSO*/

//salvar os dados personalizados no billing e replicar para o Shipping
add_filter( 'woocommerce_rest_prepare_shop_order_object', 'add_billing_custom_fields_to_order_rest_api', 10, 3 );
function add_billing_custom_fields_to_order_rest_api( $response, $order, $request ) {
    // Get billing data
    $billing_data = $order->get_address( 'billing' );
    
    // Get custom fields
    $billing_cpf = $order->get_meta( '_billing_cpf', true );
    $billing_neighborhood = $order->get_meta( '_billing_neighborhood', true );
    $billing_number = $order->get_meta( '_billing_number', true );
    
    // Add custom fields to billing data
    $billing_data['cpf'] = $billing_cpf;
    $billing_data['neighborhood'] = $billing_neighborhood;
    $billing_data['number'] = $billing_number;

    // Set the updated billing data
    $response->data['billing'] = $billing_data;

    return $response;
	
	// Adicionar os campos do billing para o shipping
    $shipping = $order->get_address( 'shipping' );
    $billing = $order->get_address( 'billing' );
    $shipping['cpf'] = $billing['cpf'];
    $shipping['neighborhood'] = $billing['neighborhood'];
    $shipping['number'] = $billing['number'];
    $order->set_address( 'shipping', $shipping );
	
}