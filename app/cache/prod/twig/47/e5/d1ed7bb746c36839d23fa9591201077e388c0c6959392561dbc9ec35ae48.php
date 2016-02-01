<?php

/* ConvertDeviseBundle:Devise:voir.html.twig */
class __TwigTemplate_47e5d1ed7bb746c36839d23fa9591201077e388c0c6959392561dbc9ec35ae48 extends Twig_Template
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
 <div class=\"col-lg-8 col-md-8 col-xs-12 col-lg-offset\">
           ";
        // line 11
        $context["i"] = 0;
        echo "  
     
     <div class=\"col-lg-3 col-md-4 col-xs-6 col-lg-offset-4 bg-success \">
                           Devise
     </div>
                    
      <div class=\"col-lg-3 col-md-4 col-xs-6 bg-success\">
                        Description
     
     </div>
     <button class=\"bg-success\">
                         Etat Devise
     
     </button>
         ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")));
        foreach ($context['_seq'] as $context["_key"] => $context["devise"]) {
            // line 26
            echo "     
      ";
            // line 27
            if (($this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "etat") == true)) {
                // line 28
                echo "    
     <div class=\"col-lg-3 col-md-4 col-xs-6 col-lg-offset-4 \">
                             ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devise"), "html", null, true);
                echo "  
     </div>
                    
      <div class=\"col-lg-3 col-md-4 col-xs-6 \">
                         ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devisedesc"), "html", null, true);
                echo "
     
     </div>
       <form action=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("convert_devise_admin_etat");
                echo "\" method=\"post\">
       <input type=\"text\" id=\"etat\" hidden=\"false\" name=\"_id\"  value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "id"), "html", null, true);
                echo "\" >
    
      <button class=\"activer\">
         
                        Desactiver
            ";
            } else {
                // line 44
                echo "            <div class=\"col-lg-3 col-md-4 col-xs-6 col-lg-offset-4 btn-danger \">
                             ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devise"), "html", null, true);
                echo "  
     </div>
                    
      <div class=\"col-lg-3 col-md-4 col-xs-6 bg-danger btn-danger\">
                         ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devisedesc"), "html", null, true);
                echo "
     
     </div>
       <form action=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("convert_devise_admin_etat");
                echo "\" method=\"post\">
       <input type=\"text\" id=\"etat\" hidden=\"false\" name=\"_id\"  value=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "id"), "html", null, true);
                echo "\" >
    
      <button class=\"activer\">
         
                        Activer
              
             ";
            }
            // line 60
            echo "     </button>
       </form>
     
     
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                           
                          
                      

 </div>
 
";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  132 => 60,  122 => 53,  118 => 52,  112 => 49,  105 => 45,  102 => 44,  93 => 38,  89 => 37,  83 => 34,  76 => 30,  72 => 28,  70 => 27,  67 => 26,  63 => 25,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
