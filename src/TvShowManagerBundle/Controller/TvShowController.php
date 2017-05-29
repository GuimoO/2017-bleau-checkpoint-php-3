<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TvShowController extends Controller
{
    /**
     * Show all TvShow with his episodes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listAction()
    {
        // Connection BDD
        $em = $this->getDoctrine()->getManager();

        // Récupération de tous les TvShow ainsi que des épisodes associé à chaque TvShow
        // via la méthode myFindAll() définit dans le répository (src/TvShowManagerBundle/Repository/TvShowRepository.php)
        $tvShows = $em->getRepository('TvShowManagerBundle:TvShow')->myFindAll();

        // Renvoie de la vue list.html.twig avec les TvShow et leurs épisodes
        return $this->render('TvShowManagerBundle:TvShow:list.html.twig', array(
            'tvshows' => $tvShows,
        ));
    }

    /**
     * Show one TvShow with his episodes
     * @param $id int type TvShow
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        // Connection BDD
        $em = $this->getDoctrine()->getManager();

        // Récupération de la TvShow correspondant à l'id réçu ainsi que des épisodes associé à la TvShow
        // via la méthode myFindOneById() définit dans le répository (src/TvShowManagerBundle/Repository/TvShowRepository.php)
        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->myFindOneById($id);


        // Renvoie de la vue show.html.twig avec la TvShow et ses épisodes
        return $this->render('TvShowManagerBundle:TvShow:show.html.twig', array(
            'tv' => $tvshow
        ));
    }

    public function addAction()
    {
        return $this->render('TvShowManagerBundle:TvShow:add.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('TvShowManagerBundle:TvShow:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('TvShowManagerBundle:TvShow:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @param $idTvShow int
     * @return \Symfony\Component\HttpFoundation\Response
     * Delete all episodes from One TvShow
     */
    public function deleteAllEpisodesAction($idTvShow){
        $em = $this->getDoctrine()->getManager();
        $episodes = $em->getRepository('TvShowManagerBundle:TvShow')->getAllEpisodesForOneTvShow($idTvShow);
        foreach ($episodes as $episode){
            $em->remove($episode);
        }

        $em->flush();

        return $this->redirectToRoute('show', array(
            'id' => $idTvShow
        ));
    }



}
