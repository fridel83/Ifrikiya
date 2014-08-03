<?php

/* ifrikiyaUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f8351f7a7334fdb3086bf6449c9b1f53a8cdab2f3ec98496f61914573980db7a extends Twig_Template
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
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
     <div class=\"error\">
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>
    
      <table>
     <tr>
       <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'label');
        echo "</td>
       <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'errors');
        echo "</td>
\t   <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget');
        echo "</td>
\t </tr>
\t <tr>
\t    <td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'label');
        echo "</td>
\t    <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'errors');
        echo "</td>
\t    <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget');
        echo "</td>
\t </tr>
\t 
\t</table>
\t 
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    
    
        <p><input type=\"submit\" value=\"valider\" /><p>
    
</form>";
    }

    public function getTemplateName()
    {
        return "ifrikiyaUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  59 => 16,  55 => 15,  51 => 14,  45 => 11,  37 => 9,  22 => 2,  19 => 1,  44 => 8,  41 => 10,  39 => 6,  32 => 5,  29 => 4,);
    }
}
