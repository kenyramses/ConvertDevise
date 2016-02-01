<?php

/* ConvertDeviseBundle:Devise:index.html.twig */
class __TwigTemplate_ffcf8cc977a97f3f4ab8e055de4b2b43b933c663900d3d7ac37e0e8191e1570d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ConvertDeviseBundle::layout.html.twig");

        $this->blocks = array(
            'deviselayout' => array($this, 'block_deviselayout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ConvertDeviseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_deviselayout($context, array $blocks = array())
    {
        // line 5
        echo " 
  <FORM id=\"currency-selector\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("convert_devise_convert");
        echo "\" method=\"post\">
                   

           <select class=\"panel panel-info\" type=\"choice\"  name=\"_source\" id=\"source\"  >
                ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")));
        foreach ($context['_seq'] as $context["_key"] => $context["devise"]) {
            // line 11
            echo "                ";
            if ($this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "etat")) {
                // line 12
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devise"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devisedesc"), "html", null, true);
                echo "</option>
                     ";
            }
            // line 14
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                </select>
                <select class=\"panel panel-info\" type=\"choice\"  name=\"_cible\" id=\"cible\" >
                     ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")));
        foreach ($context['_seq'] as $context["_key"] => $context["devise"]) {
            // line 18
            echo "                     ";
            if ($this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "etat")) {
                // line 19
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devise"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["devise"]) ? $context["devise"] : $this->getContext($context, "devise")), "devisedesc"), "html", null, true);
                echo "</option>
                     ";
            }
            // line 21
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['devise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                   
                </select>
      <br> <br> <br> <br> <br>
                <label>
                 Montant
                 </label>
       <input  type=\"text\" id=\"montant\"  name=\"_montant\"  >
        <input type=\"submit\" name=\"submit\" value=\"Valider\" class=\"btn btn-lg btn-success btn-block\" />
                             
             </FORM>
           ";
        // line 37
        echo " <div class=\"col-lg-2\"> 
               <div class=\"source\">1 ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "html", null, true);
        echo "</div>
              </div>
               <div class=\"col-lg-2\"> 
               <div class=\"cible\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cible"]) ? $context["cible"] : $this->getContext($context, "cible")), "html", null, true);
        echo "</div>
               </div>            
                <div class=\"col-lg-2 col-lg-offset-2\"> 
               <div class=\"total\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["source"]) ? $context["source"] : $this->getContext($context, "source")), "html", null, true);
        echo "  vaut ";
        echo twig_escape_filter($this->env, ((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")) * (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["cible"]) ? $context["cible"] : $this->getContext($context, "cible")), "html", null, true);
        echo "</div>
                </div>
  
";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  108 => 41,  102 => 38,  99 => 37,  87 => 22,  81 => 21,  73 => 19,  70 => 18,  66 => 17,  56 => 14,  48 => 12,  45 => 11,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
