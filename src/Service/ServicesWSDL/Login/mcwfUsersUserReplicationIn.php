<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersUserReplicationIn
{

    /**
     * @var string $flowInstanceID
     */
    protected $flowInstanceID = null;

    /**
     * @var string $flowName
     */
    protected $flowName = null;

    /**
     * @var string $pmUserReplicationXML
     */
    protected $pmUserReplicationXML = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFlowInstanceID()
    {
      return $this->flowInstanceID;
    }

    /**
     * @param string $flowInstanceID
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationIn
     */
    public function setFlowInstanceID($flowInstanceID)
    {
      $this->flowInstanceID = $flowInstanceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlowName()
    {
      return $this->flowName;
    }

    /**
     * @param string $flowName
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmUserReplicationXML()
    {
      return $this->pmUserReplicationXML;
    }

    /**
     * @param string $pmUserReplicationXML
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationIn
     */
    public function setPmUserReplicationXML($pmUserReplicationXML)
    {
      $this->pmUserReplicationXML = $pmUserReplicationXML;
      return $this;
    }

}
