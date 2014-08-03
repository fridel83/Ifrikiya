<?php

/* ifrikiyaSiteBundle:Recherche:recherche_content.html.twig */
class __TwigTemplate_10b92bbab92aea8956e114a38a018d9466e5179bf94f998e737e3732e759adcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("ifrikiya_site_recherche_detaillee");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"ifrikiya_sitebundle_recherche\">
    
      <table>
     <tr>
       <td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre"), 'label');
        echo "</td>
       <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre"), 'errors');
        echo "</td>
\t   <td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "titre"), 'widget');
        echo "</td>
\t </tr>
\t <tr>
\t    <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur"), 'label');
        echo "</td>
\t    <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur"), 'errors');
        echo "</td>
\t    <td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "auteur"), 'widget');
        echo "</td>
\t </tr>
\t <tr>
\t    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annee"), 'label');
        echo "</td>
\t    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annee"), 'errors');
        echo "</td>
\t    <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "annee"), 'widget');
        echo "</td>
\t </tr>
\t 
\t</table>
\t 
        <p><input type=\"submit\" value=\"lancer la recherche\" /><p>
    
</form>";
    }

    public function getTemplateName()
    {
        return "ifrikiyaSiteBundle:Recherche:recherche_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 16,  47 => 11,  37 => 7,  33 => 6,  29 => 5,  19 => 1,  577 => 246,  574 => 245,  567 => 239,  563 => 238,  559 => 237,  555 => 236,  551 => 235,  547 => 234,  543 => 233,  539 => 232,  533 => 229,  530 => 228,  527 => 227,  519 => 169,  513 => 166,  505 => 161,  501 => 160,  497 => 159,  493 => 158,  489 => 157,  485 => 156,  481 => 155,  475 => 152,  469 => 149,  465 => 147,  462 => 146,  457 => 139,  451 => 136,  448 => 135,  440 => 133,  437 => 132,  428 => 129,  423 => 128,  419 => 127,  415 => 125,  412 => 124,  402 => 105,  394 => 100,  385 => 95,  382 => 94,  342 => 48,  324 => 33,  317 => 29,  310 => 25,  301 => 18,  298 => 17,  291 => 11,  285 => 9,  282 => 8,  276 => 7,  270 => 6,  265 => 297,  258 => 288,  254 => 287,  250 => 286,  246 => 285,  242 => 284,  223 => 268,  219 => 267,  211 => 262,  195 => 248,  193 => 245,  188 => 242,  186 => 227,  178 => 221,  175 => 220,  172 => 219,  167 => 217,  163 => 216,  156 => 215,  154 => 214,  150 => 212,  148 => 211,  114 => 180,  104 => 172,  102 => 146,  95 => 141,  93 => 124,  78 => 112,  75 => 111,  73 => 94,  67 => 91,  55 => 84,  53 => 17,  48 => 15,  43 => 10,  36 => 7,  28 => 2,  83 => 23,  80 => 22,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  62 => 89,  60 => 17,  57 => 15,  54 => 14,  51 => 12,  44 => 8,  41 => 8,  34 => 6,  31 => 3,);
    }
}
