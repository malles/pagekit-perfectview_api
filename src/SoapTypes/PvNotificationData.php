<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvNotificationData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var ActivityLocation
     */
    protected $ActivityLocation = null;

    /**
     * @var PvActivityData
     */
    protected $Activity = null;

    /**
     * @param guid $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param ActivityLocation $ActivityLocation
     * @return $this
     */
    public function setActivityLocation($ActivityLocation)
    {
        $this->ActivityLocation = $ActivityLocation;
        return $this;
    }

    /**
     * @return ActivityLocation
     */
    public function getActivityLocation()
    {
        return $this->ActivityLocation;
    }

    /**
     * @param PvActivityData $Activity
     * @return $this
     */
    public function setActivity($Activity)
    {
        $this->Activity = $Activity;
        return $this;
    }

    /**
     * @return PvActivityData
     */
    public function getActivity()
    {
        return $this->Activity;
    }


}

