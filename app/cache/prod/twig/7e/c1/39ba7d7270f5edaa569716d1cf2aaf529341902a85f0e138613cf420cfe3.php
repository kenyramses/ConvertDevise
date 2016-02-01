<?php

/* ConvertDeviseBundle::layoutAdmin.html.twig */
class __TwigTemplate_7ec139ba7d7270f5edaa569716d1cf2aaf529341902a85f0e138613cf420cfe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layoutAdmin.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'devise_body' => array($this, 'block_devise_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Site - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
 

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('devise_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_devise_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  53 => 17,  50 => 15,  43 => 9,  40 => 8,  33 => 5,  30 => 4,  142 => 65,  132 => 60,  122 => 53,  118 => 52,  112 => 49,  105 => 45,  102 => 44,  93 => 38,  89 => 37,  83 => 34,  76 => 30,  72 => 28,  70 => 27,  67 => 26,  63 => 25,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
