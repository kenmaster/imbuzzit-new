<?php

namespace Imbuzzit\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function getFormat()
    {
    	$request = $this->getRequest();

    	$format = $request->get('_format');

    	return $format;

    }
}
