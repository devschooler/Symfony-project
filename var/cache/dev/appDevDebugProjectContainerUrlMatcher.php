<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_film_list
            if ($pathinfo === '/admin/films/liste') {
                return array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminFilmController::listAction',  '_route' => 'admin_film_list',);
            }

            if (0 === strpos($pathinfo, '/admin/genres')) {
                // admin_ajout
                if ($pathinfo === '/admin/genres/ajout') {
                    return array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminGenreController::addAction',  '_route' => 'admin_ajout',);
                }

                // admin_genre_list
                if ($pathinfo === '/admin/genres/liste') {
                    return array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminGenreController::listAction',  '_route' => 'admin_genre_list',);
                }

                // admin_genre_modif
                if (0 === strpos($pathinfo, '/admin/genres/modif') && preg_match('#^/admin/genres/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genre_modif')), array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminGenreController::editAction',));
                }

                // admin_genre_supprimer
                if (0 === strpos($pathinfo, '/admin/genres/supprimer') && preg_match('#^/admin/genres/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genre_supprimer')), array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminGenreController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/personnes')) {
                // admin_ajoutpersonne
                if ($pathinfo === '/admin/personnes/ajout') {
                    return array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminPersonneController::addAction',  '_route' => 'admin_ajoutpersonne',);
                }

                // admin_personne_list
                if ($pathinfo === '/admin/personnes/list') {
                    return array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminPersonneController::listAction',  '_route' => 'admin_personne_list',);
                }

                // admin_personne_modif
                if (0 === strpos($pathinfo, '/admin/personnes/modif') && preg_match('#^/admin/personnes/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_personne_modif')), array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminPersonneController::editAction',));
                }

                // admin_personne_delete
                if (0 === strpos($pathinfo, '/admin/personnes/supprimer') && preg_match('#^/admin/personnes/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_personne_delete')), array (  '_controller' => 'TD\\AdminBundle\\Controller\\AdminPersonneController::deleteAction',));
                }

            }

            // admin_all
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'TD\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_all',);
            }

        }

        // td_cinema_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'td_cinema_default_index');
            }

            return array (  '_controller' => 'TD\\CinemaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'td_cinema_default_index',);
        }

        // films_all
        if ($pathinfo === '/Film') {
            return array (  '_controller' => 'TD\\CinemaBundle\\Controller\\DefaultController::listAction',  '_route' => 'films_all',);
        }

        // personne_all
        if ($pathinfo === '/personne') {
            return array (  '_controller' => 'TD\\CinemaBundle\\Controller\\DefaultController::listAction2',  '_route' => 'personne_all',);
        }

        // film_page
        if (0 === strpos($pathinfo, '/Film') && preg_match('#^/Film/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_page')), array (  '_controller' => 'TD\\CinemaBundle\\Controller\\DefaultController::showAction',));
        }

        // personne_page
        if (0 === strpos($pathinfo, '/Personne') && preg_match('#^/Personne/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personne_page')), array (  '_controller' => 'TD\\CinemaBundle\\Controller\\DefaultController::showAction2',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
