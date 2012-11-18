<?php

/**
 * Static Shop config for swipestripe
 * allows setting config vars via _config.php rather than DB
 * 
 * @author Tim Klein, Dodat Ltd <tim{at}dodat{dot}co{dot}nz>
 */

class StaticShopConfig extends DataExtension {

	static $data = array(
		"LicenceKey" 		=> "XXXX",
		"BaseCurrency" 		=> "NZD",
		"BaseCurrencySymbol"=> "$"
	);

	static function enable() {
		 ShopAdmin::$hidden_sections = array(
			"ShopAdmin_LicenceKeyAdmin",
			"ShopAdmin_BaseCurrency"
		);
		ShopAdmin::$managed_models = array(
			"Order",
			"Customer",
			"ShopConfig"
		); 
		Object::add_extension("ShopConfig", __CLASS__);
	}

	static function set($field, $value) {
		self::$data[$field] = $value;
	}

	function getLicenceKey() {
		return self::$data["LicenceKey"];
	}

	function getBaseCurrency() {
		return self::$data["BaseCurrency"];
	}

	function getBaseCurrencySymbol() {
		return self::$data["BaseCurrencySymbol"];
	}
}
