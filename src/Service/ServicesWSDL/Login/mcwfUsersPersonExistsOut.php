<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersPersonExistsOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    /**
     * @var string $pmPersonExists
     */
    protected $pmPersonExists = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersPersonExistsOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmPersonExists()
    {
      return $this->pmPersonExists;
    }

    /**
     * @param string $pmPersonExists
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersPersonExistsOut
     */
    public function setPmPersonExists($pmPersonExists)
    {
      $this->pmPersonExists = $pmPersonExists;
      return $this;
    }

}
