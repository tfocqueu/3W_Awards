<?php


namespace BackBundle\Controller;

use BackBundle\Entity\Agency;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgencyController extends Controller
{
    /**
     * @return array
     * @Rest\View()
     */
    public function getAgencyAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agency = $em->getRepository(Agency::class)->findAll();

        return array('agency' => $agency);
    }


}
