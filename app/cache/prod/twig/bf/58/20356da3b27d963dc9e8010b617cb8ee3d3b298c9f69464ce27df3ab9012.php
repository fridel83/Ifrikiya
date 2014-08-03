<?php

/* ifrikiyaSiteBundle:Site:collection.html.twig */
class __TwigTemplate_bf5820356da3b27d963dc9e8010b617cb8ee3d3b298c9f69464ce27df3ab9012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "liste collection  ";
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
        echo "
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collections"]) ? $context["collections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 11
            echo "    <div id=\"collection\">
      <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "libelle"), "html", null, true);
            echo "...<a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_collection", array("id" => $this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "idcollections"))), "html", null, true);
            echo "\">voir la collection</a></p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  59 => 12,  56 => 11,  52 => 10,  49 => 9,  46 => 8,  39 => 4,  36 => 3,  30 => 2,);
    }
}
