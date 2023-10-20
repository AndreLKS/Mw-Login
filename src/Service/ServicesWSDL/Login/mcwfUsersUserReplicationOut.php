<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersUserReplicationOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

}
