<?php

/* ifrikiyaSiteBundle:Site:voirLivreAuteur.html.twig */
class __TwigTemplate_e83dc62675da6ed7337307d81977477833d85c6a407b5ed86026020241a86fed extends Twig_Template
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
        // line 9
        echo "   ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "NomPrenom"), "html", null, true);
        echo "!
";
    }

    // line 12
    public function block_corps($context, array $blocks = array())
    {
        // line 13
        echo "  <div id=\"titre\">
     <h2>Publications ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "NomPrenom"), "html", null, true);
        echo "!</h2>
  </div>
  ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_livre"]) ? $context["liste_livre"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 17
            echo "
  <div id=\"cadre\">
    <div class=\"cadre_image\">
      
      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "idlivre"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ifrikiyasite/images/livres/" . $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 1, array(), "array"))), "html", null, true);
            echo "\" /></a>
    </div>
    <div class=\"present\">
      <h3><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "idlivre"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "titre"), "html", null, true);
            echo "</a></h3>
      <p> année: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "annee"), "html", null, true);
            echo "</p>
      <p>prix: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "prixUnitaireFcfa"), "html", null, true);
            echo " fcfa,  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "prixUnitaireEuro"), "html", null, true);
            echo " euros</p>
       <p><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute($this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), 0, array(), "array"), "idlivre"))), "html", null, true);
            echo "\">voir ce livre</a></p>
    </div>
    
  </div>
  <hr/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:voirLivreAuteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  89 => 26,  85 => 25,  79 => 24,  71 => 21,  65 => 17,  61 => 16,  56 => 14,  53 => 13,  50 => 12,  43 => 9,  40 => 8,  33 => 4,  30 => 3,);
    }
}
