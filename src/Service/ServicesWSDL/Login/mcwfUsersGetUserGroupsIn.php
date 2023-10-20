<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersGetUserGroupsIn
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
     * @var string $pmGetUserGroupsUserName
     */
    protected $pmGetUserGroupsUserName = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsIn
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmGetUserGroupsUserName()
    {
      return $this->pmGetUserGroupsUserName;
    }

    /**
     * @param string $pmGetUserGroupsUserName
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsIn
     */
    public function setPmGetUserGroupsUserName($pmGetUserGroupsUserName)
    {
      $this->pmGetUserGroupsUserName = $pmGetUserGroupsUserName;
      return $this;
    }

}
