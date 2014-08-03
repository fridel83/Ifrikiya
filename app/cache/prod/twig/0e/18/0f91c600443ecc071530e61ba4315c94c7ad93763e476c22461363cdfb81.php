<?php

/* ifrikiyaSiteBundle:Site:construction.html.twig */
class __TwigTemplate_0e180f91c600443ecc071530e61ba4315c94c7ad93763e476c22461363cdfb81 extends Twig_Template
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

    // line 8
    public function block_corps($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"erreur\">
   <h4>cette page du site est en construction</h4>
   <p>veuillez nous en excuser et revenir bientôt...bonne navigation!</p>
   <p><a href=\" ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">retour acceuil</a></p>
 </div>  
";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:construction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
