<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\UsersGetActive;
use Bixie\PerfectviewApi\SoapTypes\UsersGetRoles;
use Bixie\PerfectviewApi\SoapTypes\WorkflowGetAll;
use Bixie\PerfectviewApi\SoapTypes\WorkflowStepGetAll;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGet;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGetFields;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGetAll;

trait StaticDataApiTrait {

	/**
	 * @var array
	 */
	protected $entityDatas;
	/**
	 * @var array
	 */
	protected $entityTypes;
	/**
	 * @var array
	 */
	protected $workflows;
	/**
	 * @var array
	 */
	protected $users;
	/**
	 * @var array
	 */
	protected $cache = [];

	/**
	 * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $entityId
	 * @return mixed
	 */
	public function getEntityData ($entityId) {
		if (!isset($this->entityDatas[$entityId])) {
			$cache = $this->getCache(sprintf('%%s/%%s.entityfields.%s.cache', $entityId));
			if ($cache['valid']) {
				$this->entityDatas[$entityId] = unserialize(file_get_contents($cache['file']));
			} else {
				try {
					$fieldDatas = [];
					$entityType = $this->call((new EntityTypeGet())->setId($entityId))->getEntityType();
					if ($fields = $this->call((new EntityTypeGetFields())
						->setEntityTypeId($entityType->getId())
					)->getFields()->getPvFieldData()) {
						foreach ($fields as $field) {
							$fieldDatas[$field->getId()] = $field;
						}
					}
					$this->entityDatas[$entityId] = compact('entityType', 'fieldDatas');
				} catch (PerfectviewApiException $e) {
//					$api_error = $e->getMessage();
					//@todo set logger?
				}
				$this->writeCache($cache['file'], serialize($this->entityDatas[$entityId]));
			}
		}

		return $this->entityDatas[$entityId];
	}

	/**
	 * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $workflowId
	 * @return mixed
	 */
	public function getWorkflowEntityData ($workflowId) {
		$this->getWorkflows();
		if(isset($this->workflows[$workflowId])) {
			return $this->getEntityData($this->workflows[$workflowId]['workflow']->getEntityTypeId());
		}
		return false;
	}

	/**
	 * @return array
	 */
	public function getEntityTypes () {
		if (!$this->entityTypes) {
			$cache = $this->getCache('%s/%s.entitytypes.cache');
			if ($cache['valid']) {

				$this->entityTypes = unserialize(file_get_contents($cache['file']));

			} else {
				try {
					$this->entityTypes = [];
					$entityTypes = $this->call(
						(new EntityTypeGetAll())
					)->getEntityTypes()->getPvEntityTypeData();

					foreach ($entityTypes as $entityType) {
						$this->entityTypes[$entityType->getId()] = $entityType;
					}
				} catch (PerfectviewApiException $e) {
					//@todo set logger?
				}
				$this->writeCache($cache['file'], serialize($this->entityTypes));

			}
		}
		return $this->entityTypes;
	}

	/**
	 * @return array
	 */
	public function getWorkflows () {
		if (!$this->workflows) {
			$cache = $this->getCache('%s/%s.workflows.cache');
			if ($cache['valid']) {

				$this->workflows = unserialize(file_get_contents($cache['file']));

			} else {
				try {
					$this->workflows = [];
					$workflows = $this->call(
						(new WorkflowGetAll())
					)->getWorkflows()->getPvWorkflowData();

					foreach ($workflows as $workflow) {
						$steps = $this->call(
							(new WorkflowStepGetAll())->setWorkflowId($workflow->getId())
						)->getWorkflowSteps()->getPvWorkflowStepData();

						$this->workflows[$workflow->getId()] = compact('workflow', 'steps');
					}
				} catch (PerfectviewApiException $e) {
					//@todo set logger?
				}
				$this->writeCache($cache['file'], serialize($this->workflows));

			}
		}
		return $this->workflows;
	}

	/**
	 * @return array
	 */
	public function getUsers () {
		if (!$this->users) {
			$cache = $this->getCache('%s/%s.users.cache');
			if ($cache['valid']) {

				$this->users = unserialize(file_get_contents($cache['file']));

			} else {
				try {
					$this->users = [];
					$users = $this->call(
						(new UsersGetActive())->setIncludeImages(true)
					)->getUsers()->getPvUserData();

					foreach ($users as $user) {
						$roles = $this->call(
							(new UsersGetRoles())->setUserId($user->getId())
						)->getRoles()->getPvRoleData();

						$this->users[$user->getId()] = compact('user', 'roles');
					}
				} catch (PerfectviewApiException $e) {
					//@todo set logger?
				}
				$this->writeCache($cache['file'], serialize($this->users));

			}
		}
		return $this->users;
	}

	/**
	 * Gets cache info.
	 * @param  string $file
	 * @return string|bool
	 */
	protected function getCache ($file) {
		if (!$this->app['path.cache']) {
			return null;
		}

		if (!isset($this->cache[$file])) {
			$key = sha1(serialize($this->config) . $this->app['system']->config('secret'));
			$this->cache[$file] = [
				'key' => $key,
				'file' => sprintf($file, $this->app['path.cache'], $key)
			];
			$this->cache[$file]['valid'] = file_exists($this->cache[$file]['file']);
		}

		return $this->cache[$file];
	}

	/**
	 * Writes cache file.
	 * @param  string $file
	 * @param  string $content
	 * @throws \RuntimeException
	 */
	protected function writeCache ($file, $content) {
		if (!file_put_contents($file, $content)) {
			throw new \RuntimeException("Failed to write cache file ($file).");
		}
	}

}