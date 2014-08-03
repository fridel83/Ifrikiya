<?php

/* ifrikiyaSiteBundle:Recherche:recherchetitre.html.twig */
class __TwigTemplate_b707a64f1b4031f716872c9648e5ddb981c95f1470fd2ae21d65dd1e95d751ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::modelcatalogue.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'encodage' => array($this, 'block_encodage'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Resultat de la  recherche";
    }

    // line 5
    public function block_encodage($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("encodage", $context, $blocks);
        echo "
 ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 ";
    }

    // line 14
    public function block_corps($context, array $blocks = array())
    {
        // line 15
        echo " <div id=\"admin\">
 ";
        // line 16
        if (((isset($context["nbre"]) ? $context["nbre"] : null) < 1)) {
            // line 17
            echo "   <h3>aucun resultat ne correspond à votre recherche</h3>
 ";
        } else {
            // line 19
            echo "   
    <h3>resultat de votre recherche</h3>
    ";
            // line 21
            if (((isset($context["nbre"]) ? $context["nbre"] : null) == 1)) {
                // line 22
                echo "    <p> nous avous ";
                echo twig_escape_filter($this->env, (isset($context["nbre"]) ? $context["nbre"] : null), "html", null, true);
                echo " resultat correspondant à votre recherche<p>
    ";
            } else {
                // line 24
                echo "      <p> nous avous ";
                echo twig_escape_filter($this->env, (isset($context["nbre"]) ? $context["nbre"] : null), "html", null, true);
                echo " resultats correspondant à votre recherche<p>
    ";
            }
            // line 26
            echo "   <table>
    <tr>
        <th>livre</th>
        <th>Actions</th>
    </tr>
    ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) ? $context["livres"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 32
                echo "    <tr>
        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "titre"), "html", null, true);
                echo "</td>
        <td>
            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_voir_livre", array("id" => $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "idlivre"))), "html", null, true);
                echo "\">voir le livre</a> 
        </td>
        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livre"]) ? $context["livre"] : null), "annee"), "html", null, true);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</table>
";
        }
        // line 42
        echo " </div>
 
 ";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Recherche:recherchetitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  120 => 40,  111 => 37,  106 => 35,  101 => 33,  98 => 32,  94 => 31,  87 => 26,  81 => 24,  75 => 22,  73 => 21,  69 => 19,  65 => 17,  63 => 16,  60 => 15,  57 => 14,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
