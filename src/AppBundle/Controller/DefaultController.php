<?php

namespace AppBundle\Controller;

use AppBundle\Model\SomeObject;
use AppBundle\ViewModel\SomeObjectDto;
use AppBundle\ViewModel\SomeObjectDto2;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $source = new SomeObject();
        $source->setHeight(6);
        $source->setWidth(7);

        return new JsonResponse($this->get('km_object_mapper.mapper')->map($source, SomeObjectDto::class));
    }
    /**
     * @Route("/area", name="area")
     */
    public function areaAction(Request $request)
    {
        $source = new SomeObject();
        $source->setHeight(6);
        $source->setWidth(7);

        return new JsonResponse($this->get('km_object_mapper.mapper')->map($source, SomeObjectDto2::class));
    }
}
