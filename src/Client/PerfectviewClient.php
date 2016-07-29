<?php


namespace Bixie\PerfectviewApi\Client;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\RequestInterface;

class PerfectviewClient extends Client {

	/**
	 * @param $name
	 * @param $arguments
	 * @return mixed
	 */
	public function __call ($name, $arguments) {
		if (!$arguments[0] instanceof RequestInterface) {
			throw new \BadMethodCallException('Argument for PerfectviewClient must be of type RequestInterface');
		}
		return $this->call($name, $arguments[0]);
	}
}