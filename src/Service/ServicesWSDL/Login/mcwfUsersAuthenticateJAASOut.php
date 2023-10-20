<?php

namespace App\Service\ServicesWSDL\Login;

class mcwfUsersAuthenticateJAASOut
{

    /**
     * @var string $erroExecucao
     */
    protected $erroExecucao = null;

    /**
     * @var string $pmLogged
     */
    protected $pmLogged = null;
    
    /**
     * @var string $mensagemRetorno
     */
    protected $mensagemRetorno = null;

        /**
     * @var int $tipoRetorno
     */
    protected $tipoRetorno = null;

    /**
    * @var int $codUsu
    */
    protected $codUsu = null;

    /**
     * @var string $nomUsu
     */
    protected $nomUsu = null;

    /**
     * @var int $numCad
     */
    protected $numCad = null;
    
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
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASOut
     */
    public function setErroExecucao($erroExecucao)
    {
      $this->erroExecucao = $erroExecucao;
      return $this;
    }

    /**
     * @return string
     */
    public function getPmLogged()
    {
      return $this->pmLogged;
    }

    /**
     * @param string $pmLogged
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASOut
     */
    public function setPmLogged($pmLogged)
    {
      $this->pmLogged = $pmLogged;
      return $this;
    }
     
    /**
     * @return string
     */
    public function getMensagemRetorno()
    {
      return $this->mensagemRetorno;
    }

    /**
     * @param string $mensagemRetorno
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASOut
     */
    public function setMensagemRetorno($mensagemRetorno)
    {
      $this->mensagemRetorno = $mensagemRetorno;
      return $this;
    }

        /**
     * @return int
     */
    public function getTipoRetorno()
    {
      return $this->tipoRetorno;
    }

    /**
     * @param int $tipoRetorno
     * @return \App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASOut
     */
    public function setTipoRetorno($tipoRetorno)
    {
      $this->tipoRetorno = $tipoRetorno;
      return $this;
    }

    /**
    * @return int
    */
    public function getCodUsu()
    {
      return $this->codUsu;
    }

    /**
     * @param int $codUsu
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginOut
     */
    public function setCodUsu($codUsu)
    {
      $this->codUsu = $codUsu;
      return $this;
    }

    /**
     * @return string
     */
    public function getNomUsu()
    {
      return $this->nomUsu;
    }

    /**
    * @param string $nomUsu
    * @return \App\Service\ServicesWSDL\IntMan\intManLoginOut
    */
    public function setNomUsu($nomUsu)
    {
      $this->nomUsu = $nomUsu;
      return $this;
    }

    /**
    * @return int
    */
    public function getNumCad()
    {
      return $this->numCad;
    }

    /**
     * @param int $numCad
     * @return \App\Service\ServicesWSDL\IntMan\intManLoginOut
     */
    public function setNumCad($numCad)
    {
      $this->numCad = $numCad;
      return $this;
    }
}
