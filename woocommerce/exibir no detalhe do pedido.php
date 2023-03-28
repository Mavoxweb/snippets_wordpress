<?php

// vizualizar os campos personalizados ao detalhamento do pedido
add_action( 'woocommerce_admin_order_data_after_billing_address', 'custom_checkout_field_display_admin_order_meta', 10, 1 );
function custom_checkout_field_display_admin_order_meta($order){
    echo '<p><strong>'.__('CPF').':</strong> ' . get_post_meta( $order->get_id(), '_billing_cpf', true ) . '</p>';
    echo '<p><strong>'.__('Bairro').':</strong> ' . get_post_meta( $order->get_id(), '_billing_neighborhood', true ) . '</p>';
    echo '<p><strong>'.__('Numero do endereço').':</strong> ' . get_post_meta( $order->get_id(), '_billing_number', true ) . '</p>';
}
