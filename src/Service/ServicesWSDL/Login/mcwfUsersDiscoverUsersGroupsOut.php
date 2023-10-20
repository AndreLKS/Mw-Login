<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersDiscoverUsersGroupsOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    /**
     * @var string $pmReturn
     */
    protected $pmReturn = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmReturn()
    {
      return $this->pmReturn;
    }

    /**
     * @param string $pmReturn
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsOut
     */
    public function setPmReturn($pmReturn)
    {
      $this->pmReturn = $pmReturn;
      return $this;
    }

}
