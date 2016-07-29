<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvNoteData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvNoteData
     */
    protected $PvNoteData = null;

    /**
     * @param PvNoteData $PvNoteData
     * @return $this
     */
    public function setPvNoteData($PvNoteData)
    {
        $this->PvNoteData = $PvNoteData;
        return $this;
    }

    /**
     * @return PvNoteData
     */
    public function getPvNoteData()
    {
        return $this->PvNoteData;
    }


}

