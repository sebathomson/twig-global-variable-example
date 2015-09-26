<?php

namespace AppBundle\Utils;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Utils
{
    static public function getHolaMundo()
    {
        return 'Hola Mundo';
    }
}
