<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersGetPersonKindIn
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
     * @var string $pmPersonName
     */
    protected $pmPersonName = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindIn
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmPersonName()
    {
      return $this->pmPersonName;
    }

    /**
     * @param string $pmPersonName
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindIn
     */
    public function setPmPersonName($pmPersonName)
    {
      $this->pmPersonName = $pmPersonName;
      return $this;
    }

}
