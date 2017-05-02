<?php
/**
 * Created by PhpStorm.
 * User: kokoala
 * Date: 27/04/2017
 * Time: 16:23
 */

namespace ddd;


use appDomain\dto\DataDTO;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController  extends Controller
{


    function fooAction(){

        $service =  $this->container->get('app.user_repository');
        $serializer = $this->container->get('jms_serializer');
        $users = $service->findAll();

        $data = new DataDTO($users);
        return new Response( $serializer->serialize($data, 'json') , 200);
    }
}