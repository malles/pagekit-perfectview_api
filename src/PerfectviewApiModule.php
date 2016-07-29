<?php

namespace Bixie\PerfectviewApi;

use Pagekit\Application as App;
use Pagekit\Module\Module;

class PerfectviewApiModule extends Module {

	/**
	 * {@inheritdoc}
	 */
	public function main (App $app) {

		$app['pv_api'] = function ($app) {
		    return new PerfectviewApi($app, $this->config());
		};


	}


}
