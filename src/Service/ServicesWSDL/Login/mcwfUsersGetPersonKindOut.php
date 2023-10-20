<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersGetPersonKindOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    /**
     * @var string $pmPersonKind
     */
    protected $pmPersonKind = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmPersonKind()
    {
      return $this->pmPersonKind;
    }

    /**
     * @param string $pmPersonKind
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindOut
     */
    public function setPmPersonKind($pmPersonKind)
    {
      $this->pmPersonKind = $pmPersonKind;
      return $this;
    }

}
