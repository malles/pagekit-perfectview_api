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

	<div class="uk-grid uk-grid-width-medium-1-2" data-uk-grid-margin>
	    <div>

			<div class="uk-form-row">
				<label for="config-api_key" class="uk-form-label">{{ 'API key' | trans }}</label>
				<div class="uk-form-controls">
					<input id="config-api_key" type="text" name="api_key" class="uk-form-width-large" v-model="config.api_key"/>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-database_id" class="uk-form-label">{{ 'Database id' | trans }}</label>
				<div class="uk-form-controls">
					<input id="config-database_id" type="text" name="database_id" class="uk-form-width-large" v-model="config.database_id"/>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-user_id" class="uk-form-label">{{ 'User id' | trans }}</label>
				<div class="uk-form-controls">
					<input id="config-user_id" type="text" name="user_id" class="uk-form-width-large" v-model="config.user_id"/>
				</div>
			</div>

			<hr/>

			<div class="uk-form-row">
				<label for="config-search_types" class="uk-form-label">{{ 'Search types' | trans }}</label>
				<div class="uk-form-controls">
					<select name="search_types" id="config-search_types" class="uk-form-width-large"
							v-model="config.search_types" multiple="multiple" size="6">
						<option v-for="entityType in entityTypes | orderBy 'DescriptionSingular'" :value="entityType.Id">
							{{ entityType.DescriptionSingular }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-person_types" class="uk-form-label">{{ 'Person types' | trans }}</label>
				<div class="uk-form-controls">
					<select name="person_types" id="config-person_types" class="uk-form-width-large"
							v-model="config.person_types" multiple="multiple" size="6">
						<option v-for="entityType in entityTypes | orderBy 'DescriptionSingular'" :value="entityType.Id">
							{{ entityType.DescriptionSingular }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-organistation_types" class="uk-form-label">{{ 'Organisation types' | trans }}</label>
				<div class="uk-form-controls">
					<select name="organistation_types" id="config-organistation_types" class="uk-form-width-large"
							v-model="config.organistation_types" multiple="multiple" size="6">
						<option v-for="entityType in entityTypes | orderBy 'DescriptionSingular'" :value="entityType.Id">
							{{ entityType.DescriptionSingular }}
						</option>
					</select>
				</div>
			</div>

		</div>
	    <div>

			<div class="uk-form-row">
				<label for="config-person_type" class="uk-form-label">{{ 'Particulier Type' | trans }}</label>
				<div class="uk-form-controls">
					<select name="person_type" id="config-person_type" class="uk-form-width-medium"
							v-model="config.person_type">
						<option value="">{{ 'Please select' | trans }}</option>
						<option v-for="entityType in entityTypes | orderBy 'DescriptionSingular'" :value="entityType.Id">
							{{ entityType.DescriptionSingular }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-person_relationship_type" class="uk-form-label">{{ 'Particulier Relationship Type' | trans }}</label>
				<div class="uk-form-controls">
					<select name="person_relationship_type" id="config-person_relationship_type" class="uk-form-width-medium"
							v-model="config.person_relationship_type">
						<option value="">{{ 'Please select' | trans }}</option>
						<option v-for="entityType in entityTypes | orderBy 'DescriptionSingular'" :value="entityType.Id">
							{{ entityType.DescriptionSingular }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-communication_workflow" class="uk-form-label">{{ 'Communication workflow' | trans }}</label>
				<div class="uk-form-controls">
					<select name="communication_workflow" id="config-communication_workflow" class="uk-form-width-medium"
							v-model="config.communication_workflow">
						<option value="">{{ 'Please select' | trans }}</option>
						<option v-for="workflow in workflows | orderBy 'Name'" :value="workflow.workflow.Id">
							{{ workflow.workflow.Name }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-communication_workflow_step" class="uk-form-label">{{ 'Communication workflowstep' | trans }}</label>
				<div class="uk-form-controls">
					<select name="communication_workflow_step" id="config-communication_workflow_step" class="uk-form-width-medium"
							v-model="config.communication_workflow_step">
						<option value="">{{ 'Please select' | trans }}</option>
						<option v-for="step in communication_workflow_steps" :value="step.Id">
							{{ step.Name }}
						</option>
					</select>
				</div>
			</div>

			<div class="uk-form-row">
				<label for="config-communication_user" class="uk-form-label">{{ 'Communication User' | trans }}</label>
				<div class="uk-form-controls">
					<select name="communication_user" id="config-communication_user" class="uk-form-width-medium"
							v-model="config.communication_user">
						<option value="">{{ 'Please select' | trans }}</option>
						<option v-for="user in users | orderBy 'DisplayName'" :value="user.user.Id">
							{{ user.user.DisplayName }}
						</option>
					</select>
				</div>
			</div>

		</div>
	</div>

</div>
