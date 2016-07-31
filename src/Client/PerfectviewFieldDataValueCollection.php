<?php

namespace Bixie\PerfectviewApi\Client;


use Bixie\PerfectviewApi\SoapTypes\PvFieldData;
use Bixie\PerfectviewApi\SoapTypes\PvFieldValueData;

class PerfectviewFieldDataValueCollection implements \IteratorAggregate, \JsonSerializable {
    /**
     * @var PerfectviewFieldDataValue[]
     */
    protected $dataValues = [];
    /**
     * @var array
     */
    protected $namesIndex = [];

    /**
     * Constructor.
     * @param PvFieldData [] $fieldDatas
     * @param array          $fieldValueDatas
     */
    public function __construct (array $fieldDatas, array $fieldValueDatas) {
        foreach ($fieldDatas as $fieldData) {
            $this->add((new PerfectviewFieldDataValue())
                ->fromFieldData($fieldData)

            );
        };
        $this->setValueDatas($fieldValueDatas);
    }

    /**
     * @param PvFieldValueData[] $valueDatas
     */
    public function setValueDatas (array $valueDatas) {
        foreach ($valueDatas as $valueData) {
            if ($this->get($valueData->getId())) {
                $this->get($valueData->getId())->setValue($valueData->getValue());
            }
        }
    }

    /**
     * Adds type to collection.
     * @param PerfectviewFieldDataValue $dataValue
     */
    public function add (PerfectviewFieldDataValue $dataValue) {
        $this->namesIndex[$dataValue->getName()] = $dataValue->getId();
        $this->dataValues[$dataValue->getId()] = $dataValue;
    }

    /**
     * @param string $Id
     * @return mixed|null
     */
    public function get ($Id) {
        if (isset($this->dataValues[$Id])) {
            return $this->dataValues[$Id];
        }
        return false;
    }

    /**
     * @param string $Name
     * @return mixed|null
     */
    public function byName ($Name) {
        if (isset($this->namesIndex[$Name], $this->dataValues[$this->namesIndex[$Name]])) {
            return $this->dataValues[$this->namesIndex[$Name]];
        }
        return false;
    }

    /**
     * @param string $Name
     * @param null   $default
     * @return mixed|null
     */
    public function getValue ($Name, $default = null) {
        if ($this->byName($Name)) {
            return $this->byName($Name)->getValue() ?: $default;
        }
        return $default;
    }

    /**
     * @return PerfectviewFieldDataValue[]
     */
    public function all () {
        return $this->dataValues;
    }

    /**
     * IteratorAggregate interface implementation.
     * @return \ArrayIterator
     */
    public function getIterator () {
        return new \ArrayIterator($this->dataValues);
    }

    /**
     * @return array
     */
    function jsonSerialize () {
        return $this->all();
    }
}