<?php

/* ifrikiyaSiteBundle:Site:acceuil.html.twig */
class __TwigTemplate_bc4c05b006bafc3a3ed21a786ed9cfc6fc419561058e313ab2d21e71c6acc63d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'encodage' => array($this, 'block_encodage'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modelcatalogue.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_encodage($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        $this->displayParentBlock("encodage", $context, $blocks);
        echo "
 ";
    }

    // line 7
    public function block_corps($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"acceuil\">
\t\t   <h2>PRESENTATION DES EDITIONS IFRIKIYA</h2>
\t\t   <h4>GENESE</h4>
\t\t     <p>Ifrikiya est l’appellation originelle de l’Afrique. Ce nom a été expressément choisi pour signifier
\t\t\t la volonté des auteurs du présent projet à retourner à leurs racines pour s’en inspirer et créer. Ceci étant,
\t\t\t Ifrikiya, en termes d’actionnariat, est ouvert à tous les 
\t\t\t éditeurs consentants et ses partenaires pourraient venir du monde entier.
\t\t\t </p>
\t\t\t <h4>ORIGINE</h4>
\t\t\t <p>Ifrikiya est le fruit de la fusion entre trois maisons d’édition camerounaises à savoir 
\t\t\t Interlignes, Editions de la Ronde et Editions Proximité. Par cette fusion, les initiateurs 
\t\t\t ont voulu formaliser un partenariat qui avait déjà montré ses preuves par des coéditions.
             </p>
\t\t\t <h4>BUT</h4>
\t\t\t <p>Ifrikiya veut être une maison d’édition compétitive et capable de relever le défi d’une production
\t\t\t d’ouvrages littéraires et scientifiques, de qualité, et à faibles coûts en Afrique. L’édition
\t\t\t étant un secteur stratégique de la communication et donc des relations internationales, 
\t\t\t il importe que la voix du Cameroun et de l’Afrique soit présente et prise en compte dans la 
\t\t\t construction d’une image valorisante de notre réalité qui associe à la fois le meilleur d’ici 
\t\t\t et d’ailleurs. En ce sens, Ifrikiya collabore avec plusieurs éditeurs dans le monde.</p>
\t\t     
\t\t\t <h4>POLITIQUE EDITORIALE</h4>
\t\t\t <p>Les trois maisons d’éditions qui ont fusionné pour former Ifrikiya avaient pour objectif 
\t\t\t d’être une maison d’édition capable de produire des ouvrages de qualité au Cameroun et en Afrique. 
\t\t\t Dès les premières publications, et pour marquer son engagement à porter aussi loin que possible la 
\t\t\t voix du Cameroun et de l’Afrique, des auteurs camerounais, vivant au Cameroun et en Europe ont été 
\t\t\t publiés au même moment que des auteurs étrangers et de nombreux jeunes auteurs qui publiaient 
\t\t\t grâce à cette maison leurs premiers ouvrages. Il faudrait le signaler, les éditions Ifrikiya ont 
\t\t\t publié environ quatre vingt auteurs en
\t\t\t six ans parmi lesquels : Gaston Kelman, Kangni Alem, Patrice Nganang, et plus récemment grâce à 
\t\t\t la collection Terres solidaires de l’Alliance des éditeurs indépendants, Boubakar Boris Diop, 
\t\t\t Emmanuel Dongala, Lewis Nkossi, Mongo Beti, Driss Chraibi, Véronique Tadjo
\t\t\t Dans le même temps, de nombreux projets ont été conçus en collaboration avec plusieurs éditeurs
\t\t\t étrangers. Outre les ouvrages produits dans le réseau de l’alliance des Editeurs Indépendants, 
\t\t\t on pourrait citer Indépendance Cha Cha avec Magellan et Nouvelles du Cameroun avec Magellan et Courrier International, de même que Malamine
\t\t\t avec Les enfants rouges, Kamerun dont les droits ont été achetés chez La Découverte, L’Etat et les clivages ethniques, avec CERAP à Abidjan. De nombreux autres projets sont en cours dans différentes collections dont la traduction de notre roman Walaandé, l’art de partager un mari en Arabe pour le Liban, et la Tunisie.
\t\t\t Autant d’arguments qui démontrent notre volonté de nous ouvrir au monde.
\t\t\t Cinq principales collections définissent la ligne éditoriale d’Ifrikiya à savoir<a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_collection");
        echo "\">...voir ici</a>
\t\t\t </p>
\t\t 
\t\t  
\t\t </div>
 
 ";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 45,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
