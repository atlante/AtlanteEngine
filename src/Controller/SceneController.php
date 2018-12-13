<?php

namespace App\Controller;

use App\Entity\Player;
use App\Entity\Scene;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SceneController extends AbstractController
{
    /**
     * @Route("/game/scene/", name="scene")
     */
    public function index()
    {
        $session = $this->container->get("session");
        $player_id = $session->get('player_id');

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $player = $this->getDoctrine()
            ->getRepository(Player::class)
            ->find($player_id);
        $scene = $this->getDoctrine()
            ->getRepository(Scene::class)
            ->findOneBy(['id'=>$player->getScene()]);

        if (!$scene) {
            throw $this->createNotFoundException('No scene found');
        }
        return $this->render('scene/index.html.twig', [
            'player' => $player,
            'scene' => $scene,
            'paths' => $scene->getStart()
        ]);
    }

}
