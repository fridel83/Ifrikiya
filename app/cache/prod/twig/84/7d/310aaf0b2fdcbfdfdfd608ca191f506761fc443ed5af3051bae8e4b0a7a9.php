<?php

/* ifrikiyaSiteBundle:Site:erreur.html.twig */
class __TwigTemplate_847d310aaf0b2fdcbfdfdfd608ca191f506761fc443ed5af3051bae8e4b0a7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "  <div id=\"erreur\">
\t\t   <p>désolé la page que vous demandez n'est pas accessible</br>
\t\t   <a href=\" ";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">retour acceuil</a>
\t\t   </p>
\t\t  
</div>
 
 ";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:erreur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 5,  28 => 4,);
    }
}
