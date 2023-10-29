<?php
/* WooCommerce: The Code Below Removes Checkout Fields */
/* put into function.php */

add_filter( 'woocommerce_checkout_fields' , 'customization_woo_checkout_fields' );
 function customization_woo_checkout_fields( $fields ) {

	
	//  حذف فیلد شهر , delete city field
	unset($fields['billing']['billing_city']); 
	unset($fields['shipping']['shipping_city']);
	
	//  حذف فیلد کشور , delete country field
	unset($fields['billing']['billing_country']); 
	unset($fields['shipping']['shipping_country']); 

	// 	حذف فیلد استان یا ایالت , delete state field
	unset($fields['billing']['billing_state']); 
	unset($fields['shipping']['shipping_state']); 
	 
	// 	حذف فیلد نام خانوادگی , delete lastname field
	unset($fields['billing']['billing_last_name']); 
	unset($fields['shipping']['shipping_last_name']);

	// 	غیر اجباری کردن کد پستی	, unrequired postcode
	$fields['billing']['billing_postcode']['required'] = false;
	$fields['shipping']['shipping_postcode']['required'] = false;
	 
	//	غیر اجباری کردن ایمیل , unrequired email
	$fields['billing']['billing_email']['required'] = false;
	 
	//  تغییر نام قسمت نام , edit lable firstname 
	$fields['billing']['billing_first_name']['label'] = 'fullname';
	$fields['shipping']['shipping_first_name']['label'] = 'fullname';
	 
	//  تغییر نام قسمت آدرس , edit lable addresses
	$fields['billing']['billing_address_1']['label'] = 'complete Addr';  
	$fields['shipping']['shipping_address_1']['label'] = 'complete Addr';  
	 
	//   عوض کردن کلاس نام برای تغییر سایز آن , change class name of a feild to change input size
	$fields['billing']['billing_first_name']['class'] = 'form-row-wide';
	$fields['shipping']['shipping_first_name']['class'] = 'form-row-wide';
	 
	//  تغییر متن جایگزین بخش آدرس , change placeholder of address
 	$fields['billing']['billing_address_1']['placeholder'] = 'Your new place holder';
 	$fields['shipping']['shipping_address_1']['placeholder'] = 'Your new place holder';
	 
return $fields;
}
