<?php

class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_Integration extends Pronamic_WP_Pay_Gateways_IDealAdvancedV3_AbstractIntegration {
	public function __construct() {
		$this->id         = 'frieslandbank-ideal-zakelijk-plus-v3';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk Plus - v3';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}
}
