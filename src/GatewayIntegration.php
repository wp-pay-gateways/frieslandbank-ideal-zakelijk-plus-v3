<?php

class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijkPlusV3_GatewayIntegration {
	public function __construct() {
		$this->id = 'frieslandbank-ideal-zakelijk-plus-v3';
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_ConfigFactory';
	}

	public function get_config_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Config';
	}

	public function get_gateway_class() {
		return 'Pronamic_WP_Pay_Gateways_IDealAdvancedV3_Gateway';
	}
}