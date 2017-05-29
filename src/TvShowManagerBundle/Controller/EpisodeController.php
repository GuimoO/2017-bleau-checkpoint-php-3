<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EpisodeController extends Controller
{
    public function deleteAction($idTvShow, $id)
    {
        $em = $this->getDoctrine()->getManager();

        // Récupération de l'épisode correspondant à l'id reçu
        $episode = $em->getRepository('TvShowManagerBundle:Episode')->myFindOneById($id);

        // Delete de l'objet episode
        $em->remove($episode);

        // Validation coté base de donnée
        $em->flush();

        return $this->redirectToRoute('show', array(
            'id' => $idTvShow
        ));
    }


}
