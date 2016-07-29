<?php

namespace Bixie\PerfectviewApi\Client;


trait PerfectviewEntityTypeTrait {
	/**
	 * @var PerfectviewFieldDataValueCollection
	 */
	protected $fieldDataValues;

	/**
	 * @return PerfectviewFieldDataValueCollection
	 */
	public function getFieldDataValues () {
		return $this->fieldDataValues;
	}

	/**
	 * @param PerfectviewFieldDataValueCollection $fieldDataValues
	 * @return PerfectviewEntityTypeTrait
	 */
	public function setFieldDataValues ($fieldDataValues) {
		$this->fieldDataValues = $fieldDataValues;
		return $this;
	}



}