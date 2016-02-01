<?php

/* ::layout.html.twig */
class __TwigTemplate_20aceac12499202d597f15f7141d7a5eba618b6b246e4a1dcba6b06daa64ec6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylsheet' => array($this, 'block_stylsheet'),
            'bodyd' => array($this, 'block_bodyd'),
            'javascript' => array($this, 'block_javascript'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        ";
        // line 3
        $this->displayBlock('stylsheet', $context, $blocks);
        // line 8
        echo "        <title>Accueil</title>
    </head>
    <body> 
 
   <img class=\"logo\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/> 
 <div class=\"container\">
 <div class=\"row\">
 <div class=\"col-lg-12\"><div class=\"row\">
 <div class=\"col-lg-12\">
  <div id=\"carrousel\" class=\"container\">
    <ul>
        <li><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/dollar.png"), "html", null, true);
        echo "\" /></li>
\t<li><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/euro.png"), "html", null, true);
        echo "\" /></li>
\t<li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/livre.png"), "html", null, true);
        echo "\" /></li>
    </ul>
</div>                  
</div>
             
           ";
        // line 26
        $this->displayBlock('bodyd', $context, $blocks);
        // line 28
        echo "</div>

<div class=\"col-lg-3\"></div>
</div>
</div>
<div id=\"courbe\" style=\"height: 400px; min-width: 310px\"></div>       
";
        // line 34
        $this->displayBlock('javascript', $context, $blocks);
        // line 47
        echo " 

</body>
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo " 
</html>
";
    }

    // line 3
    public function block_stylsheet($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        // line 5
        echo "         <link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/style2.css"), "html", null, true);
        echo "\" />
         ";
    }

    // line 26
    public function block_bodyd($context, array $blocks = array())
    {
        // line 27
        echo "           ";
    }

    // line 34
    public function block_javascript($context, array $blocks = array())
    {
        // line 35
        echo "
<script src=\"http://code.highcharts.com/stock/highstock.js\"></script>

<script src=\"http://code.highcharts.com/stock/modules/exporting.js\"></script>         
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script> 

<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 

<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.devise-converter.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/script.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/courbe.js"), "html", null, true);
        echo "\"></script> 

";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        echo " 

";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  136 => 45,  132 => 44,  128 => 43,  123 => 41,  118 => 39,  112 => 35,  109 => 34,  105 => 27,  96 => 6,  91 => 5,  89 => 4,  86 => 3,  80 => 53,  78 => 50,  71 => 34,  63 => 28,  61 => 26,  53 => 21,  49 => 20,  35 => 12,  27 => 3,  23 => 1,  42 => 6,  36 => 5,  32 => 3,  29 => 8,  116 => 44,  108 => 41,  102 => 26,  99 => 37,  87 => 22,  81 => 21,  73 => 47,  70 => 18,  66 => 17,  56 => 14,  48 => 12,  45 => 19,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
