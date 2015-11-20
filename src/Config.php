<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk Plus - v3 config
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_Config extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config {
	public function get_payment_server_url() {
		return 'https://idealkassa.frieslandbank.nl/ideal/iDEALv3';
	}

	public function get_certificates() {
		return array(
			dirname( __FILE__ ) . '/../certificates/frieslandbank.cer',
		);
	}
}
