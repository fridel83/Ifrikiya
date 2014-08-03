<?php

/* ifrikiyaSiteBundle:Site:unecrivain.html.twig */
class __TwigTemplate_15c480945dd26a348a07a0e223a9eef5b8bf2f466ea95fbf3a7e471086156a85 extends Twig_Template
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
        echo "Fiche ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "prenom") . " ") . $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "nom")), "html", null, true);
        echo "!";
    }

    // line 10
    public function block_corps($context, array $blocks = array())
    {
        // line 11
        echo " 
 <div id=\"cadre\">
    <h1>";
        // line 13
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "prenom") . " ") . $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "nom")), "html", null, true);
        echo "</h1>
    <p>la fiche de cet auteur sera disponible bientôt, merci et bonne navigation!!!</p>
    <p><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_ecrivains");
        echo "\">retour liste d'ecrivain</a></p>
    <p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_acceuil");
        echo "\">retour acceuil</a></p>
    <p><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ifrikiya_site_ouvre_auteur", array("id" => $this->getAttribute((isset($context["ecrivain"]) ? $context["ecrivain"] : null), "idecrivains"))), "html", null, true);
        echo "\">voir ses oeuvres</a></p>
 
 </div>

";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Site:unecrivain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 16,  60 => 15,  55 => 13,  51 => 11,  48 => 10,  40 => 8,  33 => 4,  30 => 3,);
    }
}
