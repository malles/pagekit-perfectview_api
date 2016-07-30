<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class AttachmentGetGoogleDocsUrlResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var string
     */
    protected $GoogleDocsUrl = null;

    /**
     * @param string $GoogleDocsUrl
     * @return $this
     */
    public function setGoogleDocsUrl($GoogleDocsUrl)
    {
        $this->GoogleDocsUrl = $GoogleDocsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleDocsUrl()
    {
        return $this->GoogleDocsUrl;
    }


}

