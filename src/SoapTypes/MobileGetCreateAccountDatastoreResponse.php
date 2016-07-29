<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileGetCreateAccountDatastoreResponse implements ResultInterface
{

    /**
     * @var MobileGetCreateAccountDatastoreResult
     */
    protected $MobileGetCreateAccountDatastoreResult = null;

    /**
     * @param MobileGetCreateAccountDatastoreResult
     * $MobileGetCreateAccountDatastoreResult
     * @return $this
     */
    public function setMobileGetCreateAccountDatastoreResult($MobileGetCreateAccountDatastoreResult)
    {
        $this->MobileGetCreateAccountDatastoreResult = $MobileGetCreateAccountDatastoreResult;
        return $this;
    }

    /**
     * @return MobileGetCreateAccountDatastoreResult
     */
    public function getMobileGetCreateAccountDatastoreResult()
    {
        return $this->MobileGetCreateAccountDatastoreResult;
    }


}

