<?php

namespace App\Service\ServicesWSDL\Pedidos;

class PedidosIn
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
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginIn
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
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginIn
     */
    public function setFlowName($flowName)
    {
      $this->flowName = $flowName;
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
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginIn
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
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginIn
     */
    public function setSenUsu($senUsu)
    {
      $this->senUsu = $senUsu;
      return $this;
    }

}
