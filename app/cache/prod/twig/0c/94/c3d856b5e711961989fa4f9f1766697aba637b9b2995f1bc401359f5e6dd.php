<?php

/* ConvertDeviseBundle:Devise:admin.html.twig */
class __TwigTemplate_0c94c3d856b5e711961989fa4f9f1766697aba637b9b2995f1bc401359f5e6dd extends Twig_Template
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
        echo "
  <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\"><div class=\"row\">
\t\t
\t\t</div>
       

         </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
