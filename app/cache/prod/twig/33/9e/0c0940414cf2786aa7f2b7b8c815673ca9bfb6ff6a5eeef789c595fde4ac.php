<?php

/* ifrikiyaSiteBundle:Site:ecrivains.html.twig */
class __TwigTemplate_339e0c0940414cf2786aa7f2b7b8c815673ca9bfb6ff6a5eeef789c595fde4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'encodage' => array($this, 'block_encodage'),
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "liste Auteurs";
    }

    // line 10
    public function block_corps($context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_ecrivain"]) ? $context["liste_ecrivain"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ecrivain"]) {
            // line 13
            echo " 
 <div id=\"ecrivain\">
    <p>";
            // line 15
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "nom") . " ") . $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "prenom")), "html", null, true);
            echo "...<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_un_ecrivain", array("id" => $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "idecrivains"))), "html", null, true);
            echo "\">lire la fiche</a></p>
 </div>
 
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecrivain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 

";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:ecrivains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  60 => 15,  56 => 13,  52 => 12,  49 => 11,  46 => 10,  40 => 8,  33 => 4,  30 => 3,);
    }
}
