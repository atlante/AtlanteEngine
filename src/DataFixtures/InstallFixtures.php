<?php

namespace App\DataFixtures;

use App\Entity\Path;
use App\Entity\Player;
use App\Entity\Scene;
use App\Entity\User;
use Bluemmb\Faker\PicsumPhotosProvider;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InstallFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');
        $faker->addProvider(new PicsumPhotosProvider($faker));

        $admin = new User();
        $admin->setUsername($faker->userName);
        $admin->setEmail($faker->email);
        $admin->setPassword($this->encoder->encodePassword($admin, "admin"));
        $admin->setRoles("ROLE_ADMIN");
        $manager->persist($admin);

        // on créé 10 personnes
        for ($i = 1; $i < 5; $i++) {
            $faker->seed($i);

            $user = new User();
            $user->setUsername($faker->userName);
            $user->setEmail($faker->email);
            $user->setPassword($this->encoder->encodePassword($user, "test"));
            $user->setRoles("ROLE_USER");
            $manager->persist($user);
        }


        $scene1 = new Scene();
        $scene1->setName("Place de Skògrmort");
        $scene1->setDescription("Le hameau de Skògrmort est le dernier bastion de la civilisation avant la sinistre forêt de Valsombre. 
        Un simple village de bûcheron dont toutes les masures à la nordique sont installées en cercle, les entrées donnant sur une unique place pour créer un cocon protecteur. 
        Depuis le lancement de la colonisation de la forêt réputé maudite, l'une de ces cabanes sert de bureaux d'enregistrement des volontaires et une partie de la place est alloué aux roulottes en attentes de courageux volontaires.");
        $scene1->setPicture("https://static.photocdn.pt/images/articles/2018/03/09/articles/2017_8/landscape_photography.jpg");
        $manager->persist($scene1);

        $scene2 = new Scene();
        $scene2->setName("Roulotte");
        $scene2->setDescription("Une petite roulotte en bois fermé d'une porte. 
        L'intérieur est divisé en deux par une tenture, d'un côté une paillasse");
        $scene2->setPicture("https://cdn.discordapp.com/attachments/508715993107791882/522515346465357837/photos_roulotte_raphaelle_berjon_019.png");
        $manager->persist($scene2);

        $scene3 = new Scene();
        $scene3->setName("Bureau d'enregistrement");
        $scene3->setDescription("Vous entrez dans une ancienne maison de bûcheron reconverti en bureau. Dès l'entrée, une forte odeur de pot-pourri agresse vos narines. 
        De l'autre côté de la pièce, sur un bureau, une gnome vous surplombe de sa haute-chaise.");
        $manager->persist($scene3);


        $path = new Path();
        $path->setName("vers roulotte");
        $path->setDescription("");
        $path->setCost(0);
        $path->setStart($scene1);
        $path->setEnd($scene2);
        $path->setCardinal("S");
        $manager->persist($path);

        $path = new Path();
        $path->setName("Sortir de la roulotte");
        $path->setDescription("");
        $path->setCost(0);
        $path->setStart($scene2);
        $path->setEnd($scene1);
        $path->setCardinal("N");
        $manager->persist($path);

        $path = new Path();
        $path->setName("vers enregistrement");
        $path->setDescription("");
        $path->setCost(0);
        $path->setStart($scene1);
        $path->setEnd($scene3);
        $path->setCardinal("N");
        $manager->persist($path);

        $path = new Path();
        $path->setName("Retour vers la place");
        $path->setDescription("");
        $path->setCost(0);
        $path->setStart($scene3);
        $path->setEnd($scene1);
        $path->setCardinal("S");
        $manager->persist($path);

        // on créé 5 personnages
        for ($i = 1; $i < 5; $i++) {
            $player = new Player();
            $player->setName($faker->name);
            $player->setSexe($faker->numberBetween(0, 2));
            $player->setDescription($faker->paragraph);
            $player->setRace('Human');
            $player->setPicture($faker->imageUrl(90, 90, true));
            $player->setSize('Normal');
            $player->setScene($scene1);
            $player->setStrength($faker->numberBetween(10, 90));
            $player->setCharisma($faker->numberBetween(10, 90));
            $player->setAgility($faker->numberBetween(10, 90));
            $player->setIntelligence($faker->numberBetween(10, 90));
            $player->setLife(100);
            $player->setAP(35);
            $manager->persist($player);
        }

        $manager->flush();
    }
}
