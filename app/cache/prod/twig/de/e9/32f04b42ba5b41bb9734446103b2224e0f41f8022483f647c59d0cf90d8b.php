<?php

/* ::modelcatalogue.html.twig */
class __TwigTemplate_dee932f04b42ba5b41bb9734446103b2224e0f41f8022483f647c59d0cf90d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'encodage' => array($this, 'block_encodage'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'categorie' => array($this, 'block_categorie'),
            'connect' => array($this, 'block_connect'),
            'menu' => array($this, 'block_menu'),
            'left' => array($this, 'block_left'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<html>
<head>
        
        ";
        // line 6
        $this->displayBlock('encodage', $context, $blocks);
        // line 7
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/favicon.png"), "html", null, true);
        echo "\" />
\t\t<!--[if IE]><link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/favicon.ico"), "html", null, true);
        echo "\" /><![endif]-->

\t\t";
        // line 17
        $this->displayBlock('javascript', $context, $blocks);
        // line 84
        echo "    </head>
  <body>
    
    <div id=\"wrapper\">
\t  <div id=\"header\">
\t\t\t <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">
\t\t\t <div class=\"home\">
\t\t\t <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/home.jpg"), "html", null, true);
        echo "\" />\t
\t\t\t </div>
\t\t\t </a>
\t\t\t";
        // line 94
        $this->displayBlock('categorie', $context, $blocks);
        // line 111
        echo "\t\t\t <div class=\"recherche\">
\t\t\t   <form action=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_recherche");
        echo "\" method=\"post\">
\t\t\t    <label>RECHERCHE :</label>
\t\t\t    <select name=\"id\" size=\"1\">
\t\t\t\t <option value=\"1\">auteurs</option>
\t\t\t\t <option  value=\"2\" selected>livre</option>
\t\t\t\t</select>
\t\t\t\t <INPUT TYPE=\"submit\" NAME=\"nom\" VALUE=\"ok\">
\t\t\t    </form>\t 
\t\t\t </div>
\t\t   
\t\t   <div id=\"headerlogo\">
\t\t     <div class=\"texte\">
\t\t\t  ";
        // line 124
        $this->displayBlock('connect', $context, $blocks);
        // line 141
        echo "\t\t\t </div>
\t\t   </div>
\t  </div>
\t  
\t  <div id=\"menu\">
\t  ";
        // line 146
        $this->displayBlock('menu', $context, $blocks);
        // line 172
        echo "\t\t
\t  </div>
\t  
\t  <div id=\"left\">
\t   <div id=\"recherche_detaille\">
\t    <h3>recherche détaillée</h3>
\t   <!--
\t     <h3>recherche détaillée</h3>
\t\t  <form action=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_recherche_detaillee");
        echo "\" method=\"post\">
\t\t    <table>
\t\t\t  <tr>
\t\t\t    <td>
\t\t\t\t  <label for=\"titre\">Titre :</label>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t  <input type=\"text\" name=\"titre\" id=\"titre\" placeholder=\"Titre\" />
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
\t\t\t    <td>
\t\t\t\t  <label for=\"auteur\">Auteur :</label>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t  <input type=\"text\" name=\"auteur\" id=\"auteur\" placeholder=\"Auteur\"/>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
\t\t\t    <td>
\t\t\t\t  <label for=\"annee\">Année :</label>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t  <input type=\"text\" name=\"annee\" id=\"auteur\" placeholder=\"Année\"/>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t    
\t\t\t</table>
\t\t\t  <p><input type=\"submit\" value=\"rechercher\" /></p>
\t\t  </form>
\t\t  -->
\t\t  ";
        // line 211
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ifrikiyaSiteBundle:Recherche:recherche"), array());
        // line 212
        echo "\t   </div>
\t   <div id=\"user\">
\t       ";
        // line 214
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 215
            echo "              <p>bienvenu ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "<p> </br> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></br>
\t\t\t      <a href=\"";
            // line 216
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">changer de mot de passe</a></br>
\t\t\t\t  <a href=\"";
            // line 217
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
           ";
        } else {
            // line 219
            echo "\t      ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ifrikiyaUserBundle:Security:LoginBis"), array());
            // line 220
            echo "\t\t  ";
        }
        // line 221
        echo "\t   </div>
\t </div>
\t  
\t  <div id=\"contenu\">
\t   
\t    <div class=\"genre\">
\t\t  ";
        // line 227
        $this->displayBlock('left', $context, $blocks);
        // line 242
        echo "\t    </div>
\t\t
\t\t<div class=\"corps\">
\t\t ";
        // line 245
        $this->displayBlock('corps', $context, $blocks);
        // line 248
        echo "\t\t</div>
\t\t
\t </div>
\t <div id=\"pub\">
\t  <div id=\"pub_haut\">
\t     <p>parutions récentes</p>
\t  </div>
\t  <div id=\"livre\">
\t   <script language=\"javascript\">StartAnim();</script>
\t  </div>
\t </div>\t
\t 
\t</div>
\t<div id=\"footer\">
\t  <p>c@pyright <a href=\" ";
        // line 262
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">ww.editionsifrikiya.org</a> octobre 2013  tous droits reservés</p>
\t  <p>ce site a été entièrement conçu et réaliser par idriss ELIGUENE idriss.eliguene@gmail.com grâce au tutoriel de <a href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">open classroom</a></p> 
\t  <div id=\"contact\">
\t    <h3>contact</h3>
\t\t<ul>
\t\t  <li><a href=\"";
        // line 267
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_mail_form");
        echo "\">administrateur</a></li>
\t\t  <li><a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_mail_form");
        echo "\">concepteur</a></li>
\t\t<ul>
\t  </div>
\t  <div id=\"lien_multi\">
\t    <h3>multimedia</h3>
\t\t <ul>
\t\t   <li><a href=\"http://www.afrik.com/article20259.html\">Afrik.com</a></li>
\t\t   <li><a href=\"http://www.afrilivres.net/fiche_editeur.php?e=3700\">Afrilivres</a></li>
\t\t   <li><a href=\"http://www.africultures.com/php/?nav=structure&no=3700\">Africultures</a></li>
\t\t   <li><a href=\"http://www.editafrica.com/jean-claude-awono-nouveau-directeur-des-editions-ifrikiya/\">EditAfrika.com</a></li>
\t\t </ul>
\t  </div>
\t  <div id=\"site\">
\t  
\t    <h3>site</h3>
\t\t<ul>
\t\t  <li><a href=\"";
        // line 284
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">acceuil</a></li>
\t\t  <li><a href=\"";
        // line 285
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_catalogue");
        echo "\">catalogue</a></li>
\t\t  <li><a href=\"";
        // line 286
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_ecrivains");
        echo "\">auteurs</a></li>
\t\t  <li><a href=\"";
        // line 287
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_collection");
        echo "\">collections</a></li>
\t\t  <li><a href=\"";
        // line 288
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_genre");
        echo "\">genres</a></li>
\t\t</ul>
\t\t</div>
\t</div>
\t";
        // line 297
        echo "  </body>
</html>";
    }

    // line 6
    public function block_encodage($context, array $blocks = array())
    {
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "ifrikiya!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t\t  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/css/style_catalogue.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t  <!--[if lte IE 7]>
          <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/css/style_catalogie.css"), "html", null, true);
        echo "\" type=\"text/css\" />
          <![endif]-->
\t\t";
    }

    // line 17
    public function block_javascript($context, array $blocks = array())
    {
        // line 18
        echo "\t\t  <script language=\"javascript\">
\t\t    imgPath = new Array;
            SiClickGoTo = new Array;
            version = navigator.appVersion.substring(0,1);
            if (version >= 3)
\t\t\t{
\t\t\t   i0 = new Image;
\t\t\t   i0.src =\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/livres/echo du betail.jpg"), "html", null, true);
        echo "\";
               SiClickGoTo[0] = \"#\";
\t\t\t   imgPath[0] = i0.src;
\t\t\t   i1 = new Image;
\t\t\t   i1.src = \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/livres/mistiriijo.jpg"), "html", null, true);
        echo "\";
               SiClickGoTo[1] = \"#\";
               imgPath[1] = i1.src;
               i2 = new Image;
               i2.src = \"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/livres/la montagne brûlé.jpg"), "html", null, true);
        echo "\";
               SiClickGoTo[2] = \"Lien2\";
               imgPath[2] = i2.src;
\t\t\t   
\t\t\t}
\t\t\ta = 0;
\t\t\tfunction StartAnim()
\t\t\t{
\t\t\t    if (version >= 3)
\t\t\t\t{
\t\t\t\t   document.write('<a href=\"#\" onclick=\"ImgDest();return(false)\"><img src=\"../images/livres/cameroun.jpg\" border=\"0\" alt=\"Menu\" name=\"defil\" /></a>');
\t\t\t\t   defilimg()
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t   document.write('<a href=\"#\"><img src=\"\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ifrikiyasite/images/livres/bakassi.jpg"), "html", null, true);
        echo "\";\" border=\"0\" /></a>')
\t\t\t\t}
\t\t    }
            function ImgDest()
            {
\t\t\t   document.location.href = SiClickGoTo[a-1];
\t\t\t}
            function defilimg()
\t\t\t{
\t\t\tif (a == 3)
\t\t\t{
\t\t\t   a = 0;
\t\t\t}
            if (version >= 3)
\t\t\t{
\t\t\t   document.defil.src = imgPath[a];
               tempo3 = setTimeout(\"defilimg()\",10000);
               a++;
\t\t\t}
\t\t}
\t\t
\t\t
\t\tsfHover = function() {
        var sfEls = document.getElementById(\"menu\").getElementsByTagName(\"LI\");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=\" sfhover\";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(\" sfhover\\\\b\"), \"\");
                }
        }
        }
        if (window.attachEvent) window.attachEvent(\"onload\", sfHover);
       </script>
\t  ";
    }

    // line 94
    public function block_categorie($context, array $blocks = array())
    {
        // line 95
        echo "\t\t\t <a href=\"";
        echo $this->env->getExtension('routing')->getPath("ifrikiya_admin_acceuil");
        echo "\">
\t         <div class=\"categorie_admin\">
\t\t       <p>ADMINISTRATEUR</p>
\t\t     </div>
\t\t\t </a>
\t\t\t <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("ifrikiya_auteurs_acceuil");
        echo "\">
\t\t     <div class=\"categorie_auteur\">
\t\t       <p>AUTEUR</p>
\t\t     </div>
\t\t\t </a>
\t\t\t <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_construction");
        echo "\">
\t\t     <div class=\"categorie_abonne\">
\t\t       <p>ABONNE</p>
\t\t     </div>
\t\t\t </a>
\t\t\t";
    }

    // line 124
    public function block_connect($context, array $blocks = array())
    {
        // line 125
        echo "\t\t\t  <p>la maison d'édition Camerounaise</p>
\t\t\t  <!--
\t\t\t  ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 128
            echo "              <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
              ";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "
             </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "             ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 133
            echo "               bienvenu ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo " </br> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
             ";
        } else {
            // line 135
            echo "\t\t\t  <div id=\"connect\">
              <a href=\"";
            // line 136
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
\t\t\t  </div>
             ";
        }
        // line 139
        echo "\t\t\t -->
\t\t\t  ";
    }

    // line 146
    public function block_menu($context, array $blocks = array())
    {
        // line 147
        echo "\t\t<ul>
\t\t  <li>
\t\t    <a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_catalogue");
        echo "\">CATALOGUE</a>
\t\t  </li>
\t\t  <li>
\t\t     <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_collection");
        echo "\">COLLECTIONS</a>
\t\t\t <!--
\t\t\t  <ul>
\t\t        <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 1));
        echo "\">Bambino et jeunesse</a></li>
\t\t\t\t<li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 2));
        echo "\">Proximité</a></li>
\t\t\t\t<li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 3));
        echo "\">trajectoires</a></li>
\t\t\t\t<li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 4));
        echo "\">Interlignes</a></li>
\t\t\t\t<li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 5));
        echo "\">ronde</a></li>
\t\t\t\t<li><a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 6));
        echo "\">grisee</a></li>
\t\t\t\t<li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => 7));
        echo "\">spiritualité</a></li>
\t\t\t  </ul>
\t\t\t  -->
\t\t  </li>
\t\t  <li>
\t\t    <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_ecrivains");
        echo "\">AUTEURS</a>
\t\t  </li>
\t\t  <li>
\t\t    <a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_genre");
        echo "\">GENRES</a>
\t\t  </li>
\t\t</ul>
      ";
    }

    // line 227
    public function block_left($context, array $blocks = array())
    {
        // line 228
        echo "\t\t  <div class=\"titre_menu\">
\t\t      <h4><a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_genre");
        echo "\">GENRES LITTERAIRES</a></h4>
\t\t  </div>
\t\t  
\t\t\t<div class=\"deuxieme\"><a href=\"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 1));
        echo "\">ROMAN</a></div>
\t\t    <div class=\"premier\"><a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 4));
        echo "\">NOUVELLE</a></div>
\t\t    <div class=\"deuxieme\"><a href=\"";
        // line 234
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 2));
        echo "\">POESIE</a></div>
\t\t    <div class=\"premier\"><a href=\"";
        // line 235
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 14));
        echo "\">ESSAI</a></div>
\t\t    <div class=\"deuxieme\"><a href=\"";
        // line 236
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 9));
        echo "\">THEATRE</a></div>
\t\t\t<div class=\"premier\"><a href=\"";
        // line 237
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 13));
        echo "\">BANDE DESSINEE</a></div>
\t\t\t<div class=\"deuxieme\"><a href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 7));
        echo "\">ENFANT</a></div>
\t\t    <div class=\"premier\"><a href=\"";
        // line 239
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => 12));
        echo "\">SPIRITUALITE</a></div>
\t\t\t<div class=\"troisieme\"></div>
\t\t ";
    }

    // line 245
    public function block_corps($context, array $blocks = array())
    {
        // line 246
        echo "\t\t   
\t\t  ";
    }

    public function getTemplateName()
    {
        return "::modelcatalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 246,  574 => 245,  567 => 239,  563 => 238,  559 => 237,  555 => 236,  551 => 235,  547 => 234,  543 => 233,  539 => 232,  533 => 229,  530 => 228,  527 => 227,  519 => 169,  513 => 166,  505 => 161,  501 => 160,  497 => 159,  493 => 158,  489 => 157,  485 => 156,  481 => 155,  475 => 152,  469 => 149,  465 => 147,  462 => 146,  457 => 139,  451 => 136,  448 => 135,  440 => 133,  437 => 132,  428 => 129,  423 => 128,  419 => 127,  415 => 125,  412 => 124,  402 => 105,  394 => 100,  385 => 95,  382 => 94,  342 => 48,  324 => 33,  317 => 29,  310 => 25,  301 => 18,  298 => 17,  291 => 11,  285 => 9,  282 => 8,  276 => 7,  270 => 6,  265 => 297,  258 => 288,  254 => 287,  250 => 286,  246 => 285,  242 => 284,  223 => 268,  219 => 267,  211 => 262,  195 => 248,  193 => 245,  188 => 242,  186 => 227,  178 => 221,  175 => 220,  172 => 219,  167 => 217,  163 => 216,  156 => 215,  154 => 214,  150 => 212,  148 => 211,  114 => 180,  104 => 172,  102 => 146,  95 => 141,  93 => 124,  78 => 112,  75 => 111,  73 => 94,  67 => 91,  55 => 84,  53 => 17,  48 => 15,  43 => 14,  36 => 7,  28 => 2,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  62 => 89,  60 => 17,  57 => 16,  54 => 14,  51 => 13,  44 => 8,  41 => 8,  34 => 6,  31 => 3,);
    }
}
