<?php

/* ifrikiyaSiteBundle:Site:voirLivre.html.twig */
class __TwigTemplate_f89441b923119e25a4d294ddfdabf8896276f25db7d3e6819bb726387cbe6b46 extends Twig_Template
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

    // line 4
    public function block_encodage($context, array $blocks = array())
    {
        // line 5
        echo "   ";
        $this->displayParentBlock("encodage", $context, $blocks);
        echo "
 ";
    }

    // line 9
    public function block_corps($context, array $blocks = array())
    {
        // line 10
        echo "
  <div id=\"cadre\">
    <div class=\"cadre_image\">
      
      <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "idlivre"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/ifrikiyasite/images/livres/" . (isset($context["nom"]) ? $context["nom"] : null))), "html", null, true);
        echo "\" /></a>
    </div>
    <div class=\"present\">
      <h3><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "idlivre"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "titre"), "html", null, true);
        echo "</a></h3>
      <p> paru en: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "annee"), "html", null, true);
        echo "</p>
      <p>prix: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "prixUnitaireFcfa"), "html", null, true);
        echo " fcfa,  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "prixUnitaireEuro"), "html", null, true);
        echo " euros</p>
    </div>
    <div class=\"auteur\">
    <h3>Auteurs:</h3>
      ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) ? $context["auteurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 24
            echo "         <h4><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_un_ecrivain", array("id" => $this->getAttribute((isset($context["auteur"]) ? $context["auteur"] : null), "idecrivains"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["auteur"]) ? $context["auteur"] : null), "prenom") . " ") . $this->getAttribute((isset($context["auteur"]) ? $context["auteur"] : null), "nom")), "html", null, true);
            echo "</a></br></h4>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
    <div id=\"presentation\">
     <p> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "presentation"), "html", null, true);
        echo "</p>
    </div>
  </div>
  <hr/>


";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:voirLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  90 => 26,  79 => 24,  75 => 23,  66 => 19,  62 => 18,  56 => 17,  48 => 14,  42 => 10,  39 => 9,  32 => 5,  29 => 4,);
    }
}
