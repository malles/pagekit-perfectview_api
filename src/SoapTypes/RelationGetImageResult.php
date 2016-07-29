<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationGetImageResult
{

    /**
     * @var string
     */
    protected $Base64EncodedImage = null;

    /**
     * @param string $Base64EncodedImage
     * @return $this
     */
    public function setBase64EncodedImage($Base64EncodedImage)
    {
        $this->Base64EncodedImage = $Base64EncodedImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64EncodedImage()
    {
        return $this->Base64EncodedImage;
    }


}

