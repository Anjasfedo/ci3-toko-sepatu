<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sepatu_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_price_by_brand($brand)
	{
		$prices = [
			'Nike' => 375000,
			'Adidas' => 300000,
			'Kickers' => 250000,
			'Eiger' => 275000,
			'Bucherri' => 400000
		];

		return isset($prices[$brand]) ? $prices[$brand] : 0;
	}
}
