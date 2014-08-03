<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_742c61dc53e587871c5061d51429737348f4757ca8e7a7cc12461b622e701168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_corps($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    <h3>inscription</h3>
";
        // line 8
        $this->env->loadTemplate("ifrikiyaUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  39 => 6,  32 => 5,  29 => 4,);
    }
}
