<?php

namespace Bixie\PerfectviewApi\Client;


use Bixie\PerfectviewApi\SoapTypes\PvFieldData ;

/**
 * Class PerfectviewFieldDataValue
 * @package Bixie\PerfectviewApi\Client
 */
class PerfectviewFieldDataValue implements \JsonSerializable {

	use	JsonSerializableTrait;
	/**
	 * @var string|guid
	 */
	protected $Id;

	/**
	 * @var string
	 */
	protected $Name;

	/**
	 * @var string
	 */
	protected $Label;

	/**
	 * @var string
	 */
	protected $Description;

	/**
	 * @var integer
	 */
	protected $SortIndex;

	/**
	 * @var string
	 */
	protected $CategoryName;

	/**
	 * @var bool
	 */
	protected $IsReadOnly;

	/**
	 * @var string
	 */
	protected $Type;

	/**
	 * @var string|mixed
	 */
	protected $Value;

	/**
	 * @param PvFieldData $fieldData
	 * @return $this
	 */
	public function fromFieldData (PvFieldData $fieldData) {
		foreach ((new \ReflectionClass($fieldData))->getProperties() as $reflectionProperty) {
			$key = $reflectionProperty->getName();
			$reflectionProperty->setAccessible(true);
			if (property_exists($this, $key)) {
				$this->$key = $reflectionProperty->getValue($fieldData);
			}
		}
		return $this;
	}

	/**
	 * @return string|guid
	 */
	public function getId () {
		return $this->Id;
	}

	/**
	 * @param mixed $Id
	 * @return PerfectviewFieldDataValue
	 */
	public function setId ($Id) {
		$this->Id = $Id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName () {
		return $this->Name;
	}

	/**
	 * @param mixed $Name
	 * @return PerfectviewFieldDataValue
	 */
	public function setName ($Name) {
		$this->Name = $Name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLabel () {
		return $this->Label;
	}

	/**
	 * @param mixed $Label
	 * @return PerfectviewFieldDataValue
	 */
	public function setLabel ($Label) {
		$this->Label = $Label;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescription () {
		return $this->Description;
	}

	/**
	 * @param mixed $Description
	 * @return PerfectviewFieldDataValue
	 */
	public function setDescription ($Description) {
		$this->Description = $Description;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSortIndex () {
		return $this->SortIndex;
	}

	/**
	 * @param mixed $SortIndex
	 * @return PerfectviewFieldDataValue
	 */
	public function setSortIndex ($SortIndex) {
		$this->SortIndex = $SortIndex;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCategoryName () {
		return $this->CategoryName;
	}

	/**
	 * @param mixed $CategoryName
	 * @return PerfectviewFieldDataValue
	 */
	public function setCategoryName ($CategoryName) {
		$this->CategoryName = $CategoryName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIsReadOnly () {
		return $this->IsReadOnly;
	}

	/**
	 * @param mixed $IsReadOnly
	 * @return PerfectviewFieldDataValue
	 */
	public function setIsReadOnly ($IsReadOnly) {
		$this->IsReadOnly = $IsReadOnly;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getType () {
		return $this->Type;
	}

	/**
	 * @param mixed $Type
	 * @return PerfectviewFieldDataValue
	 */
	public function setType ($Type) {
		$this->Type = $Type;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValue () {
		return $this->Value;
	}

	/**
	 * @param mixed $Value
	 * @return PerfectviewFieldDataValue
	 */
	public function setValue ($Value) {
		$this->Value = $Value;
		return $this;
	}

}