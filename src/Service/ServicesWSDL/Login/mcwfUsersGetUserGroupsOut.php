<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersGetUserGroupsOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    /**
     * @var string $pmGetUserGroupsResult
     */
    protected $pmGetUserGroupsResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErroExecucao()
    {
      return $this->erroExecucao;
    }

    /**
     * @param string $erroExecucao
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmGetUserGroupsResult()
    {
      return $this->pmGetUserGroupsResult;
    }

    /**
     * @param string $pmGetUserGroupsResult
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsOut
     */
    public function setPmGetUserGroupsResult($pmGetUserGroupsResult)
    {
      $this->pmGetUserGroupsResult = $pmGetUserGroupsResult;
      return $this;
    }

}
