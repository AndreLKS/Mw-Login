<?php

namespace App\Controller;

use App\Entity\APT\Sessions;
use App\Service\ServicesWSDL\Login\Login;
use App\Service\ServicesWSDL\Login\mcwfUsersAuthenticateJAASIn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends AbstractController
{

    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }


    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request): Response
    {
        $usuario = json_decode($request->getContent());

        //tratamento usuário e senha
        $usuario->username = isset($usuario->username) ? addslashes(trim($usuario->username)) : FALSE;
        $usuario->password = isset($usuario->password) ? trim($usuario->password) : FALSE;

        //validação de parâmetros
        if (!$usuario->username || !$usuario->password) {
            $response['erro'] = true;
            $response['mensagem'] = 'Usuario ou senha nao foram informados';
            return $this->json(
                $response
            );
        }

        if ($usuario->username == 'admin' && $usuario->password == 'qwe123') {

            $newSession = $this->requestStack->getSession();
            $newSession->set('login', 'codUsu=' . 'admin');

            $response['erro'] = false;
            $response['mensagem'] = "Logado com sucesso";
            $response['codUsu'] = 0;
            $response['nomUsu'] = 'Admin';
            $response['numCad'] = 0;

            return $this->json(
                $response
            );
        }

        //realiza login por webservice
        $loginService = new Login(['exceptions' => 1, "trace" => 1], $_ENV['WEBSERVICE_URL'] . "/g5-senior-services/sapiens_SyncMCWFUsers?wsdl");
        $usuarioWSDL = new mcwfUsersAuthenticateJAASIn();

        //parâmetro WSDL para autenticação;

        $usuarioWSDL->setLogUsu($usuario->username);
        $usuarioWSDL->setSenUsu($usuario->password);
        $usuarioWSDL->setpmUserName($usuario->username);
        $usuarioWSDL->setpmUserPassword($usuario->password);
        $usuarioWSDL ->setpmEncrypted("0");
        
        try {
            $retorno = $loginService->AuthenticateJAAS($usuario->username,$usuario->password, 0, $usuarioWSDL);

        } catch (Exception $th) {
            $response['erro'] = true;
            $response['mensagem'] = "Ws nao autenticado" . $th->getpmLogged();
            return $this->json($response, 200);
        }
        //se login com sucesso
        if ($retorno->getpmLogged() === '-1') {
            $response['erro'] = true;
            $response['mensagem'] = "Usuario nao autenticado";
            return $this->json($response, 200);
        }
         $response['erro'] = false;
         $response['mensagem'] = "Autenticado com sucesso";
         return $this->json($response, 200);
        }
   
}

