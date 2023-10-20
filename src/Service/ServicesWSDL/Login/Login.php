<?php

namespace App\Service\ServicesWSDL\Login;

class Login extends \SoapClient
{

  /**
   * @var array $classmap The defined classes
   */
  private static $classmap = array(
    'mcwfUsersGetPersonKindIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersGetPersonKindIn',
    'mcwfUsersGetPersonKindOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersGetPersonKindOut',
    'mcwfUsersGetUserGroupsIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersGetUserGroupsIn',
    'mcwfUsersGetUserGroupsOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersGetUserGroupsOut',
    'mcwfUsersPersonExistsIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersPersonExistsIn',
    'mcwfUsersPersonExistsOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersPersonExistsOut',
    'mcwfUsersAuthenticateJAASIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersAuthenticateJAASIn',
    'mcwfUsersAuthenticateJAASOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersAuthenticateJAASOut',
    'mcwfUsersDiscoverUsersGroupsIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersDiscoverUsersGroupsIn',
    'mcwfUsersDiscoverUsersGroupsOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersDiscoverUsersGroupsOut',
    'mcwfUsersUserReplicationIn' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersUserReplicationIn',
    'mcwfUsersUserReplicationOut' => 'App\\Service\\ServicesWSDL\\Login\\mcwfUsersUserReplicationOut',
  );

  /**
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   */
  public function __construct(array $options = array(), $wsdl = null)
  {

    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $options = array_merge(array(
      'features' => 1,
    ), $options);
    if (!$wsdl) {
      $wsdl = 'https://web.sancon.com.br:8383/g5-senior-services/sapiens_SyncMCWFUsers?wsdl';
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * @param string $user
   * @param string $password
   * @param int $encryption
   * @param mcwfUsersAuthenticateJAASIn $parameters
   * @return mcwfUsersAuthenticateJAASOut
   */
  public function AuthenticateJAAS($user, $password, $encryption, mcwfUsersAuthenticateJAASIn $parameters)
  {
    return $this->__soapCall('AuthenticateJAAS', array($user, $password, $encryption, $parameters));
  }

  //override da função para tratar o xsi:nil    
  public function __doRequest($request, $location, $action, $version, $one_way = 0)
  {
    $request = str_replace('xsi:nil="true"', '', $request, $count);
    return parent::__doRequest($request, $location, $action, $version, $one_way);
  }
}