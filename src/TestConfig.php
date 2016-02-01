<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk Plus - v3 config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_TestConfig extends Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_Config {
	public function get_payment_server_url() {
		return 'https://testidealkassa.frieslandbank.nl/ideal/iDEALv3';
	}
}
