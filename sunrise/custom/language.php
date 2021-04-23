<?php
/* languages customizations
*/
	if ( !function_exists('reach_change_theme_text') ){
		function reach_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ($domain) {
					/* case 'woocommerce':
						switch ( $translated_text ) {
				            case 'Place order' :
				                $translated_text = __( 'Make Payment',  'woocommerce'  );
				                break;
				           case 'Add to cart':
				            	$translated_text = __( 'Continue to Checkout',  'woocommerce'  );
				            	break;
				        }
						break; */

						case 'give': {
							switch ( $translated_text ) {
									 case 'Company Name' :
											 $translated_text =  'Organization Affiliation';
											 break;
							 		 case 'Donate on behalf of Company' : // remove Category: from front of blog archives.
												 $translated_text =  'Donate on behalf of an organziation or club';
												break;
							 }
							 break;
						} // end give
						case 'oshin': {
							switch ( $translated_text ) {
									 case 'Category: ' : // remove Category: from front of blog archives.
											 $translated_text =  '';
											 break;
							 }
							 break;
						} // end ohin
					default:
						/* switch ( $translated_text ) {
				            case 'Category' :
				                $translated_text = __( '',  $domain  );
				                break;
				         	case 'Type here...':
				            	$translated_text = __( 'Search...',  $domain  );
				            	break;
				            case 'BLOG CATEGORIES':
				            	$translated_text = __( 'Found in',  $domain  );
				            	break;
				            case 'Share this post:':
				            	$translated_text = __('Share', ' $domain );
				            	break;
				        } */

				}


	    	return $translated_text;
		} // end function reach_change_theme_text
		add_filter( 'gettext', 'reach_change_theme_text', 20, 3 );
	} // end if not exists reach_change_theme_text
?>
