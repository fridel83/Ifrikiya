<?php

/* ifrikiyaSiteBundle:Recherche:rechercheauteur.html.twig */
class __TwigTemplate_eaf80da7f6df1142ddbbb6633a23bd05e75fc13633c5c0b6b5e3078f9e4da953 extends Twig_Template
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
        if (((isset($context["nbre"]) ? $context["nbre"] : null) < 1)) {
            // line 12
            echo "  <h3>aucun resultat ne correspond à votre recherche</h3>
";
        } else {
            // line 14
            echo "
";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_ecrivain"]) ? $context["liste_ecrivain"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ecrivain"]) {
                // line 16
                echo " 
 <div id=\"ecrivain\">
    <p>";
                // line 18
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
            // line 22
            echo " 
";
        }
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Recherche:rechercheauteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  66 => 18,  62 => 16,  58 => 15,  55 => 14,  51 => 12,  49 => 11,  46 => 10,  40 => 8,  33 => 4,  30 => 3,);
    }
}
