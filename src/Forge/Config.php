<?php

namespace Forge;

class Config {
	protected $xml;

	public function __construct($file = false) {
		$xml = simplexml_load_string(@file_get_contents($file));
		$json = json_encode($xml);
		$this->xml = json_decode($json, TRUE);
	}

	public function read() {
		return $this->xml;
	}
}
