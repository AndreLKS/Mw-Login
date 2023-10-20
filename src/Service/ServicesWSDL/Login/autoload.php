<?php


 function autoload_016586b3fd1b97501504a363b133e507($class)
{
    $classes = array(
        'App\Service\ServicesWSDL\Login\G5seniorservices' => __DIR__ .'/G5seniorservices.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindIn' => __DIR__ .'/mcwfUsersGetPersonKindIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersGetPersonKindOut' => __DIR__ .'/mcwfUsersGetPersonKindOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersChangePasswordIn' => __DIR__ .'/mcwfUsersChangePasswordIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersChangePasswordOut' => __DIR__ .'/mcwfUsersChangePasswordOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsIn' => __DIR__ .'/mcwfUsersGetUserGroupsIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersGetUserGroupsOut' => __DIR__ .'/mcwfUsersGetUserGroupsOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersPersonExistsIn' => __DIR__ .'/mcwfUsersPersonExistsIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersPersonExistsOut' => __DIR__ .'/mcwfUsersPersonExistsOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn' => __DIR__ .'/mcwfUsersAuthenticateJAASIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASOut' => __DIR__ .'/mcwfUsersAuthenticateJAASOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsIn' => __DIR__ .'/mcwfUsersDiscoverUsersGroupsIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersDiscoverUsersGroupsOut' => __DIR__ .'/mcwfUsersDiscoverUsersGroupsOut.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationIn' => __DIR__ .'/mcwfUsersUserReplicationIn.php',
        'App\Service\ServicesWSDL\Login\mcwfUsersUserReplicationOut' => __DIR__ .'/mcwfUsersUserReplicationOut.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_016586b3fd1b97501504a363b133e507');

// Do nothing. The rest is just leftovers from the code generation.
{
}
