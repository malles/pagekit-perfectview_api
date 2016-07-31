<?php

namespace Bixie\PerfectviewApi;

use Bixie\PerfectviewApi\Event\EmailPrepareListener;
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
		$app->on('boot', function () use ($app) {
			$this->framework = App::module('bixie/framework');
			$app->subscribe(
				new EmailPrepareListener
			);

		});

	}

}
