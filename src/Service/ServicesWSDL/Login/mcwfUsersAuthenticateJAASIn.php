<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersAuthenticateJAASIn
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
     * @var int $pmEncrypted
     */
    protected $pmEncrypted = null;

    /**
     * @var string $pmUserName
     */
    protected $pmUserName = null;

    /**
     * @var string $pmUserPassword
     */
    protected $pmUserPassword = null;


    #######################################
    /**
     * @var string $logUsu
     */
    protected $logUsu = null;

    /**
     * @var string $senUsu
     */
    protected $senUsu = null;


    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPmEncrypted()
    {
      return $this->pmEncrypted;
    }

    /**
     * @param int $pmEncrypted
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn
     */
    public function setPmEncrypted($pmEncrypted)
    {
      $this->pmEncrypted = $pmEncrypted;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmUserName()
    {
      return $this->pmUserName;
    }

    /**
     * @param string $pmUserName
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn
     */
    public function setPmUserName($pmUserName)
    {
      $this->pmUserName = $pmUserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmUserPassword()
    {
      return $this->pmUserPassword;
    }

    /**
     * @param string $pmUserPassword
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn
     */
    public function setPmUserPassword($pmUserPassword)
    {
      $this->pmUserPassword = $pmUserPassword;
      return $this;
    }

     /**
     * @return string
     */
    public function getLogUsu()
    {
      return $this->logUsu;
    }
     /**
     * @param string $logUsu
     * @return \App\Service\ServicesWSDL\Login\intManLoginIn
     */
    public function setLogUsu($logUsu)
    {
      $this->logUsu = $logUsu;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenUsu()
    {
      return $this->senUsu;
    }

    /**
     * @param string $senUsu
     * @return \App\Service\ServicesWSDL\Login\intManLoginIn
     */
    public function setSenUsu($senUsu)
    {
      $this->senUsu = $senUsu;
      return $this;
    }

}
