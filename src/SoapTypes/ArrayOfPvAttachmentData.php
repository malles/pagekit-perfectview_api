<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvAttachmentData
{

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

