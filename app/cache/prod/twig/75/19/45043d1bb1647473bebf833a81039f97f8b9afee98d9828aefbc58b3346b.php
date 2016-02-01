<?php

/* ConvertDeviseBundle::layout.html.twig */
class __TwigTemplate_751945043d1bb1647473bebf833a81039f97f8b9afee98d9828aefbc58b3346b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'bodyd' => array($this, 'block_bodyd'),
            'deviselayout' => array($this, 'block_deviselayout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_bodyd($context, array $blocks = array())
    {
        // line 3
        echo "

  ";
        // line 5
        $this->displayBlock('deviselayout', $context, $blocks);
    }

    public function block_deviselayout($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  36 => 5,  32 => 3,  29 => 2,  116 => 44,  108 => 41,  102 => 38,  99 => 37,  87 => 22,  81 => 21,  73 => 19,  70 => 18,  66 => 17,  56 => 14,  48 => 12,  45 => 11,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
