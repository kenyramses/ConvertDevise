<?php

/* ConvertDeviseBundle:Devise:ajouter.html.twig */
class __TwigTemplate_20fbd9be0e3d20267807f3fdf123d7d2d6b92ac3010404212b09494e5b05b426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConvertDeviseBundle::layoutAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'devise_body' => array($this, 'block_devise_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConvertDeviseBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo " Ajouter - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_devise_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"col-lg-4 col-lg-offset-4\">
  <h2>Ajoutr une devise</h2>
</div>
 <div class=\"col-lg-5 col-lg-offset-4\">
  <div class=\"well\">
  <form method=\"post\" ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
 </div>
 

 
";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
