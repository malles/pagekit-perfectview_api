<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetImageResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

