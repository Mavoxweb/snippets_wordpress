<?php

//desebilitar campos checkout woocommerce//
add_filter( 'woocommerce_checkout_fields' , 'disable_company_field' );
function disable_company_field( $fields ) {
   unset( $fields['billing']['billing_company'] );
   return $fields;
 }
