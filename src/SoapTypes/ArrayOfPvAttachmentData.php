<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvAttachmentData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvAttachmentData
     */
    protected $PvAttachmentData = null;

    /**
     * @param PvAttachmentData $PvAttachmentData
     * @return $this
     */
    public function setPvAttachmentData($PvAttachmentData)
    {
        $this->PvAttachmentData = $PvAttachmentData;
        return $this;
    }

    /**
     * @return PvAttachmentData
     */
    public function getPvAttachmentData()
    {
        return $this->PvAttachmentData;
    }


}

