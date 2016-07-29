<?php

namespace Bixie\PerfectviewApi\Client;

use Bixie\PerfectviewApi\SoapTypes\ApiCredentials;

interface PerfectviewMethodInterface {
	/**
	 * @param ApiCredentials $credentials
	 * @return $this
	 */
	public function setCredentials ($credentials);
}