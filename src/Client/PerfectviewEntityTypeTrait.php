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
     * @return PerfectviewFieldDataValueCollection
     */
    public function getFieldValues () {
        return new PerfectviewFieldDataValueCollection([], []);
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