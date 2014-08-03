<?php
# Fichier src/ifrikiya/SiteBundle/DataFixtures/ORM/LoadingFixtures.php
  
/* Les Fixtures doivent êtres stockées dans le namespace suivant */
namespace  ifrikiya\SiteBundle\DataFixtures\ORM;
   

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ifrikiya\SiteBundle\Entity\Livres;
use ifrikiya\SiteBundle\Entity\Ecrivains;
use ifrikiya\SiteBundle\Entity;
use ifrikiya\UserBundle\Entity\User;
use ifrikiya\UserBundle\Entity\Role;

/*
 * Les fixtures sont des objets qui doivent obligatoireemnt implémenter l'interface FixtureInterface
 */
class LoadingFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $role_user = new Role();
       $role_user->setName("ROLE_USER");
       $manager->persist($role_user);
       $manager->flush();
 
       $role_admin = new Role();
       $role_admin->setName("ROLE_ADMIN");
       $manager->persist($role_admin);
       $manager->flush();
 
       // create a user
       $user = new User();
 
       // On donne le login Admin à notre nouvel utilisateur
       $user->setUsername('admin');
 
       // On cré un salt pour amélioré la sécurité
       $user->setSalt(md5(time()));
 
       // On crée un mot de passe (attention, comme vous pouvez le voir, il faut utiliser les même paramètres
       // que spécifiés dans le fichier security.yml, à savoir SHA512 avec 10 itérations.       
       $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
       // On cré donc le mot de passe "admin2" à partir de l'encodage choisi au-dessus
       $password = $encoder->encodePassword('password', $user->getSalt());
       // On applique le mot de passe à l'utilisateur
       $user->setPassword($password);
 
       $user->getUserRoles()->add($role_admin);
 
        $manager->persist($user);
       $manager->flush();
       
    }       
}