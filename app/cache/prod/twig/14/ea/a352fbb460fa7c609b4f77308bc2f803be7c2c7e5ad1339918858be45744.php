<?php

/* ConvertDeviseBundle:Devise:param.html.twig */
class __TwigTemplate_14eaa352fbb460fa7c609b4f77308bc2f803be7c2c7e5ad1339918858be45744 extends Twig_Template
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
        echo " <div class=\"container\">
      <div class=\"row center-block\">
        
            <br>  <br>  <br>  <br>  <br>
        <div class=\"col-lg-4 col-lg-offset-4\"> 
  <form name=\"login-form\" class=\"login-form\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("convert_devise_admin_param");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                               Durée <input type=\"text\"    id=\"duree\" name=\"_duree\"  required=\"required\"  class=\"form-control\" value=\"10\" onfocus=\"this.value=''\" />
                                </div>
                                 <div class=\"form-group\">
                               Nombre de demande  <input type=\"text\" id=\"nbmax\" name=\"_nbmax\"  required=\"required\"  class=\"form-control\" value=\"10\" onfocus=\"this.value=''\" />
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                              <input type=\"submit\" name=\"submit\" value=\"Valider\" class=\"btn btn-lg btn-success btn-block\" />
                              
                            </fieldset>
                        </form>
        </div>
      </div>
 </div>
    ";
    }

    public function getTemplateName()
    {
        return "ConvertDeviseBundle:Devise:param.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
