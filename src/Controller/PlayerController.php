<?php

namespace App\Controller;

use App\Entity\Path;
use App\Entity\Scene;
use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{

    private $repository;

    /**
     * PlayerController constructor.
     * @param PlayerRepository $repository
     */
    function __construct(PlayerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/player", name="player")
     */
    public function index(): Response
    {
        $players = $this->repository->findAll();
        return $this->render('player/index.html.twig', ['players' => $players]);
    }

    /**
     * @Route("/game/player/select/{id}", name="player_select")
     */
    public function select($id): Response
    {
        $session = $this->container->get("session");
        $session->set('player_id', $id);
        return $this->redirectToRoute('scene');
    }

    /**
     * @Route("/player/{id}", name="player_show")
     */
    public function show($id): Response
    {
        $player = $this->repository->find($id);
        return $this->render('player/show.html.twig', ['player' => $player]);
    }

    /**
     * @Route("/player/move/{path_id}", name="player_move")
     * @param $path_id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function move($path_id)
    {
        $session = $this->container->get("session");
        $player_id = $session->get('player_id');

        $player = $this->repository->find($player_id);
        $path = $this->getDoctrine()
            ->getRepository(Path::class)
            ->find($path_id);
        $scene = $this->getDoctrine()
            ->getRepository(Scene::class)
            ->find($path->getEnd());

        $entityManager = $this->getDoctrine()->getManager();
        $player->setAP($player->getAP()-$path->getCost());
        $player->setScene($scene);
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($player);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        return $this->redirectToRoute('scene');
    }
}
