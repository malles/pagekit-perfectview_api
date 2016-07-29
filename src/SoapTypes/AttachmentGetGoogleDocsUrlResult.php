<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class AttachmentGetGoogleDocsUrlResult
{

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

