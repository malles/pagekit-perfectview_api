<?php


namespace Bixie\PerfectviewApi\Client;


use Bixie\PerfectviewApi\SoapTypes\PvFieldValuesData;

interface PerfectviewEntityTypeInterface {

    /**
     * @return string|guid
     */
    public function getEntityTypeId ();

    /**
     * @return PvFieldValuesData
     */
    public function getFieldValues ();

    /**
     * @return PerfectviewFieldDataValueCollection
     */
    public function getFieldDataValues ();

    /**
     * @param PerfectviewFieldDataValueCollection $fieldDataValues
     * @return PerfectviewEntityTypeTrait
     */
    public function setFieldDataValues ($fieldDataValues);

}