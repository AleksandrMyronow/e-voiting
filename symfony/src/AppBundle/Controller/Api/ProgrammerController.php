<?php
/**
 * Created by PhpStorm.
 * User: or_os
 * Date: 20.12.2017
 * Time: 12:29
 */

namespace AppBundle\Controller\Api;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class ProgrammerController extends Controller
{
    /**
     * @Route("/api/users", name="api")
     *
     */
    public function indexAction(Request $request)
    {   header("Access-Control-Allow-Origin: *");
//        // dz: get 500, 404 json if errors
        $users = $this
            ->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find("1")
        ;

        if (!$users) {
            throw $this->createNotFoundException('D\'oh! Book not found');
        }

        $array = $this->get('jms_serializer')->serialize($users, 'json');

//        $users = $this
//            ->getDoctrine()
//            ->getRepository('AppBundle:User')
//            ->find("1");
//        if (!$users) {
//            throw new HttpException(400, "Invalid data");
//        }
//        dump($users);
//        die();
//        json_encode($array);

//        dump($users);


        return new JsonResponse($array);



//        return [];
    }

}