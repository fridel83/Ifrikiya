<?php

/* ifrikiyaSiteBundle:Site:genre.html.twig */
class __TwigTemplate_4c58290aae27ecd1b5764ffe59fc11c093db510b14b23b3026d05a1c9e37f944 extends Twig_Template
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
        echo "<div id=\"titre_genre\">
     <h4>Genres littéraires </h4>
  </div>

  ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 14
            echo "    <div id=\"genre\">
      <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : null), "libelle"), "html", null, true);
            echo "...<a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_genre", array("id" => $this->getAttribute((isset($context["genre"]) ? $context["genre"] : null), "idgenres"))), "html", null, true);
            echo "\">voir les livres</a><p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:genre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  55 => 15,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
