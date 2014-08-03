<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // ifrikiya_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_user_homepage')), array (  '_controller' => 'ifrikiya\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/ifrikiya/auteur')) {
            // ifrikiya_auteurs_homepage
            if (0 === strpos($pathinfo, '/ifrikiya/auteur/hello') && preg_match('#^/ifrikiya/auteur/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_auteurs_homepage')), array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\DefaultController::indexAction',));
            }

            // ifrikiya_auteurs_acceuil
            if ($pathinfo === '/ifrikiya/auteur/acceuil') {
                return array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\AuteursController::auteursAcceuilAction',  '_route' => 'ifrikiya_auteurs_acceuil',);
            }

            // ifrikiya_page_auteur
            if (0 === strpos($pathinfo, '/ifrikiya/auteur/fiche') && preg_match('#^/ifrikiya/auteur/fiche/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_page_auteur')), array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\AuteursController::ficheAuteurAction',));
            }

            // ifrikiya_auteur_editer
            if (0 === strpos($pathinfo, '/ifrikiya/auteur/editer') && preg_match('#^/ifrikiya/auteur/editer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_auteur_editer')), array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\AuteursController::editer.html.twigAction',));
            }

            // ifrikiya_auteur_livres
            if (0 === strpos($pathinfo, '/ifrikiya/auteur/livres') && preg_match('#^/ifrikiya/auteur/livres/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_auteur_livres')), array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\AuteursController::livre.html.twigAction',));
            }

            // ifrikiya_auteur_manuscrit
            if (0 === strpos($pathinfo, '/ifrikiya/auteur/manuscrit') && preg_match('#^/ifrikiya/auteur/manuscrit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_auteur_manuscrit')), array (  '_controller' => 'ifrikiya\\AuteursBundle\\Controller\\AuteursController::manuscrit.html.twigAction',));
            }

        }

        // ifrikiya_site_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ifrikiya_site_homepage',);
        }

        // ifrikiya_site_acceuil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ifrikiya_site_acceuil');
            }

            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::acceuilAction',  '_route' => 'ifrikiya_site_acceuil',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // ifrikiya_site_recherche
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::rechercheAction',  '_route' => 'ifrikiya_site_recherche',);
            }

            // ifrikiya_site_recherche_auteur
            if ($pathinfo === '/recherche/auteur') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::rechercheAuteurAction',  '_route' => 'ifrikiya_site_recherche_auteur',);
            }

            // ifrikiya_site_recherche_livre
            if ($pathinfo === '/recherche/livre') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::rechercheLivreAction',  '_route' => 'ifrikiya_site_recherche_livre',);
            }

        }

        // ifrikiya_site_catalogue
        if ($pathinfo === '/catalogue') {
            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::catalogueAction',  '_route' => 'ifrikiya_site_catalogue',);
        }

        // ifrikiya_site_voir_livre
        if (0 === strpos($pathinfo, '/livre') && preg_match('#^/livre/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_site_voir_livre')), array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::voirLivreAction',));
        }

        if (0 === strpos($pathinfo, '/ecrivain')) {
            // ifrikiya_site_ecrivains
            if ($pathinfo === '/ecrivains') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::ecrivainsAction',  '_route' => 'ifrikiya_site_ecrivains',);
            }

            // ifrikiya_site_un_ecrivain
            if (preg_match('#^/ecrivain/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_site_un_ecrivain')), array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::unecrivainAction',));
            }

        }

        if (0 === strpos($pathinfo, '/collection')) {
            // ifrikiya_site_collection
            if ($pathinfo === '/collection') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::collectionAction',  '_route' => 'ifrikiya_site_collection',);
            }

            // ifrikiya_site_voir_collection
            if (preg_match('#^/collection/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_site_voir_collection')), array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::voirCollectionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/genre')) {
            // ifrikiya_site_genre
            if ($pathinfo === '/genre') {
                return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::genreAction',  '_route' => 'ifrikiya_site_genre',);
            }

            // ifrikiya_site_voir_genre
            if (preg_match('#^/genre/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_site_voir_genre')), array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::voirGenreAction',));
            }

        }

        // ifrikiya_site_ouvre_auteur
        if (0 === strpos($pathinfo, '/livresauteur') && preg_match('#^/livresauteur/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_site_ouvre_auteur')), array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::voirLivreAuteurAction',));
        }

        // ifrikiya_site_construction
        if ($pathinfo === '/construction') {
            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\SiteController::constructionAction',  '_route' => 'ifrikiya_site_construction',);
        }

        // ifrikiya_site_recherche_detaillee
        if ($pathinfo === '/details') {
            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\RechercheController::traitementRechercheAction',  '_route' => 'ifrikiya_site_recherche_detaillee',);
        }

        // ifrikiya_site_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'ifrikiya\\SiteBundle\\Controller\\MailController::formMailAction',  '_route' => 'ifrikiya_site_mail_form',);
        }

        if (0 === strpos($pathinfo, '/ifrikiya/a')) {
            if (0 === strpos($pathinfo, '/ifrikiya/admin')) {
                // ifrikiya_admin_homepage
                if (0 === strpos($pathinfo, '/ifrikiya/admin/hello') && preg_match('#^/ifrikiya/admin/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_homepage')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\DefaultController::indexAction',));
                }

                // ifrikiya_admin_acceuil
                if ($pathinfo === '/ifrikiya/admin/acceuil') {
                    return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminController::acceuilAction',  '_route' => 'ifrikiya_admin_acceuil',);
                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/genres')) {
                    // ifrikiya_admin_genres
                    if ($pathinfo === '/ifrikiya/admin/genres') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminGenresController::acceuilAction',  '_route' => 'ifrikiya_admin_genres',);
                    }

                    // ifrikiya_admin_ajouter_genre
                    if ($pathinfo === '/ifrikiya/admin/genres/ajouter') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminGenresController::ajouterAction',  '_route' => 'ifrikiya_admin_ajouter_genre',);
                    }

                    // ifrikiya_admin_modifier_genre
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/genres/modifier') && preg_match('#^/ifrikiya/admin/genres/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_genre')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminGenresController::modifierAction',));
                    }

                    // ifrikiya_admin_supprimer_genre
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/genres/supprimer') && preg_match('#^/ifrikiya/admin/genres/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_genre')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminGenresController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/livres')) {
                    // ifrikiya_admin_livres
                    if ($pathinfo === '/ifrikiya/admin/livres') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminLivresController::acceuilAction',  '_route' => 'ifrikiya_admin_livres',);
                    }

                    // ifrikiya_admin_ajouter_livre
                    if ($pathinfo === '/ifrikiya/admin/livres/ajouter') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminLivresController::ajouterAction',  '_route' => 'ifrikiya_admin_ajouter_livre',);
                    }

                    // ifrikiya_admin_modifier_livre
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/livres/modifier') && preg_match('#^/ifrikiya/admin/livres/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_livre')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminLivresController::modifierAction',));
                    }

                    // ifrikiya_admin_supprimer_livre
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/livres/supprimer') && preg_match('#^/ifrikiya/admin/livres/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_livre')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminLivresController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/ecrivains')) {
                    // ifrikiya_admin_ecrivains
                    if ($pathinfo === '/ifrikiya/admin/ecrivains') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminEcrivainsController::acceuilAction',  '_route' => 'ifrikiya_admin_ecrivains',);
                    }

                    // ifrikiya_admin_ajouter_ecrivain
                    if ($pathinfo === '/ifrikiya/admin/ecrivains/ajouter') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminEcrivainsController::ajouterAction',  '_route' => 'ifrikiya_admin_ajouter_ecrivain',);
                    }

                    // ifrikiya_admin_modifier_ecrivain
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/ecrivains/modifier') && preg_match('#^/ifrikiya/admin/ecrivains/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_ecrivain')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminEcrivainsController::modifierAction',));
                    }

                    // ifrikiya_admin_supprimer_ecrivain
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/ecrivains/supprimer') && preg_match('#^/ifrikiya/admin/ecrivains/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_ecrivain')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminEcrivainsController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/collections')) {
                    // ifrikiya_admin_collections
                    if ($pathinfo === '/ifrikiya/admin/collections') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminCollectionsController::acceuilAction',  '_route' => 'ifrikiya_admin_collections',);
                    }

                    // ifrikiya_admin_ajouter_collection
                    if ($pathinfo === '/ifrikiya/admin/collections/ajouter') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminCollectionsController::ajouterAction',  '_route' => 'ifrikiya_admin_ajouter_collection',);
                    }

                    // ifrikiya_admin_modifier_collection
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/collections/modifier') && preg_match('#^/ifrikiya/admin/collections/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_collection')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminCollectionsController::modifierAction',));
                    }

                    // ifrikiya_admin_supprimer_collection
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/collections/supprimer') && preg_match('#^/ifrikiya/admin/collections/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_collection')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminCollectionsController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/images')) {
                    // ifrikiya_admin_images
                    if ($pathinfo === '/ifrikiya/admin/images') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminImagesController::acceuilAction',  '_route' => 'ifrikiya_admin_images',);
                    }

                    // ifrikiya_admin_ajouter_image
                    if ($pathinfo === '/ifrikiya/admin/images/ajouter') {
                        return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminImagesController::ajouterAction',  '_route' => 'ifrikiya_admin_ajouter_image',);
                    }

                    // ifrikiya_admin_modifier_image
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/images/modifier') && preg_match('#^/ifrikiya/admin/images/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_image')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminImagesController::modifierAction',));
                    }

                    // ifrikiya_admin_supprimer_image
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/images/supprimer') && preg_match('#^/ifrikiya/admin/images/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_image')), array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminImagesController::supprimerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ifrikiya/admin/abonnes')) {
                    // ifrikiya_admin_abonnes
                    if ($pathinfo === '/ifrikiya/admin/abonnes') {
                        return array (  '_controller' => 'ifrikiyaAdminBundle:AdminAbonnes:acceuil',  '_route' => 'ifrikiya_admin_abonnes',);
                    }

                    // ifrikiya_admin_ajouter_abonne
                    if ($pathinfo === '/ifrikiya/admin/abonnes/ajouter') {
                        return array (  '_controller' => 'ifrikiyaAdminBundle:AdminAbonnes:ajouter',  '_route' => 'ifrikiya_admin_ajouter_abonne',);
                    }

                    // ifrikiya_admin_modifier_abonne
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/abonnes/modifier') && preg_match('#^/ifrikiya/admin/abonnes/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_modifier_abonne')), array (  '_controller' => 'ifrikiyaAdminBundle:AdminAbonnes:modifier',));
                    }

                    // ifrikiya_admin_supprimer_abonne
                    if (0 === strpos($pathinfo, '/ifrikiya/admin/abonnes/supprimer') && preg_match('#^/ifrikiya/admin/abonnes/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_admin_supprimer_abonne')), array (  '_controller' => 'ifrikiyaAdminBundle:AdminAbonnes:supprimer',));
                    }

                }

                // ifrikiya_admin_users
                if ($pathinfo === '/ifrikiya/admin/users') {
                    return array (  '_controller' => 'ifrikiya\\AdminBundle\\Controller\\AdminUsersController::acceuilAction',  '_route' => 'ifrikiya_admin_users',);
                }

            }

            // ifrikiya_abonnees_homepage
            if (0 === strpos($pathinfo, '/ifrikiya/abonnee/hello') && preg_match('#^/ifrikiya/abonnee/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ifrikiya_abonnees_homepage')), array (  '_controller' => 'ifrikiya\\AbonneesBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ifrikiya\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'ifrikiya\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'ifrikiya\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
