<?php

// Adiciona campos personalizados ao formulário de finalização de compra //
add_filter( 'woocommerce_checkout_fields' , 'my_custom_checkout_fields' );

function my_custom_checkout_fields( $fields ) {
   $fields['billing']['billing_cpf'] = array(
	   'type'        => 'text',
      'label'     => __('CPF', 'woocommerce'),
      'placeholder' => __('Informe o CPF', 'woocommerce'),
      'required'  => true,
      'class'     => array('form-row-wide'),
      'clear'     => true
   );
   $fields['billing']['billing_neighborhood'] = array(
	   'type'        => 'text',
      'label'     => __('Bairro', 'woocommerce'),
      'placeholder' => __('Informe o bairro', 'woocommerce'),
      'required'  => true,
      'class'     => array('form-row-wide'),
      'clear'     => true
   );
   $fields['billing']['billing_number'] = array(
	   'type'        => 'text',
      'label'     => __('Numero', 'woocommerce'),
      'placeholder' => __('Informe o número da casa', 'woocommerce'),
	  'required' => true,
	  'class' => array('form-row-wide'),
	  'clear' => true
	);

return $fields;
}