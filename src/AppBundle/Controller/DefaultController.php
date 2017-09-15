<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:default:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $recipes = $this->getDoctrine()->getManager()->getRepository("AppBundle:Recipe")->finRecipesWithoutOrder();
        return array("recipes" => $recipes);
    }

    /**
     * @Route("/likes/{nbLikes}", name="likes")
     * @Template("AppBundle:default:index.html.twig")
     */
    public function getRecipesByLikesAction(Request $request, $nbLikes)
    {
        $recipes = $this->getDoctrine()->getManager()->getRepository("AppBundle:Recipe")->findRecipesByMinLikes($nbLikes);
        return array("recipes" => $recipes);
    }

    /**
     * @Route("/order-date", name="order_date")
     * @Template("AppBundle:default:index.html.twig")
     */
    public function getRecipesOrderedByDateAction(Request $request)
    {
        $recipes = $this->getDoctrine()->getManager()->getRepository("AppBundle:Recipe")->findBy(array(), array("createdAt" => "DESC"));
        return array("recipes" => $recipes);
    }
}
