<?php

//reorganização dos campos de checkout woocommerce//
add_filter( 'woocommerce_checkout_fields' , 'reorder_checkout_fields' );

function reorder_checkout_fields( $fields ) {
   $fields['billing']['billing_first_name']['priority'] = 5;
   $fields['billing']['billing_last_name']['priority'] = 10;
   $fields['billing']['billing_last_name']['priority'] = 10;
   $fields['billing']['billing_cpf']['priority'] = 20;
   $fields['billing']['billing_address_1']['priority'] = 30;
   $fields['billing']['billing_address_2']['priority'] = 40;
   $fields['billing']['billing_number']['priority'] = 50;
   $fields['billing']['billing_neighborhood']['priority'] = 60;
   $fields['billing']['billing_city']['priority'] = 70;
   $fields['billing']['billing_state']['priority'] = 80;
   $fields['billing']['billing_postcode']['priority'] = 90;
   

   return $fields;
}
