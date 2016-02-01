<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk Plus - v3 integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2016
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id         = 'frieslandbank-ideal-zakelijk-plus-v3';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk Plus - v3';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_ConfigFactory';
	}
}
