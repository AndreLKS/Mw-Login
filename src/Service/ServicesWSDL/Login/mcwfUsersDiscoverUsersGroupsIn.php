<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersDiscoverUsersGroupsIn
{

    /**
     * @var string $flowInstanceID
     */
    protected $flowInstanceID = null;

    /**
     * @var string $flowName
     */
    protected $flowName = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsIn
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
      return $this;
    }

}
