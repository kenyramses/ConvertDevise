<?php

/* ConvertDeviseBundle:Devise:voirhistorique.html.twig */
class __TwigTemplate_b62bb550895f1079ef1942f7099938ce36f3eb1a7473e897dac5d9d098e304d9 extends Twig_Template
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
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_devise_body($context, array $blocks = array())
    {
        // line 9
        echo "
 <div class=\"col-lg-8 col-md-8 col-xs-12 col-lg-offset-2\">
           ";
        // line 11
        $context["i"] = 0;
        echo "  
      <div class=\"col-lg-2 col-md-4 col-xs-6 bg-info \">
                            Devise Source
     </div>
                    
      <div class=\"col-lg-2 col-md-4 col-xs-6 bg-info\">
                        Devise Cible
     
     </div>
     <div class=\"col-lg-2 col-md-4 col-xs-6  bg-info\">
                           IP Client
     </div>
                    
                    
      <div class=\"col-lg-1 col-md-4 col-xs-6 bg-info\">
                       Cours
     
     </div>
     <div class=\"col-lg-1 col-md-4 col-xs-6 bg-info\">
                             Montant 
     </div>
      <div class=\"col-lg-3 col-md-4 col-xs-6 bg-info\">
                             Date 
     </div>
      <div class=\"col-lg-1 col-md-4 col-xs-6 bg-info\">
                             Etat ip(0 bloqué)
     </div>
      ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 39
            echo "     
      ";
            // line 40
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2)) {
                // line 41
                echo "     ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 42
                echo "     <div class=\"col-lg-2 col-md-4 col-xs-6\">
                             ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "source"), "html", null, true);
                echo "  
     </div>
                    
      <div class=\"col-lg-2 col-md-4 col-xs-6 \">
                         ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "cible"), "html", null, true);
                echo "
     
     </div>
     <div class=\"col-lg-2 col-md-4 col-xs-6  \">
                             ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "ipdclient"), "html", null, true);
                echo "  
     </div>
                    
                    
      <div class=\"col-lg-1 col-md-4 col-xs-6 \">
                         ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "cour"), "html", null, true);
                echo "
     
     </div>
     <div class=\"col-lg-1 col-md-4 col-xs-6 \">
                             ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "montant"), "html", null, true);
                echo "  
     </div>
     <div class=\"col-lg-3 col-md-4 col-xs-6 \">
                    ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "datedemande"), "date"), "html", null, true);
                echo "
     
     </div>
     <div class=\"col-lg-1 col-md-4 col-xs-6  \">
                             ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "etatip"), "html", null, true);
                echo "  
     </div>
     ";
            } else {
                // line 70
                echo "     ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 71
                echo "     <div class=\"col-lg-2 col-md-4 col-xs-6 bg-success\">
                             ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "source"), "html", null, true);
                echo "  
     </div>
                    
      <div class=\"col-lg-2 col-md-4 col-xs-6 bg-success\">
                         ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "cible"), "html", null, true);
                echo "
     
     </div>
     <div class=\"col-lg-2 col-md-4 col-xs-6  bg-success\">
                             ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "ipdclient"), "html", null, true);
                echo "  
     </div>
                    
                    
      <div class=\"col-lg-1 col-md-4 col-xs-6 bg-success\">
                         ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "cour"), "html", null, true);
                echo "
     
     </div>
     <div class=\"col-lg-1 col-md-4 col-xs-6 bg-success\">
                             ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "montant"), "html", null, true);
                echo "  
     </div>
      <div class=\"col-lg-3 col-md-4 col-xs-6 bg-success\">
        ";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "datedemande"), "date"), "html", null, true);
                echo "                  
     
     </div>
     <div class=\"col-lg-1 col-md-4 col-xs-6 bg-success\">
                             ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")), "etatip"), "html", null, true);
                echo "  
     </div>
       
             ";
            }
            // line 100
            echo "     
     
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                           
                          
                      

 </div>
 
";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:voirhistorique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 103,  194 => 100,  187 => 96,  180 => 92,  174 => 89,  167 => 85,  159 => 80,  152 => 76,  145 => 72,  142 => 71,  139 => 70,  133 => 67,  126 => 63,  120 => 60,  113 => 56,  105 => 51,  98 => 47,  91 => 43,  88 => 42,  85 => 41,  83 => 40,  80 => 39,  76 => 38,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
