<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvAuditData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var \DateTime
     */
    protected $CreatedAt = null;

    /**
     * @var guid
     */
    protected $CreatedByUser = null;

    /**
     * @var \DateTime
     */
    protected $ModifiedAt = null;

    /**
     * @var guid
     */
    protected $ModifiedByUser = null;

    /**
     * @param \DateTime $CreatedAt
     * @return $this
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param guid $CreatedByUser
     * @return $this
     */
    public function setCreatedByUser($CreatedByUser)
    {
        $this->CreatedByUser = $CreatedByUser;
        return $this;
    }

    /**
     * @return guid
     */
    public function getCreatedByUser()
    {
        return $this->CreatedByUser;
    }

    /**
     * @param \DateTime $ModifiedAt
     * @return $this
     */
    public function setModifiedAt($ModifiedAt)
    {
        $this->ModifiedAt = $ModifiedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->ModifiedAt;
    }

    /**
     * @param guid $ModifiedByUser
     * @return $this
     */
    public function setModifiedByUser($ModifiedByUser)
    {
        $this->ModifiedByUser = $ModifiedByUser;
        return $this;
    }

    /**
     * @return guid
     */
    public function getModifiedByUser()
    {
        return $this->ModifiedByUser;
    }


}

