<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvActivityFollowUpData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var \DateTime
     */
    protected $Start = null;

    /**
     * @var \DateTime
     */
    protected $End = null;

    /**
     * @var bool
     */
    protected $InAgenda = null;

    /**
     * @var int
     */
    protected $ReminderPeriodInMinutes = null;

    /**
     * @var guid
     */
    protected $OwnerUserId = null;

    /**
     * @var guid
     */
    protected $PlacedInQueueId = null;

    /**
     * @param \DateTime $Start
     * @return $this
     */
    public function setStart($Start)
    {
        $this->Start = $Start;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->Start;
    }

    /**
     * @param \DateTime $End
     * @return $this
     */
    public function setEnd($End)
    {
        $this->End = $End;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->End;
    }

    /**
     * @param bool $InAgenda
     * @return $this
     */
    public function setInAgenda($InAgenda)
    {
        $this->InAgenda = $InAgenda;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInAgenda()
    {
        return $this->InAgenda;
    }

    /**
     * @param int $ReminderPeriodInMinutes
     * @return $this
     */
    public function setReminderPeriodInMinutes($ReminderPeriodInMinutes)
    {
        $this->ReminderPeriodInMinutes = $ReminderPeriodInMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderPeriodInMinutes()
    {
        return $this->ReminderPeriodInMinutes;
    }

    /**
     * @param guid $OwnerUserId
     * @return $this
     */
    public function setOwnerUserId($OwnerUserId)
    {
        $this->OwnerUserId = $OwnerUserId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getOwnerUserId()
    {
        return $this->OwnerUserId;
    }

    /**
     * @param guid $PlacedInQueueId
     * @return $this
     */
    public function setPlacedInQueueId($PlacedInQueueId)
    {
        $this->PlacedInQueueId = $PlacedInQueueId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getPlacedInQueueId()
    {
        return $this->PlacedInQueueId;
    }


}

