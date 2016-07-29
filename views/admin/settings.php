<?php $view->script('perfectview_api-settings', 'bixie/perfectview_api:app/bundle/perfectview_api-settings.js', ['vue']) ?>

<div id="perfectview_api-settings" class="uk-form uk-form-horizontal">


	<div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
		<div data-uk-margin>

			<h2 class="uk-margin-remove">{{ 'Perfectview Api Settings' | trans }}</h2>

		</div>
		<div data-uk-margin>

			<button class="uk-button uk-button-primary" @click="save">{{ 'Save' | trans }}</button>

		</div>
	</div>

	<div class="uk-form-row">
		<label for="text-api_key" class="uk-form-label">{{ 'API key' | trans }}</label>
		<div class="uk-form-controls">
			<input id="text-api_key" type="text" name="api_key" class="uk-form-width-large" v-model="config.api_key"/>
		</div>
	</div>

	<div class="uk-form-row">
		<label for="text-database_id" class="uk-form-label">{{ 'Database id' | trans }}</label>
		<div class="uk-form-controls">
			<input id="text-database_id" type="text" name="database_id" class="uk-form-width-large" v-model="config.database_id"/>
		</div>
	</div>

	<div class="uk-form-row">
		<label for="text-user_id" class="uk-form-label">{{ 'User id' | trans }}</label>
		<div class="uk-form-controls">
			<input id="text-user_id" type="text" name="user_id" class="uk-form-width-large" v-model="config.user_id"/>
		</div>
	</div>

</div>
