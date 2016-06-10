<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Posts;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Session\Session;

class BlogController extends Controller
{
    /**
     * @Route("/Blog/posts")
     */

    public function postsAction()
    {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Posts');
        $post = $posts->findAll();

        $session = new Session();
        if(!$_SESSION)
          $session->start();
        $session->set('posts', $post);
        include("includes/post.php");
        return new Response();
    }

}

?>
