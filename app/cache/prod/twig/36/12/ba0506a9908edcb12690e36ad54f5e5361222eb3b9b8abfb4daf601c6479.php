<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3612ba0506a9908edcb12690e36ad54f5e5361222eb3b9b8abfb4daf601c6479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'encodage' => array($this, 'block_encodage'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'corps' => array($this, 'block_corps'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
    }

    // line 13
    public function block_corps($context, array $blocks = array())
    {
        // line 14
        echo "   
     ";
        // line 16
        echo "
     ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo " ";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "     <div id=\"erreur\">
     ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 20
            echo "       <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null)), "html", null, true);
            echo "</div>
    ";
        }
        // line 22
        echo "     ";
        $this->env->loadTemplate("ifrikiyaUserBundle:Security:connexion.html.twig")->display($context);
        // line 23
        echo "    </div>
   ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  80 => 22,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  62 => 25,  60 => 17,  57 => 16,  54 => 14,  51 => 13,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
