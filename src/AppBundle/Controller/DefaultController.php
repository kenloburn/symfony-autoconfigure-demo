<?php

namespace AppBundle\Controller;

use ExampleBundle\Service\RegistryService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(RegistryService $registryService)
    {
        return new Response(implode(', ', $registryService->getAll()));
    }
}
