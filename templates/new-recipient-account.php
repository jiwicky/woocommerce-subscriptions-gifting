<p><?php _e( 'We just need a few details from you to complete your account creation.' ); ?></p>
<form action="" method="post">
<?php

	$form_fields = WCSG_Recipient_Details::get_new_recipient_account_form_fields();

	foreach ( $form_fields as $key => $field ){
		if ( 'shipping_country' == $key ){
			echo '<h3>Shipping Address</h3>';
		}
		woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : '' );
	}

?>
<input type="hidden" name="wcsg_new_recipient_customer" value="<?php echo esc_attr( wp_get_current_user()->ID ); ?>" />
<input type="submit" class="button" name="save_address" value="<?php _e( 'Save' ); ?>" />

</form>
