<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvActivityAuditData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var \DateTime
     */
    protected $ClosedAt = null;

    /**
     * @var guid
     */
    protected $ClosedByUser = null;

    /**
     * @param \DateTime $ClosedAt
     * @return $this
     */
    public function setClosedAt($ClosedAt)
    {
        $this->ClosedAt = $ClosedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->ClosedAt;
    }

    /**
     * @param guid $ClosedByUser
     * @return $this
     */
    public function setClosedByUser($ClosedByUser)
    {
        $this->ClosedByUser = $ClosedByUser;
        return $this;
    }

    /**
     * @return guid
     */
    public function getClosedByUser()
    {
        return $this->ClosedByUser;
    }


}

