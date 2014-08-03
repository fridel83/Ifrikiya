<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_b6e39f2a6a130eaf98eebda68af55636171065c837933ede4e910cac958949e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'encodage' => array($this, 'block_encodage'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo " An Error Occurred: ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_encodage($context, array $blocks = array())
    {
        // line 8
        echo "   ";
        $this->displayParentBlock("encodage", $context, $blocks);
        echo "
 ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "  
    <div class=\"catalogue\">
\t\t <p><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ifrikiya_admin_acceuil");
        echo "\">bienvenu ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        echo "!!!</a></p>
\t  </div>
\t  <div class=\"collection\">
\t\t <p><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ifrikiya_admin_acceuil");
        echo "\">page acceuil admin</a></p>
\t  </div>
\t  <div class=\"nos_auteurs\">
\t\t <p><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">deconnexion</a></p>
\t  </div>  
  
 ";
    }

    // line 29
    public function block_corps($context, array $blocks = array())
    {
        // line 30
        echo "    <h1>Oops! une erreur s'est produite</h1>
    <h2>le serveur retourne: \"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>
 
    <div>
\t   <h1>hein père!!!</h1>
\t   <p>la page que vous cherchez n'existe pas(ou plus)...</p>
      désolé pour ce désagrément nous nous efforçons de résoudre le problème très rapidement</br>
\t     <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo ">retour acceuil</a>
    </div>
 ";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  97 => 31,  94 => 30,  91 => 29,  83 => 24,  77 => 21,  69 => 18,  65 => 16,  62 => 15,  55 => 12,  52 => 11,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
